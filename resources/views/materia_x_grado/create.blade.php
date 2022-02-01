@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Nueva Asignacion</div>

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

                    <form action="{{ route('materia-por-grado.store') }}" method="POST">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="department_id">Select Grado</label>
                                <select class="form-control" name="id_grado" id="department_id">
                                    @foreach($grados as $grado)
                                    <option value="{{ $grado->id }}">{{ $grado->nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="department_id">Select Materia</label>
                                <select class="form-control" name="id_materia" id="department_id">
                                    @foreach($materias as $materia)
                                    <option value="{{ $materia->id }}">{{ $materia->nombre }}</option>
                                    @endforeach
                                </select>
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