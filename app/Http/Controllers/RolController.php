<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RolController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('layout.rolespermisos');
    }

    public function create(Request $request)
    {
        return redirect('/');
    }
}
