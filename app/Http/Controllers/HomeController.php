<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use App\Permission;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layout.index');
    }

    public function home()
    {
        $users = User::all();
        $roles = Role::all();
        $permissions = Permission::all();
        return view('home', compact('users','roles', 'permissions'));
    }

}
