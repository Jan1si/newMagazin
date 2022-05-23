<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class MainController extends Controller
{
    public function index(){
        $products = Products::paginate(16);
        return view('pages.main.index',['products' => $products]);
    }


}
