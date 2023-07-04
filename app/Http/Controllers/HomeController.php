<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
        
    public function index()
    {
        $this->datos ['seccion'] = 'home';
        $this->datos ['headerClass'] = '';
        return view('home', ['datos' => $this->datos]);
    }
    
}
