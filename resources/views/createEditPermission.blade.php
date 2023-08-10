@extends('layouts.app')

@section('content')

<div class="container-fluid justify-content-center d-flex mt-5">
    <div class="card w-50 mt-5">
        @if ($edit==0)
        <form action="/admin/permission" method="POST" class="container-fluid justify-content-center flex"
            enctype="multipart/form-data">
            @else
            <form action="/admin/permission/{{$model->id}}" method="POST" class="container-fluid justify-content-center flex"
                enctype="multipart/form-data">
                @method('PUT')

                @endif
                @csrf
                <br>

                <label for="route">Ruta</label>
                <input type="text" name="route" placeholder="Ruta" value="{{$model->route}}"><br><br>
                
                    <label for="type">Type</label><br>
                    <select name="type" value="{{$model->type}}">
                        <option value="view">Ver</option>
                        <option value="create">Crear</option>
                        <option value="edit">Editar</option>
                        <option value="delete">Eliminar</option>
                    </select>
                
                <br><br><br>
                <button type="submit" class="btn btn-primary">Guardar</button>
                <br><br>
            </form>
    </div>
</div>
@endsection