<?php

namespace App\Http\Controllers;

use App\Models\Cancha;
use Illuminate\Http\Request;

class CanchaController extends Controller
{
    protected $resource = 'admin';
    protected $redirectRoute = '/admin';
    protected $indexTitle = 'Tabla de Reservas';
    protected $createTitle = 'Nuevo permiso';
    protected $editTitle = 'Editar permiso';

    public function index()
    {
        $cancha = Cancha::all();

        $cancha->map(function ($cancha) {
            $cancha->cancha = ucfirst($cancha->cancha);
            return $cancha;
        });

        $columnas = ['cancha', 'fecha', 'horarios', '18:00', '19:00', '20:00', '21:00', '22:00', '23:00'];

        return view('cancha', [
            'title' => $this->indexTitle,
            'resource' => $this->resource,
            'columns' => $columnas,
            'models' => $cancha,
            'roles' => ['name']
        ]);
    }


    public function create()
    {
    }


    public function store(Request $request)
    {
    }


    public function show()
    {
    }


    public function edit()
    {
    }


    public function update(Request $request)
    {
    }


    public function destroy()
    {
    }
}
