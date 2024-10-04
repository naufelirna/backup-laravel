<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
   public function index(){
       return "Halo ini method index, dalam controller ProductController";
   }
}
