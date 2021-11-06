<?php

namespace App\Http\Controllers;

use App\Framework;
use App\ProgrammingLanguage;
use App\Http\Requests\FrameworkRequest;

class FrameworkController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(ProgrammingLanguage $programming_language)
    {
        return view('frameworks.create', [
            'programming_language' => $programming_language
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FrameworkRequest $request, ProgrammingLanguage $programming_language)
    {

        $framework = new Framework();
        $framework->name = $request->input('name');
        $framework->description = $request->input('description');
        $framework->programming_language_id = $programming_language->id;

        $framework->save();

        return redirect('/programming-language/'.$programming_language->slug);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Framework  $framework
     * @return \Illuminate\Http\Response
     */
    public function show(Framework $framework)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Framework  $framework
     * @return \Illuminate\Http\Response
     */
    public function edit(Framework $framework)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Framework  $framework
     * @return \Illuminate\Http\Response
     */
    public function update(FrameworkRequest $request, Framework $framework)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Framework  $framework
     * @return \Illuminate\Http\Response
     */
    public function destroy(Framework $framework)
    {
        //
    }
}
