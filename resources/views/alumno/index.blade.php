@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">alumnos</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <a href="{{ route('alumno.create') }}" class="btn btn-sm btn-primary float-right">Nuevo alumno</a>

                    <table id="example" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>Grado</th>
                                <th></th>
                                <th></th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($alumnos as $alumno)
                            <tr>
                                <td>{{ $alumno->grado->nombre }}</td>
                                <td>{{ $alumno->codigo }}</td>
                                <td>{{ $alumno->nombre }}</td>
                                <td>{{ $alumno->edad }}</td>
                                <td>{{ $alumno->sexo }}</td>
                                <td>{{ $alumno->get_excerpt }}</td>
                                <td>
                                    <a href="{{ route('alumno.edit', $alumno) }}" class="btn btn-sm btn-primary float-right">Editar</a>
                                </td>
                                <td>
                                    <form action="{{ route('alumno.destroy', $alumno->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" value="Eliminar" class="btn btn-sm btn-danger" onclick="return confirm('Desea Eliminar ?...')">

                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection