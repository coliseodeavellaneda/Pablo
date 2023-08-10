@extends('layouts.admin')

@section('admin-content')
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">{{ $title }}</h1>
    <p class="mb-4"><a target="_blank"></p>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col">
                    <a href="/admin/role/create" class="btn btn-info btn-icon-split">
                        {{-- <span class="icon text-white-50">
                            <i class="fas fa-check"></i>
                        </span> --}}
                        <span class="text">NUEVO</span>
                    </a>
                </div>
                <div class="col">
                    <form action="/admin/role" method="GET" class="form-inline float-right">
                        {{-- @csrf --}}
                        <input class="form-control mx-1" type="text" name="search" placeholder="Buscar roles">

                        {{-- <select class="form-control mx-1 bootstrap-select" style="width: auto;" name="role" value="">
                            <option value="">Rol</option>
                            @foreach ($roles as $role)

                                <option value="{{ $role }}">{{ ucfirst($role) }}</option>

                            @endforeach
                        </select> --}}
                        <button type="submit" class="btn btn-info btn-icon-split form-control mx-1">Buscar</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            @foreach ($columns as $column)
                            <th>{{ ucfirst($column) }}</th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($models as $model)
                        <tr>
                            @foreach ($columns as $column)
                            <td>{{ $model->$column }}</td>
                            @endforeach

                            <div class="row">
                                <td>
                                    <a href="/admin/role/{{$model->id}}"
                                        class="btn btn-primary btn-icon-split ml-3 mr-3">
                                        <span class="text">Ver</span>
                                    </a>
                                </td>

                                <td>
                                    <a href="/admin/role/{{$model->id}}/edit"
                                        class="btn btn-success btn-icon-split ml-3 mr-3">
                                        <span class="text">Editar</span>
                                    </a>
                                </td>
                                <td>
                                    <form action="/admin/role/{{$model->id}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger btn-icon-split">

                                            <span class="text">Eliminar</span>
                                        </button>
                                    </form>
                                </td>
                            </div>
                            {{-- </td> --}}
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection