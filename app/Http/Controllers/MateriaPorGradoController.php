<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Grd_grado;
use App\Mat_materia;
use App\Mxg_materias_x_grado;
use App\Http\Requests\MateriaPorGradoRequest;

class MateriaPorGradoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $Mxg_materias_x_grados = Mxg_materias_x_grado::latest()->get();

      

        return view('materia_x_grado.index', compact('Mxg_materias_x_grados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $grados = Grd_grado::latest()->get();
        $materias = Mat_materia::latest()->get();

        return view('materia_x_grado.create', compact('materias', 'grados'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MateriaPorGradoRequest $request)
    {
        $post = Mxg_materias_x_grado::create($request->all());
        $post->save();

        return redirect('materia-por-grado')->with('status', 'Creado con exito');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $mxg_materias_x_grados = Mxg_materias_x_grado::find($id);

        $grados = Grd_grado::latest()->get();
        $materias = Mat_materia::latest()->get();

        return view('materia_x_grado.edit', compact('materias', 'grados','mxg_materias_x_grados'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MateriaPorGradoRequest $request, $id)
    {
        $post = Mxg_materias_x_grado::find($request->id);

        $post->update($request->all());
        $post->save();
        return redirect('materia-por-grado')->with('status', 'Editado con exito');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Mxg_materias_x_grado::find($id);
        $post->delete();
        return redirect('materia-por-grado')->with('status', 'Eliminado con exito');
        
    }
}
