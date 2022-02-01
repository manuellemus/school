<?php

namespace App\Http\Controllers;

use App\Grd_grado;
use Illuminate\Http\Request;
use App\Http\Requests\GradoRequest;
class GradoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $grados = Grd_grado::latest()->get();

        return view('grado.index', compact('grados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('grado.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GradoRequest $request)
    {
        $post = Grd_grado::create($request->all());
        $post->save();

        return redirect('grado')->with('status', 'Creado con exito');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $grado = Grd_grado::find($id);

        return view('grado.edit', compact('grado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(GradoRequest $request, $id)
    {
        $job = Grd_grado::find($request->id);

        $job->update($request->all());
        $job->save();
        return redirect('grado')->with('status', 'Editado con exito');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $job = Grd_grado::find($id);
        $job->delete();
        return redirect('grado')->with('status', 'Eliminado con exito');
        
    }
}
