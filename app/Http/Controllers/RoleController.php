<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\RolesPermission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RoleController extends Controller
{
    protected $resource = 'admin';
    protected $redirectRoute = '/admin';
    protected $indexTitle = 'Tabla de roles';
    protected $createTitle = 'Nuevo rol';
    protected $editTitle = 'Editar rol';


    public function index(Request $request)
    {
        //RolesPermission::create(['role_id' => 1, 'permission_id' => 1]);

        if ($request->search) {
            $roles = Role::where('name', 'LIKE', '%' . $request->search . '%')->get();
        } elseif ($request->name) {
            $roles = Role::where('name', '=', $request->name)->get();
        } else {
            $roles = Role::all();
        }

        $roles->map(function ($rol) {
            $rol->name = ucfirst($rol->name);
            return $rol;
        });
        $columnas = ['id', 'name'];
        return view('role', [
            'title' => $this->indexTitle,
            'resource' => $this->resource,
            'columns' => $columnas,
            'models' => $roles,
            'roles' => ['name']
        ]);
    }


    public function create()
    {
        return view('createEditRole', ['edit' => 0, 'model' => new Role()]);
    }


    public function store(Request $request)
    {
        $data = $request->all();
        Role::create($data);
        return redirect('/admin/role');
    }


    public function show(string $id)
    {
        $pro = Role::find($id);
        return view('show', ['pro' => $pro]);
    }



    public function edit(string $id)
    {
        $model = Role::find($id);
        //dd($model->permissions);
        return view('createEditRole', ['edit' => 1, 'model' => $model]);
    }


    public function update(Request $request, string $id)
    {
        $data = $request->all();
        $rol = Role::find($id);
        $rol->update($data);
        return redirect('/admin/role');
    }


    public function destroy(string $id)
    {
        $rol = Role::find($id);
        $rol->delete();
        return redirect('/admin/role');
    }
}

