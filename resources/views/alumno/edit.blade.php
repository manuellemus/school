@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Editar Alumno</div>

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

                    <form action="{{ route('alumno.update', $alumno) }}" method="POST">
                        <div class="row mb-3">
                            <div class="col-md-6 ">
                                <label for="nombre">Nombre </label>
                                <input type="text" class="form-control" name="nombre" id="nombre" required value="{{ old('nombre', $alumno->nombre) }}">
                            </div>
                            <div class="col-md-6 ">
                                <label for="codigo">Codigo</label>
                                <input type="text" class="form-control" name="codigo" id="codigo" required value="{{ old('codigo', $alumno->codigo) }}">
                            </div>
                            <div class="col-md-6 ">
                                <label for="edad">Edad </label>
                                <input type="text" class="form-control" name="edad" id="edad" required value="{{ old('edad', $alumno->edad) }}">
                            </div>
                            <div class="col-md-6 ">
                                <label for="sexo">Sexo</label>
                                <input type="text" class="form-control" name="sexo" id="sexo" required value="{{ old('sexo', $alumno->sexo) }}">
                            </div>
                            <div class="col-md-6">
                                <label for="department_id">Select Grado</label>
                                <select class="form-control" name="id_grado" id="department_id">
                                    @foreach($grados as $grado)

                                    @if ($grado->id == $alumno->id_grado)
                                    <option selected value="{{ $grado->id }}">{{ $grado->nombre }}</option>

                                    @else
                                    <option value="{{ $grado->id }}">{{ $grado->nombre }}</option>

                                    @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6 ">
                                <label for="name">Observacion</label>
                                <textarea class="form-control" name="observacion" id="" cols="30" rows="3">
                                {{ $alumno->observacion }}
                                </textarea>
                            </div>
                        </div>

                </div>
                <div class=" form-group">
                    <input type="hidden" name="id" value="{{ $alumno->id }}">

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