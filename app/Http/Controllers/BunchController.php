<?php

namespace App\Http\Controllers;

use App\Bunch;
use App\Http\Requests\BunchRequest;
use Illuminate\Http\Request;

class BunchController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->authorizeResource(Bunch::class);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bunches = Bunch::owned()->get();
        return view('bunch.index', compact('bunches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bunch.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Bunch $bunch
     * @param BunchRequest|Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Bunch $bunch, BunchRequest $request)
    {
        $bunch->create($request->all());
        return redirect()->route('bunch.index');
    }

    /**
     * Display the specified resource.
     *
     * @param Bunch $bunch
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function show(Bunch $bunch)
    {
        return view('bunch.show', compact('bunch'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Bunch $bunch
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function edit(Bunch $bunch)
    {
        return view('bunch.edit', compact('bunch'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Bunch $bunch
     * @param BunchRequest|Request $request
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function update(BunchRequest $request, Bunch $bunch)
    {
        $bunch->update($request->all());
        return redirect()->route('bunch.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Bunch $bunch
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function destroy(Bunch $bunch)
    {
        $bunch->delete();
        return redirect()->route('bunch.index');
    }
}
