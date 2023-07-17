<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    protected $resource = 'admin';
    protected $redirectRoute = '/admin';
    protected $indexTitle = 'Tabla de usuarios';
    protected $createTitle = 'Nuevo usuario';
    protected $editTitle = 'Editar usuario';


    public function index(Request $request)
    {
        if ($request->search) {
            $users = User::where('name', 'LIKE', '%' . $request->search . '%')->get();
        } elseif ($request->role) {
            $users = User::where('role', '=', $request->role)->get();
        } else {
            $users = User::all();
        }

        $users->map(function ($user) {
            $user->role = ucfirst($user->role);
            return $user;
        });
        $columnas = ['name', 'lastname', 'email', 'role'];
        return view('user', [
            'title' => $this->indexTitle,
            'resource' => $this->resource,
            'columns' => $columnas,
            'models' => $users,
            'roles' => ['admin', 'user']
        ]);
    }

    public function create()
    {
        return view('createEditUser', ['edit' => 0, 'model' => new User()]);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        User::create($data);
        return redirect('/admin/user');
    }

    public function show(string $id)
    {
    }

    public function edit(string $id)
    {
        $model = User::find($id);
        $model->password = null;
        return view('createEditUser', ['edit' => 1, 'model' => $model]);
    }

    public function update(Request $request, string $id)
    {
        $data = $request->all();
        if ($data['password'] == '') {
            unset($data['password']);
        } else {
            $data['password'] = Hash::make($data['password']);
        }
        $user = User::find($id);
        $user->update($data);
        return redirect('/admin/user');
    }

    public function destroy(string $id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/admin/user');
    }
}
