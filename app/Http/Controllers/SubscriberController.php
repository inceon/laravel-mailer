<?php

namespace App\Http\Controllers;

use App\Bunch;
use App\Http\Requests\SubscriberRequest;
use App\Subscriber;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->authorizeResource(Subscriber::class);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Bunch $bunch
     * @return \Illuminate\Http\Response
     */
    public function create(Bunch $bunch)
    {
        return view('subscriber.create', compact('bunch'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Subsciber|Subscriber $subscriber
     * @param SubscriberRequest|Request $request
     * @return \Illuminate\Http\Response
     * @internal param Bunch $bunch
     */
    public function store(Subscriber $subscriber, Bunch $bunch, SubscriberRequest $request)
    {
        $subscriber->create($request->all());
        return redirect()->route('bunch.show', compact('bunch'));
    }

    /**
     * Display the specified resource.
     *
     * @param Bunch $bunch
     * @param Subscriber $subscriber
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function show(Bunch $bunch, Subscriber $subscriber)
    {
        return view('subscriber.show', compact(['subscriber', 'bunch']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Bunch $bunch
     * @param Subscriber $subscriber
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function edit(Bunch $bunch, Subscriber $subscriber)
    {
        return view('subscriber.edit', compact(['subscriber', 'bunch']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Subscriber $subscriber
     * @param Bunch $bunch
     * @param SubscriberRequest|Request $request
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function update(Bunch $bunch, Subscriber $subscriber, SubscriberRequest $request)
    {
        $subscriber->update($request->all());
        return redirect()->route('bunch.show', compact('bunch'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Subscriber $subscriber
     * @param Bunch $bunch
     * @return \Illuminate\Http\Response
     * @throws \Exception
     * @internal param int $id
     */
    public function destroy(Bunch $bunch, Subscriber $subscriber)
    {
        $subscriber->delete();
        return redirect()->route('bunch.show', compact('bunch'));
    }

    public function subscription(Subscriber $subscriber)
    {
        return view('subscriber.subscription', compact('subscriber'));
    }

    public function unsubscribe(Subscriber $subscriber, Request $request)
    {
        $subscriber->update($request->all());
        $subscriber->delete();
        return redirect()->route('home');
    }
}
