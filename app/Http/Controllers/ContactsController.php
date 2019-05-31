<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Redirect;

class ContactsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('layout.cont');
    }

    public function create(Request $request)
    {
        $add = new Contact;
        $add->user_id = $request->user()->id;
        $add->nombre = $request->input('nombre');
        $add->correo = $request->input('correo');
        $add->telefono = $request->input('telefono');
        $add->localidad = $request->input('localidad');
        $add->comentario = $request->input('comentario');

        $add->save();
        return redirect('/');
    }
}
