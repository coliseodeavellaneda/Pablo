@extends('layout')

@section('content')


<!-- estilo x vista -->


<section class="section-header section-header-tiny">

    <div class="background" style="
          background-image: url({{env('APP_URL')}}/img/home/el-club.jpg);
        "></div>
    <div class="hover"></div>

    <!-- <div class="container">
		<div class="position-relative container-small">
			<h3 class="title">Login</h3>
		</div>
	</div> -->
</section>

<section data-section="contacto" class="forms">
    <div class="container text-center">
        <h1 class="main-title">Ingresar a tu cuenta</h1>
        <h3>Ingresá con tu email y tu contraseña para continuar.</h3>
    </div>

    <div class="container">
        <div class="box mt-5">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-floating mb-2">
                            <input name="email" type="email" class="form-control" placeholder="Email" required="" />
                            <label for="">Email *</label>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-floating mb-2">
                            <input name="password" type="password" class="form-control" placeholder="Contraseña"
                                required="" />
                            <label for="">Contraseña *</label>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="form-group mt-4">
                    <button type="submit" class="btn btn-custom btn-gradient btn-rounded btn-lg">
                        Ingresar
                    </button>
                </div>

                <hr />

                <div class="small">
                    <a href="{{ route('password.request') }}">¿Olvidaste la contraseña?</a>
                    | <span>¿Aún no tenés cuenta?</span>
                    <a href="{{env('APP_URL')}}/#membership">Click aquí para solicitar el alta</a>
                </div>
            </form>
        </div>
    </div>
</section>

@endsection