<?php

namespace Dzhwarkawan\Tzar\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TzarController extends Controller
{
    public function index()
    {
        return view('tzar::tzar');
    }

   
}
