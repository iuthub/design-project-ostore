<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        //
        return view('admin.mink');
    }

    public function showUsers(){
       $users=User::all();


        return view('admin.showUsers',compact('users'));
    }
public function createProduct()
{

    return view('admin/minkblanket');

}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

}
