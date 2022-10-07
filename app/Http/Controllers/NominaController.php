<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;

class NominaController extends Controller
{
    public $isr= 500;
    public function index()
    {
        /* $publicaciones = Post::with('user');
        dd($publicaciones); */
        $nominas = Empleado::all()->where('isActive',1);
        return view('nomina.nomina',compact('nominas'));
    }
}
