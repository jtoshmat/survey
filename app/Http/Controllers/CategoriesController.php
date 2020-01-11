<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
   public function catalog(){
       $categories = Category::all()->take(1);
       return view('categories', compact('categories'));
   }
}
