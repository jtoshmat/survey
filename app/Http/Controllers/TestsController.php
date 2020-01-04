<?php

namespace App\Http\Controllers;

use App\Product;
use App\Question;
use Illuminate\Http\Request;

class TestsController extends Controller
{
    public function tests() {
   $tests = Question::all();
        return view('tests',compact('tests'));
    }
    public function products() {
        $products = Product::all();
        return view('products',compact('products'));

    }
    public function question($id)
    {
        $questions = Question::where('product_id', $id)->paginate(1);
        return view('tests', compact('questions'));
    }
}
