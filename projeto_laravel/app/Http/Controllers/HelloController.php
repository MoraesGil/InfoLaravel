<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contato;

class HelloController extends Controller
{
    public function index(){

      return Contato::All();
    }
}
