<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Products;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $users = User::all()->count();
        $roles = Role::all()->count();
        $categories= Category::all()->count();
        $products = Products::all()->count();
        return view('admin.pages.tables.index',[
            'users'=>$users,
            'roles'=>$roles,
            'categories' => $categories,
            'products'=>$products
        ]);
    }
}
