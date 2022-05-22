<?php

namespace App\Http\Controllers;
use App\Models\Emails;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function index(Request $request){
        $email = new Emails();
        $email -> email = $request->input('email');
        $email->save();
        return redirect()->back();
    }
}
