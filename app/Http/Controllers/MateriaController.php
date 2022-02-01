<?php

namespace App\Http\Controllers;

use App\Mat_materia;
use Illuminate\Http\Request;
use App\Http\Requests\MateriaRequest;
class MateriaController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $materias = Mat_materia::latest()->get();

        return view('materia.index', compact('materias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('materia.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MateriaRequest $request)
    {
        $post = Mat_materia::create($request->all());
        $post->save();

        return redirect('materia')->with('status', 'Creado con exito');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $materia = Mat_materia::find($id);

        return view('materia.edit', compact('materia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MateriaRequest $request, $id)
    {
        $job = Mat_materia::find($request->id);

        $job->update($request->all());
        $job->save();
        return redirect('materia')->with('status', 'Editado con exito');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $job = Mat_materia::find($id);
        $job->delete();
        return redirect('materia')->with('status', 'Eliminado con exito');
        
    }
}
