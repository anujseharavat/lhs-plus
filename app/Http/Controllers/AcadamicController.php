<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AcadamicController extends Controller
{
    public function create()
    {
        return view('room.academic');
    }
}
