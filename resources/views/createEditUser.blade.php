@extends('layouts.app')

@section('content')

<div class="container-fluid justify-content-center d-flex mt-5">
    <div class="card w-50 mt-5">
        @if ($edit==0)
            <form action="/admin/user" method="POST" class="container-fluid justify-content-center flex" enctype="multipart/form-data" autocomplete="off">
        @else   
            <form action="/admin/user/{{$model->id}}" method="POST" class="container-fluid justify-content-center flex" enctype="multipart/form-data" autocomplete="off">
            @method('PUT')
        @endif
                @csrf              
                <br><br>  
                
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">Nombre</label><br>
                    <div class="col-md-6">
                            <input type="text" name="name" placeholder="Nombre" value="{{$model->name}}"><br><br>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="slug" class="col-md-4 col-form-label text-md-right">Apellido</label><br>
                    <div class="col-md-6">
                            <input type="text" name="lastname" placeholder="Apellido" value="{{$model->lastname}}"><br><br>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="price" class="col-md-4 col-form-label text-md-right">Correo</label><br>
                    <div class="col-md-6">
                        <input type="email" name="email" placeholder="Email" value="{{$model->email}}" autocomplete="new-email"><br><br>
                    </div>
                </div>

                <div class="form-group row">
                  <label for="price" class="col-md-4 col-form-label text-md-right">Cargo</label><br>                  
                    <select name="role" value="{{$model->role}}">
                        <option value="admin">Admin</option>
                        <option value="user">User</option>
                    </select><br><br><br>              
                </div>
                <br>
                  <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">Contraseña</label>    
                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Contraseña">        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">Confirmar contraseña</label>    <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>

                    <br>
                  {{-- <label for="image_path">Foto</label><br>
                  <input type="file" name="image_path" id="imagen"><br><br><br><br> --}}

                <button type="submit" class="btn btn-primary">Guardar</button><br><br>
                
            </form>
        </div> 
    </div>

    <script>
                        var password = document.getElementById("password")
                , confirm_password = document.getElementById("password-confirm");

                function validatePassword()
                {
                    if(password.value != confirm_password.value) {
                        confirm_password.setCustomValidity("Passwords Don't Match");
                    } else {
                        confirm_password.setCustomValidity('');
                    }
                }

                password.onchange = validatePassword;
                confirm_password.onkeyup = validatePassword;
    </script>

@endsection