<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta charset="utf-8" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <meta name="description" content={{$datos['content1']}}>
    <meta name="keywords" content={{$datos['content2']}}>

    <title>{{$datos['title']}}</title>
    <link rel="stylesheet" href="{{env('APP_URL')}}/css/datepicker.css">
    <link rel="stylesheet" href="{{env('APP_URL')}}/css/lib/bootstrap.min.css">
    <link rel="stylesheet" href="{{env('APP_URL')}}/css/lib/jquery-ui.min.css">
    {{--
    <link rel="stylesheet" href="{{env('APP_URL')}}/css/lib/fontawesome-all.min.css"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{env('APP_URL')}}/css/lib/animate.css">
    <link rel="stylesheet" href="{{env('APP_URL')}}/css/lib/toastr.min.css">
    <link rel="stylesheet" href="{{env('APP_URL')}}/css/lib/sweetalert2.min.css">
    <link rel="stylesheet" href="{{env('APP_URL')}}/css/lib/slider.css?id=1912">

    <!-- estilo x vista -->

    <link rel="stylesheet" href="{{env('APP_URL')}}/css/site.css?id=3853">
    <link rel="shortcut icon" href="{{env('APP_URL')}}/assets/favicon.svg" type="image/png">

    <script type="text/javascript" src="{{env('APP_URL')}}/js/lib/pace.min.js"></script>

    <meta property="fb:app_id" content="225559017576907" />
    <meta property="og:url" content="{{env('APP_URL')}}/" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{env('APP_NAME')}}" />
    <meta property="og:description" content={{$datos['content3']}} />

    <meta property="og:image" content="{{env('APP_URL')}}/assets/logo.png" />
    <meta property="og:image:width" content="295" />
    <meta property="og:image:height" content="36" />

    <meta property="og:locale" content="es_ES" />
    <meta property="og:site_name" content={{$datos['siteName']}} />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content={{$datos['twitterSite']}} />
    <meta name="twitter:title" content={{$datos['twitterTitle']}} />
    <meta name="twitter:description" content={{$datos['twitterDescription']}} />
    <meta name="twitter:image:src" content="{{env('APP_URL')}}/assets/logo.png" />

    <script>
        var ROOT = '{{env('APP_URL')}}/';
		var PAGENAME = 'defines';
		var MAXFILES = '20';
		var SITE = '{{env('APP_URL')}}/site/';

		var $_section = '{{$datos['seccion']}}';
		var $_subsection = '';
		var $_vars = '';
		var TOKEN = '5d4a452d41e59bf8b878542d96937c594d2df56858023ee7bb6ae58a7cf4037c';
    </script>

</head>

<body class="pace-done">
    <div class="pace pace-inactive">
        <div class="pace-progress" style="transform: translate3d(100%, 0px, 0px)" data-progress-text="100%"
            data-progress="99">
            <div class="pace-progress-inner"></div>
        </div>
        <div class="pace-activity"></div>
    </div>

    <header class="header {{$datos['headerClass']}}">
        <div class="container">
            <div class="header-wrapper">
                <a href="{{env('APP_URL')}}/" class="logo-wrapper">
                    <img src="{{env('APP_URL')}}/assets/logo-white.svg" alt="" class="logo">
                    <img src="{{env('APP_URL')}}/assets/favicon-white.svg" alt="" class="logo-alt">
                </a>
                <nav>
                    <ul class="menu">
                        
                        {{-- <li>
                            <a data-toggle="menu-link" href="">{{$datos['title']}}</a>
                        </li> --}}
                        
                        <li class="nav-item">
                            <a class="text-primary" data-toggle="menu-link" href="#nosotros">{{$datos['nosotros']}}</a>
                        </li>

                        {{-- <li>
                            <a data-toggle="menu-link" href="#membership">{{$datos['membership']}}</a>
                        </li> --}}

                        <li class="nav-item">
                            <a class="text-primary" data-toggle="menu-link" href="#contacto">{{$datos['contacto']}}</a>
                        <li class="nav-item">

                        <li class="nav-item">
                            <a class="text-primary" href="/reservar">{{$datos['reservar cancha']}}</a>
                        </li>

                        <li class="profile">
                            <a href="{{env('APP_URL')}}" class="icon">
                                <img src="{{env('APP_URL')}}/assets/soccer.png" alt="">
                            </a>
                            {{-- <a href="{{env('APP_URL')}}/login">{{$datos['Ingresar']}}</a> --}}
                        </li>

                        <li class="close"><i class="fal fa-times"></i></li>
                    </ul>
                    <div class="mobile-icon">
                        <i class="fal fa-bars"></i>
                    </div>
                </nav>
            </div>
        </div>
    </header>

