@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Materias</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <a href="{{ route('materia.create') }}" class="btn btn-sm btn-primary float-right">Nueva Materia</a>

                    <table id="example" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>Materia<</th>
                                <th></th>
                                <th></th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($materias as $materia)
                            <tr>
                                <td>{{ $materia->nombre }}</td>

                                <td>
                                    <a href="{{ route('materia.edit', $materia) }}" class="btn btn-sm btn-primary float-right">Editar</a>
                                </td>
                                <td>
                                    <form action="{{ route('materia.destroy', $materia->id) }}" method="POST">
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