<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecrutamentoController extends Controller
{
    public function index() {
        return view('recrutamento');
    }
}