<style>
	table.table tbody tr td,
	table.table thead tr th,
	table.table thead {
		border-left: 1px solid black;
		border-right: 1px solid black;
	}
</style>

<section class="gral-section">
	<div class="row">
		<div class="col col-6 ml-4">
			<label for="appt">Elige la fecha:</label>

			<div class="md-form md-outline input-with-post-icon datepicker" id="date-picker-example"
				aria-haspopup="true" style="width: 30%" aria-expanded="false" aria-readonly="false"
				aria-owns="date-picker-example_root">
				<input placeholder="Select date" type="text" id="fecha" class="form-control picker__input"
				@isset($fechaVista)
				value="{{$fechaVista}}"
				@endisset
					>
				{{-- <label for="fecha" class="active"></label> --}}
				<i class="fas fa-calendar input-prefix active" tabindex="0"></i>
			</div>

			{{-- <label for="appt">Elige un horario disponible:</label><br><br>

			<input type="time" id="appt" name="appt" min="09:00" max="18:00" required> --}}

			{{-- <small>Atencion de: 18 a 23</small> --}}
		</div>
		@isset($horarios1)
		

		<div class="col">
			@foreach ($horarios1 as $hora)

			<div class="form-check">
				<input class="form-check-input" type="radio"
					name="@if ($hora['reservada']) @else flexRadioDefault @endif" id="Radio1Hora{{$hora['valor']}}" 
					@if($hora['reservada']) disabled @endif>
				<label class="form-check-label" for="Radio1Hora{{$hora['valor']}}">
					{{$hora['valor']}}:00 hs.
				</label>
			</div>
			@endforeach
		</div>
		<div class="col">
			@foreach ($horarios2 as $hora)

			<div class="form-check">
				<input class="form-check-input" type="radio"
					name="@if ($hora['reservada']) @else flexRadioDefault @endif" id="Radio2Hora{{$hora['valor']}}" 
					@if($hora['reservada']) disabled @endif>
				<label class="form-check-label" for="Radio2Hora{{$hora['valor']}}">
					{{$hora['valor']}}:00 hs.
				</label>
			</div>
			@endforeach
		</div>
		<div class="col">
			@foreach ($horarios3 as $hora)

			<div class="form-check">
				<input class="form-check-input" type="radio"
					name="@if ($hora['reservada']) @else flexRadioDefault @endif" id="Radio3Hora{{$hora['valor']}}" 
					@if($hora['reservada']) disabled @endif>
				<label class="form-check-label" for="Radio3Hora{{$hora['valor']}}">
					{{$hora['valor']}}:00 hs.
				</label>
			</div>
			@endforeach
		</div>
		@endisset
	</div>
</section>
	<script type="text/javascript" src="{{env('APP_URL')}}/js/datepicker.js">
	</script>
	<script type="text/javascript">
		console.log(Date.now());
		$('#date-picker-example').datepicker({
			min: Date.now(),
			value: Date.now(),
			onClose: function(context) {
				fecha(context)
			}
		});
	</script>
	<script>
		const fecha = (context) => {
			const e = document.getElementById('fecha').value;
			console.log(e);
			const parsedDate = Date.parse(e);
			window.location.href = `/reservar?fecha=${parsedDate}`;
			// window.location.reload();
		}
	</script>
