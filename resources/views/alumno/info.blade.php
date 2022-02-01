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
                    <div class="row mb-3">

                        <div class="col-md-6">
                            <label for="department_id">Select Alumno</label>
                            <select class="form-control" id="id_alumno" id="department_id">
                                <option value="" selected disabled>Selecciones un alumno</option>
                                <option value="0">todos</option>

                                @foreach($alumnos as $alumno)
                                <option value="{{ $alumno->id }}">{{ $alumno->nombre }}</option>
                                @endforeach
                            </select>
                        </div>
                        <table class="table table-hover">
                            <thead>
                                <th>Nombre</th>
                                <th>Grado</th>
                                <th>Materia</th>
                            </thead>
                            <tbody id="cuerpoTabla">

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<input type="hidden" id="url_base" value="{{ route('alumno.list') }}">
<script>
    document.getElementById("id_alumno").addEventListener("change", onChangeSendRequest);

    function onChangeSendRequest() {
        var id_alumno = document.getElementById("id_alumno").value;
        console.log(id_alumno);
        var url_base = document.getElementById("url_base").value;

        $.ajax({
            url: url_base,
            data: "id_alumno=" + id_alumno + "&_token={{ csrf_token()}}",
            dataType: "json",
            method: "POST",
            success: function(data) {
                    
                    //limpiando tabla
                    const $elemento = document.querySelector("#cuerpoTabla");
                    $elemento.innerHTML = "";
                    //fin lipiar
                    for (var i = 0; i < data.length; i++) {
                        var tr = `<tr>
                                    <td>` + data[i].nombre + `</td>
                                    <td>` + data[i].grado + `</td>
                                    <td>` + data[i].materia + `</td>
                                </tr>`;
                        $("#cuerpoTabla").append(tr)
                    }
                    
            },
            fail: function() {},
            beforeSend: function() {}
        });
    }
</script>
@endsection