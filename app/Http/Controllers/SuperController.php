<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;

class SuperController extends Controller
{
    public function rows() {
        $rows = Question::all();
        return view('rows', compact('rows'));

    }
}
