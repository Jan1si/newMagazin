<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class MainController extends Controller
{
    public function index(){
        $product = Products::paginate(16);
        // $pagitation = Products::paginate(15);
        return view('pages.main.index',['product' => $product]);
    }


}
