<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function edit(Request $request){

        $request->flash();
        return view('user.editaccount');

    }

    public function update(Request $request){


        $user=Auth::user();
        $input=$request->all();
        $user->update($input);
        return redirect('index');
    }

    public function logout(){

        return redirect('login')->with(Auth::logout());
    }

    public function makeorder(Request $request){

$user=Auth::user();
$product=$request->title;



    }

}
