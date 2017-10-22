<?php

namespace App\Http\Controllers;

use App\Campaign;
use App\Http\Requests\CampaignRequest;
use App\Mail\Sender;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use PhpParser\Node\Expr\BinaryOp\Coalesce;

class CampaignController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->authorizeResource(Campaign::class);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $campaigns = Campaign::owned()->get();
        return view('campaign.index', compact('campaigns'));
    }

    public function send(Campaign $campaign)
    {
        $subscribers = $campaign->bunch->subscribers;
        $number_subscribers = $subscribers->count();
        $template = $campaign->template->content;

        $user = Auth::user();

        // available sending 300 emails per day
        if ($user->email_counter + $number_subscribers > 300) {
            $date = Carbon::parse($user->counter_reset);

            // if limit expired today - return error
            if ($date->isToday()) {
                return redirect()->back()->with('data', [
                    'type' => 'warning',
                    'message' => 'Delivery limit expired'
                ]);
            } else {
                $user->counter_reset = $date;
                $user->email_counter = 0;
            }
        }

        $user->email_counter += $number_subscribers;

        // Sending first 25 emails, other push to email queue
        foreach($subscribers->take(25) as $subscriber) {
            Mail::to($subscriber->email)->send(new Sender($template, $subscriber));
        }

        if ($number_subscribers > 25) {
            foreach($subscribers->splice(25) as $subscriber) {
                Mail::to($subscriber->email)->queue(new Sender($template, $subscriber));
            }
        }

        $user->save();

        return redirect()->back()->with('data', [
            'type' => 'success',
            'message' => 'Messages successfully sent'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('campaign/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Campaign $campaign
     * @param CampaignRequest|Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Campaign $campaign, CampaignRequest $request)
    {
        $campaign->create($request->all());
        return redirect()->route('campaign.index');
    }

    /**
     * Display the specified resource.
     *
     * @param Campaign $campaign
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function show(Campaign $campaign)
    {
        $subscribers = $campaign->bunch->subscribers->take(200)->implode('email', ', ');

        if ($campaign->bunch->subscribers->count() > 200) {
            $subscribers .= '...';
        }

        return view('campaign.show', compact('campaign', 'subscribers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Campaign $campaign
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function edit(Campaign $campaign)
    {
        return view('campaign.edit', compact('campaign'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Campaign $campaign
     * @param CampaignRequest|Request $request
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function update(Campaign $campaign, CampaignRequest $request)
    {
        $campaign->update($request->all());
        return redirect()->route('campaign.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Campaign $campaign
     * @return \Illuminate\Http\Response
     * @throws \Exception
     * @internal param int $id
     */
    public function destroy(Campaign $campaign)
    {
        $campaign->delete();
        return redirect()->route('campaign.index');
    }
}
