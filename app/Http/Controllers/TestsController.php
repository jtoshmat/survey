<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;

class TestsController extends Controller
{
    public function tests() {
   $tests = Question::all();
        return view('tests',compact('tests'));
    }
}
