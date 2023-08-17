@extends('layout')

@section('content')

<!-- SLIDER -->
<section class="slider">


	<div class="slide">
		<div class="thumb-cover overprint-absolute image parallax"
			style="background-image:url({{env('APP_URL')}}/img/slides/copadelmundo.jpg); background-size: contain; background-repeat: repeat-x;">
		</div>
		<div class="overprint-absolute bg"></div>

	</div>


</section>


<section class="main-banner">
	<div class="container">

		<div class="row">

			<div class="col-lg-3 mb-1">
				<div class="logo-wrapper wow fadeInLeft">
					<img src="{{env('APP_URL')}}/assets/soccer.png" alt="" class="logo">
				</div>
			</div>

			<div class="col-lg-8">
				<h1 class="main-title text-uppercase wow fadeInDown">{{$datos['maintitle1']}}</h1>
				<h2 class="caption text-uppercase mt-4 wow fadeInUp">{{$datos['text1']}}</h2>
			</div>

		</div>
	</div>
</section>


<section data-section="nosotros" class="home-blocks">

	<div class="container-fluid">

		<div class="row">

			<div class="col-lg-6 position-relative wow fadeIn">
				{{-- <div class="image parallax" style="background-image:url({{env('APP_URL')}}/img/home/soccerclub2.jpeg)">
				</div> --}}
			</div>

			<div class="col-lg-6">

				{{-- <div class="content wow fadeInDown">
					<h1 class="main-title text-uppercase">{{$datos['nosotros']}}</h1>

					<div class="caption">{{$datos['text2']}}</div>

					<div class="caption">{{$datos['text3']}}</div>

					<div class="caption welcome">{{$datos['welcome']}}</div>
				</div> --}}

			</div>
		</div>

	</div>

</section>


<section class="home-features">

	<div class="container-fluid">

		<div class="row">

			<div class="col-lg-3 p-0">
				<div class="content bg-terra-light wow fadeIn">
					<div class="wow fadeInDown">
						<div class="main-title text-uppercase">{{$datos['maintitle2']}}</div>
						<div class="caption">{{$datos['text4']}}</div>
					</div>
				</div>
				{{-- <div class="image-wrapper wow fadeIn">
					<div class="image" style="background-image:url({{env('APP_URL')}}/img/home/laactitudestodo.jpeg)">
					</div>
					<img src="{{env('APP_URL')}}/assets/blank-square.gif" alt="" class="w-100">
				</div> --}}
			</div>

			<div class="col-lg-3 p-0">
				<div class="content bg-terra-main wow fadeIn">
					<div class="wow fadeInDown">
						<div class="main-title text-uppercase">{{$datos['maintitle3']}}</div>
						<div class="caption">{{$datos['text5']}}</div>
					</div>
				</div>
				{{-- <div class="image-wrapper wow fadeIn">
					<div class="image" style="background-image:url({{env('APP_URL')}}/img/home/maloycorrecto.jpeg)">
					</div>
					<img src="{{env('APP_URL')}}/assets/blank-square.gif" alt="" class="w-100">
				</div> --}}
			</div>

			<div class="col-lg-3 p-0">
				<div class="content bg-terra-white wow fadeIn">
					<div class="wow fadeInDown">
						<div class="main-title text-uppercase">{{$datos['maintitle4']}}</div>
						<div class="caption">{{$datos['text6']}}</div>
					</div>
				</div>
				{{-- <div class="image-wrapper wow fadeIn">
					<div class="image" style="background-image:url({{env('APP_URL')}}/img/home/masdolor.jpeg)"></div>
					<img src="{{env('APP_URL')}}/assets/blank-square.gif" alt="" class="w-100">
				</div> --}}
			</div>

			<div class="col-lg-3 p-0">
				<div class="content bg-terra-bright wow fadeIn">
					<div class="wow fadeInDown">
						<div class="main-title text-uppercase">{{$datos['maintitle5']}}</div>
						<div class="caption">{{$datos['text7']}}</div>
					</div>
				</div>
				{{-- <div class="image-wrapper wow fadeIn">
					<div class="image" style="background-image:url({{env('APP_URL')}}/img/home/socrates.jpeg)"></div>
					<img src="{{env('APP_URL')}}/assets/blank-square.gif" alt="" class="w-100">
				</div> --}}
			</div>

		</div>

	</div>
</section>


{{-- <section data-section="membership" class="membership">

	<div class="container-fluid">

		<div class="row">

			<div class="col-lg-6 p-0">

				<div class="content">
					<div class="main-title text-uppercase wow fadeInDown">{{$datos['membership']}}</div>
					<div class="subtitle wow fadeInDown">{{$datos['subtitle']}}</div>

					<div class="caption wow fadeInDown">{{$datos['text8']}}</div>


					<div class="steps">
						<div class="step step-1 wow fadeInUp">1. {{$datos['contactaClub']}}</div>
						<div class="step step-2 wow fadeInUp">2. {{$datos['registro']}}</div>
						<div class="step step-3 wow fadeInUp">3. {{$datos['membresiaClub']}}</div>
					</div>

					<h1 class="title text-uppercase wow fadeInDown">{{$datos['titleText']}}</h1>
					<div class="caption wow fadeInDown">{{$datos['text9']}}</div>

				</div>


			</div>

			<div class="col-lg-6 image-wrapper p-0">

				<div class="image parallax wow fadeIn"
					style="background-image:url({{env('APP_URL')}}/img/home/el-club.jpg)"></div>

			</div>

		</div>

	</div>


</section> --}}


<section data-section="contacto" class="forms">

	<div class="container text-center">
		<h1 class="main-title">{{$datos['contactanos']}}</h1>
		<h3>{{$datos['consulta']}}</h3>
	</div>

	<div class="container">

		<div class="box mt-5">

			<form action="/" method="POST" data-form="membership">

				@csrf
				<div class="row">
					<div class="col-lg-6">
						<div class="form-floating mb-2">
							<input name="name" type="text" class="form-control" placeholder="Nombre Completo" required>
							<label for="">{{$datos['nombre']}}</label>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="form-floating mb-2">
							<input name="email" type="email" class="form-control" placeholder="Email" required>
							<label for="">{{$datos['mail']}}</label>
						</div>
					</div>
				</div>

				<div class="form-group">
					<div class="form-floating mb-2">
						<input name="subject" type="text" class="form-control" placeholder="Asunto" required>
						<label for="">{{$datos['asunto']}}</label>
					</div>
				</div>

				<div class="form-floating mb-2">
					<textarea name="content" style="height:100px" class="form-control" placeholder="Mensaje"
						required></textarea>
					<label for="">{{$datos['mensaje']}}</label>
				</div>


				<div class="form-group mt-4">
					<button class="btn btn-custom btn-gradient btn-rounded btn-lg">{{$datos['enviar']}}</button>
				</div>
			</form>

		</div>
	</div>
</section>


<section class="map" id="map">
	<iframe
		src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3297.0093156931857!2d-59.101875425038536!3d-34.27381464014902!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bb77b9123f9073%3A0xc4217b58e48de9a2!2sCaba%C3%B1a%20Los%20Alamos%20-%20Capilla%20del%20Se%C3%B1or!5e0!3m2!1ses!2sar!4v1688502311440!5m2!1ses!2sar"
		width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
		referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>

@endsection