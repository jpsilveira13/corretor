<?php

namespace lucianocorretor\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function principal(){
        return view('admin.store');
    }

    public function interno(){
        return view('admin.interna_principal');
    }
}
