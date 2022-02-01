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

                    <form action="{{ route('grado.update', $grado) }}" method="POST">
                        <div class="row mb-3">
                            <div class="col-md-12 ">
                                <label for="nombre">Nombre de Grado</label>
                                <input type="text" class="form-control" name="nombre" id="nombre" required value="{{ old('name', $grado->nombre) }}">
                            </div>
                            
                        </div>

                        </div>
                        <div class=" form-group">
                            <input type="hidden" name="id" value="{{ $grado->id }}">

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