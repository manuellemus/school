<?php

namespace App\Http\Controllers;

use App\alm_Alumno;
use App\Grd_grado;
use Illuminate\Http\Request;
use App\Http\Requests\AlumnoRequest;
use Illuminate\Support\Facades\DB;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $alumnos = alm_Alumno::latest()->get();

        return view('alumno.index', compact('alumnos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $grados = Grd_grado::all();

        return view('alumno.create', compact('grados'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AlumnoRequest $request)
    {
        $post = alm_Alumno::create($request->all());
        $post->save();

        return redirect('alumno')->with('status', 'Creado con exito');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $grados = Grd_grado::all();
        $alumno = alm_Alumno::find($id);
        return view('alumno.edit', compact('grados', 'alumno'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AlumnoRequest $request, $id)
    {
        $post = alm_Alumno::find($request->id);

        $post->update($request->all());
        $post->save();
        return redirect('alumno')->with('status', 'Editado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = alm_Alumno::find($id);
        $post->delete();
        return redirect('alumno')->with('status', 'Eliminado con exito');
    }

    public function info()
    {
        $alumnos = alm_Alumno::latest()->get();

        return view('alumno.info', compact('alumnos'));
    }

    public function list_request(Request $request)
    {
        $id_alumno = $request->input('id_alumno');
        if ($id_alumno == '0') {
            //$alumnos = alm_Alumno::all();
            $alumnos = DB::table('alm__alumnos')
            ->select('alm__alumnos.nombre', 'alm__alumnos.codigo', 'grd_grados.nombre as grado','mat_materias.nombre as materia')
            ->leftJoin('mxg_materias_x_grados', 'mxg_materias_x_grados.id_grado', '=', 'alm__alumnos.id_grado')
            ->leftJoin('mat_materias', 'mat_materias.id', '=', 'mxg_materias_x_grados.id_materia')
            ->leftJoin('grd_grados', 'grd_grados.id', '=', 'alm__alumnos.id_grado')

            ->get();
        } else {
           // $alumnos = array(alm_Alumno::find($id_alumno));

            $alumnos = DB::table('alm__alumnos')
            ->select('alm__alumnos.nombre', 'alm__alumnos.codigo', 'grd_grados.nombre as grado','mat_materias.nombre as materia')
            ->leftJoin('mxg_materias_x_grados', 'mxg_materias_x_grados.id_grado', '=', 'alm__alumnos.id_grado')
            ->leftJoin('mat_materias', 'mat_materias.id', '=', 'mxg_materias_x_grados.id_materia')
            ->leftJoin('grd_grados', 'grd_grados.id', '=', 'alm__alumnos.id_grado')
            ->where('alm__alumnos.id', '=', $id_alumno)
            ->get();
            //$alumnos = array($alumnos);

        }


 


        return response()->json($alumnos, 201);
    }
}
