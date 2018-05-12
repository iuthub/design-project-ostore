<?php

namespace App\Http\Controllers;

use App\Minkblanket;
use App\Prayermat;
use Illuminate\Http\Request;

class PrayerMatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $mats=Prayermat::orderBy('title','desc')->paginate(1);
        $obj=new Prayermat();

        return view('prayermat.index',compact('mats','obj'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('admin.mat');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $input=$request->all();
        $title=$input['title'];
        $prayermat=Prayermat::create(['title'=>$title]);

        $file=$request->file('path');
        $name=$file->getClientOriginalName();
        $file->storeAs('public/prayermat',$name);
        $input['path']=$name;
        $prayermat->photos()->create(['path'=>$name]);




        return redirect('admin/minkblanket');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
