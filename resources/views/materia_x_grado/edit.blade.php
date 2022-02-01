@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Editar Grado</div>

                <div class="card-body">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <form action="{{ route('materia-por-grado.update', $mxg_materias_x_grados) }}" method="POST">
                        <div class="row mb-3">
                        <div class="col-md-6">
                                <label for="id_grado">Select Grado</label>
                                <select class="form-control" name="id_grado" id="id_grado">
                                    @foreach($grados as $grado)
                                    
                                    @if ($grado->id == $mxg_materias_x_grados->id_grado)
                                    <option selected value="{{ $grado->id }}">{{ $grado->nombre }}</option>

                                    @else
                                    <option value="{{ $grado->id }}">{{ $grado->nombre }}</option>

                                    @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="id_materia">Select Materia</label>
                                <select class="form-control" name="id_materia" id="id_materia">
                                    @foreach($materias as $materia)
                                 
                                    @if ($materia->id == $mxg_materias_x_grados->id_materia)
                                    <option selected value="{{ $materia->id }}">{{ $materia->nombre }}</option>

                                    @else
                                    <option value="{{ $materia->id }}">{{ $materia->nombre }}</option>

                                    @endif
                                    @endforeach
                                </select>
                            </div>
                            
                        </div>

                        </div>
                        <div class=" form-group">
                            <input type="hidden" name="id" value="{{ $mxg_materias_x_grados->id }}">

                            @csrf
                            @method('PUT')

                            <input type="submit" value="Enviar" class="btn btn-sm btn-primary col-12">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection