@extends('layouts.admin')

@section('content')
    
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

                {{-- <td>
                    <a href="/admin/permission/{{$model->id}}/edit"
                        class="btn btn-success btn-icon-split ml-3 mr-3">

                        <span class="text">Editar</span>
                    </a>
                </td> --}}
                <td>
                    {{-- <form action="/admin/permission/{{$model->id}}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger btn-icon-split">

                            <span class="text">Eliminar</span>
                        </button>
                    </form> --}}
                </td>
            </div>
            {{-- </td> --}}
        </tr>
        @endforeach
    </tbody>
</table>

@endsection