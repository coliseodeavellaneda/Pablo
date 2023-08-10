@extends('layout')

@section('content')

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
<script>
	function fecha(context)
	{
		var e = document.getElementById('fecha').value;
		console.log(e);
		e = Date.parse(e);
		window.location.href = "/reservar?fecha=" + e;
		window.location.reload();
	}
</script>
@endsection