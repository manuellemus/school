@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Nuevo Alumno</div>

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

                    <form action="{{ route('alumno.store') }}" method="POST">
                        <div class="row mb-3">
                            <div class="col-md-6 ">
                                <label for="name">Nombre </label>
                                <input type="text" class="form-control" name="nombre" id="name" required>
                            </div>
                            <div class="col-md-6 ">
                                <label for="name">Codigo</label>
                                <input type="text" class="form-control" name="codigo" id="name" required>
                            </div>
                            <div class="col-md-6 ">
                                <label for="name">Edad </label>
                                <input type="text" class="form-control" name="edad" id="name" required>
                            </div>
                            <div class="col-md-6 ">
                                <label for="name">Sexo</label>
                                <input type="text" class="form-control" name="sexo" id="name" required>
                            </div>
                            <div class="col-md-6">
                                <label for="department_id">Select Grado</label>
                                <select class="form-control" name="id_grado" id="department_id">
                                    @foreach($grados as $grado)
                                    <option value="{{ $grado->id }}">{{ $grado->nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6 ">
                                <label for="name">Observacion</label>
                                <textarea class="form-control" name="observacion" id="" cols="30" rows="3">

                                </textarea>
                            </div>
                        </div>

                        </div>
                        <div class=" form-group">
                            @csrf
                            <input type="submit" value="Enviar" class="btn btn-sm btn-primary col-12">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection