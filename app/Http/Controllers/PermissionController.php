<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PermissionController extends Controller
{
    protected $resource = 'admin';
    protected $redirectRoute = '/admin';
    protected $indexTitle = 'Tabla de permisos';
    protected $createTitle = 'Nuevo permiso';
    protected $editTitle = 'Editar permiso';


    public function index(Request $request)
    {
        if ($request->search) {
            $permisos = Permission::where('type', 'LIKE', '%' . $request->search . '%')->get();
        } elseif ($request->name) {
            $permisos = Permission::where('type', '=', $request->type)->get();
        } else {
            $permisos = Permission::all();
        }

        $permisos->map(function ($permiso) {
            $permiso->name = ucfirst($permiso->name);
            return $permiso;
        });
        $columnas = ['id', 'route', 'type'];
        return view('permission', [
            'title' => $this->indexTitle,
            'resource' => $this->resource,
            'columns' => $columnas,
            'models' => $permisos,
            'roles' => ['name']
        ]);
    }


    public function create()
    {
        return view('createEditPermission', ['edit' => 0, 'model' => new Permission()]);
    }


    public function store(Request $request)
    {
        $data = $request->all();
        Permission::create($data);
        return redirect('/admin/permission');
    }


    public function show(string $id)
    {
    }


    public function edit(string $id)
    {
        $model = Permission::find($id);
        return view('createEditPermission', ['edit' => 1, 'model' => $model]);
    }


    public function update(Request $request, string $id)
    {
        $data = $request->all();
        $permisos = Permission::find($id);
        $permisos->update($data);
        return redirect('/admin/permission');
    }


    public function destroy(string $id)
    {
        $permiso = Permission::find($id);
        $permiso->delete();
        return redirect('/admin/permission');
    }
}
