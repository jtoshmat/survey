<?php

namespace App\Http\Controllers;

use App\Company;
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
        $tests = Question::where('product_id', $id)->paginate(1);
        return view('tests', compact('tests'));
    }

    public function option()
    {
      $options = Question::all();
      return view('company',compact('options'));
    }

    public function next(Request $request){

      $id = $request['id'];

      $options = Question::where('id',$id)->get();
      return view('company',compact('options'));


    }

    public function getstarted ()
    {

        return view('getstarted');
    }
}

