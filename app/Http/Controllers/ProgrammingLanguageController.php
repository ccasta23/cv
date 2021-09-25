<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProgrammingLanguageRequest;
use App\ProgrammingLanguage;
use Illuminate\Http\Request;

class ProgrammingLanguageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('programming_languages.index', [
            'programming_languages' => ProgrammingLanguage::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('programming_languages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProgrammingLanguageRequest $request)
    {
        //Antes de almacenar en base de  datos primero validar que los datos son correctos
        /*$request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'release_year' => 'required|integer',
            'actual_version' => 'required|max:10',
        ],
[
            'name.required' => 'El campo nombre debe ser llenado',
            'actual_version.required' => 'La versión actual no puede estar vacía (Busque en google)'
        ]

        );*/

        //Si las validaciones NO pasan, el código se ejecuta hasta aqui

        //Si las validaciones pasan, el código se sigue ejecutando

        $status = $request->get('status');
        /*true or false*/
        $status = isset($status);

        $language = new ProgrammingLanguage;
        $language->name = $request->get('name');
        $language->description = $request->get('description', 'Sin descripción');
        $language->release_year = $request->get('release_year');
        $language->actual_version = $request->get('actual_version');
        $language->status = $status;

        $language->save();

        return redirect('/programming-language');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $programming_language = ProgrammingLanguage::find($id);

        return view('programming_languages.edit', [
            'programming_language' => $programming_language
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProgrammingLanguageRequest $request, $id)
    {
        /*$request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'release_year' => 'required|integer',
            'actual_version' => 'required|max:10',
        ],
            [
                'name.required' => 'El campo nombre debe ser llenado',
                'actual_version.required' => 'La versión actual no puede estar vacía (Busque en google)'
            ]

        );*/

        $status = $request->get('status');
        /*true or false*/
        $status = isset($status);

        $language = ProgrammingLanguage::find($id);
        $language->name = $request->get('name');
        $language->description = $request->get('description', 'Sin descripción');
        $language->release_year = $request->get('release_year');
        $language->actual_version = $request->get('actual_version');
        $language->status = $status;

        $language->save();

        return redirect('/programming-language');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $programming_language = ProgrammingLanguage::find($id);
        $programming_language->delete();
        return back();
    }
}