<footer class="footer" style="height: 400px">
	<div class="container text-center">
		<div class="row align-items-center justify-content-center">
			<div class="col-lg-6">
				<div class="logo">
					<h3>SoccerClub</h3>
					<img src="{{env('APP_URL')}}/assets/soccer.png" alt="">
				</div>
			</div>

			<div class="col-lg-6 text-end">
				<a href="{{$datos['instagramURL']}}" target="_blank" class="icon-wrapper">
					<span class="icon">
						<i class="fab fa-instagram"></i>
					</span>
					<span class="caption">{{$datos['titulo']}}</span>
				</a>

				<a href="https://wa.me/{{$datos['numTel']}}" target="_blank" class="icon-wrapper">
					<span class="icon"><i class="fa fa-phone"></i></span>
					<span class="caption">{{$datos['numTelWeb']}}</span>
				</a>
				<a href="mailto:{{env('MAIL_FROM_ADDRESS')}}" target="_blank" class="icon-wrapper">
					<span class="icon"><i class="fa fa-envelope"></i></span>
					<span class="caption">{{$datos['emailWeb']}}</span>
				</a>
			</div>
		</div>

		<div class="copyright">&copy; {{$datos['copyright']}}</div>
	</div>
</footer>

<!-- LOADING -->
<div id="loading">
	<div class="loading-wrapper">
		<div class="loading-content">
			<i class="fa fa-cog fa-spin fa-lg"></i>
			<div class="loading-text"></div>
		</div>
	</div>
</div>

<div class="float-whatsapp">
	<a href="https://wa.me/{{$datos['numTel']}}" target="_blank" class="icon">
		<i class="fab fa-whatsapp"></i>
	</a>
</div>
<script type="text/javascript" src="{{env('APP_URL')}}/js/lib/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="{{env('APP_URL')}}/js/lib/jquery-ui.min.js"></script>
<script type="text/javascript" src="{{env('APP_URL')}}/js/lib/jquery.scrollUp.min.js"></script>
<script type="text/javascript" src="{{env('APP_URL')}}/js/lib/axios.min.js"></script>
<script type="text/javascript" src="{{env('APP_URL')}}/js/lib/popper.min.js"></script>
<script type="text/javascript" src="{{env('APP_URL')}}/js/lib/bootstrap.min.js"></script>
<script type="text/javascript" src="{{env('APP_URL')}}/js/lib/bluebird.min.js"></script>
<script type="text/javascript" src="{{env('APP_URL')}}/js/lib/toastr.min.js"></script>
<script type="text/javascript" src="{{env('APP_URL')}}/js/lib/sweetalert2.min.js"></script>
<script type="text/javascript" src="{{env('APP_URL')}}/js/lib/wow.min.js"></script>
<script type="text/javascript" src="{{env('APP_URL')}}/js/functions.js?id=7559"></script>

<!--- Plugins --->
<script type="text/javascript" src="{{env('APP_URL')}}/js/site/classes/user.js?id=4678"></script>
<script type="text/javascript" src="{{env('APP_URL')}}/js/lib/slider.js?id=7111"></script>
<script type="text/javascript" src="{{env('APP_URL')}}/js/lib/parallax.js?id=9837"></script>
<script type="text/javascript" src="{{env('APP_URL')}}/js/lib/preload.images.js?id=9616"></script>

<!-- Section Scripts -->
<script type="text/javascript" src="{{env('APP_URL')}}/js/site/main.js?id=6212"></script>

<script type="text/javascript" src="{{env('APP_URL')}}/js/site/home.js?id=3942"></script>
<a id="scrollUp" href="#top" style="position: fixed; z-index: 2147483647; display: none"><i
		class="fa fa-angle-up"></i></a>

</body>

</html>