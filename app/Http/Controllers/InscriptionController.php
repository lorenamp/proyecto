<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inscription;
use App\Models\Typeinscription;
use App\Models\Typeplan;
use Illuminate\Support\Facades\Redirect;

class InscriptionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $typeinscritions = Typeinscription::all();
        $typeplans = Typeplan::all();
        return view('layout.insc', compact('typeinscritions', 'typeplans'));
    }

    public function create(Request $request)
    {
        $add = new Inscription;
        $add->user_id = $request->user()->id;
        $add->nombre = $request->input('nombre');
        $add->domicilio = $request->input('domicilio');
        $add->t_inscripcion = $request->input('t_inscripcion');
        $add->t_plan = $request->input('t_plan');

        $add->save();
        return redirect('/');
    }
}
