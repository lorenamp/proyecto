<?php

namespace App\Http\Controllers;

use App\Models\Inscription;
use Illuminate\Http\Request;
use App\Role;
use App\Permission;
use App\User;
use Illuminate\Support\Facades\Auth;

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
        if(Auth::user()->hasRole('admin'))
        {
            $inscriptions = Inscription::all();
        }
        else
        {
            $inscriptions = Inscription::where('user_id', Auth::user()->id)->get();
        }
        return view('home', compact('users','roles', 'permissions', 'inscriptions'));
    }

    public function destroy($id)
    {
        Inscription::find($id)->delete();
        return redirect('/home');
    }

    public function create(Request $request)
    {

        $user = User::find($request->user);
        $user->roles()->sync($request->roles);
        return redirect('/home');
    }

}
