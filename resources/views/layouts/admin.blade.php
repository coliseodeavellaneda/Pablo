@extends('layouts.app')

@section('content')
<link href="/css/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

<div id="wrapper">
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
        {{-- <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-landmark"></i>
            </div>
            <div class="sidebar-brand-text mx-3">
                {{ config('app.name', 'Laravel') }}
            </div>
        </a> --}}
        <div style="margin-left: 30px">
            <h1>{{ ucfirst(request()->user()->role) }}</h1>
            <h5>{{ ucfirst(request()->user()->name) }} {{ ucfirst(request()->user()->lastname) }}</h5>
        </div>
        <hr class="sidebar-divider my-0">
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                aria-expanded="true" aria-controls="collapsePages">
                {{-- <i class="fas fa-fw fa-table"></i> --}}
                {{-- <span>Sections</span> --}}
            </a>
            <nav class="navbar bg-dark" data-bs-theme="dark">

        <li class="nav-item ">
            <a class="nav-link {{request()->routeIs('cancha') ? 'active' : ''}}" href="/admin/cancha">
                Reservas
            </a>
        </li>

        {{-- <li class="nav-item ">
            <a class="nav-link {{request()->routeIs('category') ? 'active' : ''}}" href="/admin/category">
                Categorias
            </a>
        </li> --}}
        @if (request()->user()->role == 'admin')

        <li class="nav-item ">
            <a class="nav-link {{request()->routeIs('role') ? 'active' : ''}}" href="/admin/role">
                Roles
            </a>
        </li>

        <li class="nav-item ">
            <a class="nav-link {{request()->routeIs('permission') ? 'active' : ''}}" href="/admin/permission">
                Permisos
            </a>
        </li>

        <li class="nav-item ">
            <a class="nav-link {{request()->routeIs('user') ? 'active' : ''}}" href="/admin/user">
                Usuarios
            </a>
        </li>

        @endif

        {{-- <h1>Resultados de la búsqueda</h1>

        @if ($products->isEmpty())
        <p>No se encontraron productos.</p>
        @else
        <ul>
            @foreach ($products as $product)
            <li>{{ $product->name }}</li>
            @endforeach
        </ul>
        @endif --}}

        <li class="nav-item dropdown">
            <form class="user" id="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf
                <input type="submit" value="Cerrar sesión" class="btn btn-danger btn-user btn-block">
            </form>
        </li>
        </nav>
        </li>
    </ul>
    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                <form class="form-inline">
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                </form>
                {{-- <form
                    class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small" placeholder="buscar"
                            aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form> --}}
                <ul class="navbar-nav ml-auto">
                    {{-- <li class="nav-item dropdown">
                        <form class="user" id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                            <input type="submit" value="Logout" class="btn btn-danger btn-user btn-block">
                        </form>
                    </li> --}}
                    <div class="topbar-divider d-none d-sm-block"></div>
                </ul>
            </nav>
            @yield('admin-content')
        </div>
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Your Website 2023</span>
                </div>
            </div>
        </footer>
    </div>
</div>
<a class="scroll-to-top rounded" href="#page-top">
    {{-- <i class="fas fa-angle-up"></i> --}}
</a>
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="/js/vendor/datatables/dataTables.bootstrap4.min.js"></script>
{{-- <script src="/js/demo/datatables-demo.js"></script> --}}
@endsection