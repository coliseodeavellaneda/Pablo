@extends('layouts.app')

@section('content')

<div class="container-fluid justify-content-center d-flex mt-5">
    <div class="card w-50 mt-5">
        @if ($edit==0)
        <form action="/admin/role" method="POST" class="container-fluid justify-content-center flex"
            enctype="multipart/form-data">
            @else
            <form action="/admin/role/{{$model->id}}" method="POST" class="container-fluid justify-content-center flex"
                enctype="multipart/form-data">
                @method('PUT')

                @endif
                @csrf
                <br>

                <label for="name">Nombre</label><br>
                  <input type="text" name="name" placeholder="Nombre" value="{{$model->name}}"><br><br>

                <button type="submit" class="btn btn-primary">Guardar</button>
                <br><br>
            </form>
    </div>
</div>
@endsection