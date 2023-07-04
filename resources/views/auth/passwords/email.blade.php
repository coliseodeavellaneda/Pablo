@extends('layout')

@section('content')

<section class="section-header section-header-tiny">

    <div class="background" style="background-image:url(http://superflyccarg.com.ar/img/home/el-club.jpg)"></div>
    <div class="hover"></div>

</section>


<section data-section="contacto" class="forms">

    <div class="container text-center">
        <h1 class="main-title">Recuperar Acceso</h1>
        <h3>Ingresa el email y te enviaremos instrucciones para recuperar el acceso a tu cuenta.</h3>
    </div>

    <div class="container">

        <div class="row">
            <div class="offset-lg-3 col-lg-6">

                <div class="box mt-5">

                    <form data-form="recover">

                        <div class="form-floating mb-2">
                            <input name="email" type="email" class="form-control" placeholder="Email" required="">
                            <label for="">Email *</label>
                        </div>

                        <div class="form-group mt-4">
                            <button class="btn btn-custom btn-gradient btn-rounded btn-lg">Enviar</button>
                        </div>

                        <hr>

                        <div class="mt-3">
                            <a href="http://superflyccarg.com.ar/login" class="small"><i
                                    class="fas fa-fw fa-angle-double-left"></i> volver al login</a>
                        </div>


                    </form>

                </div>
            </div>
        </div>

    </div>


</section>

@endsection