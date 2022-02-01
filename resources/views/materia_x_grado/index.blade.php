@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Info</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <a href="{{ route('materia-por-grado.create') }}" class="btn btn-sm btn-primary float-right">Nueva asignacion</a>

                    <table id="example" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Grado</th>
                                <th>Materia</th>

                                <th></th>
                                <th></th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($Mxg_materias_x_grados as $mxg)
                            <tr>
                                <td>{{ $mxg->id }}</td>
                                <td>{{ $mxg->grado->nombre }}</td>
                                <td>{{ $mxg->materia->nombre }}</td>

                                <td>
                                    <a href="{{ route('materia-por-grado.edit', $mxg) }}" class="btn btn-sm btn-primary float-right">Editar</a>
                                </td>
                                <td>
                                    <form action="{{ route('materia-por-grado.destroy', $mxg->id) }}" method="POST">
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