<?php

namespace App\Http\Controllers;

use App\Models\Cancha;
use Illuminate\Http\Request;

class ReservasController extends Controller
{
    public function reserva(Request $request)
    {
        $horasValidas = [18, 19, 20, 21, 22, 23];
        $canchas = $horarios = $fila = [];
        foreach ($horasValidas as $hv) {
            $fila[] = ['valor' => $hv, 'reservada' => false];
        }
        $horarios[2] = $horarios[1] = $horarios[0] = $fila;
        // dd($horarios);
        $this->datos['seccion'] = 'home';
        $this->datos['headerClass'] = '';

        if ($request->fecha) {
            $fechaVista = date('d M, Y', substr($request->fecha, 0, 10));
            $fecha = date('Y-m-d', substr($request->fecha, 0, 10));
            $canchas[] = Cancha::where('fecha', '=', $fecha)->where('cancha', '=', 1)->get();
            $canchas[] = Cancha::where('fecha', '=', $fecha)->where('cancha', '=', 2)->get();
            $canchas[] = Cancha::where('fecha', '=', $fecha)->where('cancha', '=', 3)->get();
        } else {
            return view('reserva', ['datos' => $this->datos]);
        }

        foreach ($horarios as $key => $hora) {

            foreach ($canchas[$key] as $cancha) {
                $horaCancha = intval($cancha->horarios);
                foreach ($horarios[$key] as $idx => $horario) {
                    if ($horaCancha == $horario['valor']) {
                        $horarios[$key][$idx]['reservada'] = true;
                        break;
                    }
                }
            }
        }

        return view('reserva', ['datos' => $this->datos, 'horarios1' => $horarios[0], 'horarios2' => $horarios[1], 'horarios3' => $horarios[2], 'fechaVista' => $fechaVista]);
    }

    
}
