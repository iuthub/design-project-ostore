<?php

namespace App\Http\Controllers;

use App\Basket;
use App\Carpet;
use App\Flannel;
use App\Minkblanket;
use App\Prayermat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BasketController extends Controller
{
    //


    public function add(Request $request){

        $product=new $request['class'];
        $pr=$product->findOrFail($request['id']);
        /*$order['user_id']=Auth::user()->id;
        $order['orderable_id']=$request['id'];*/
        $pr->basket()->create(['user_id'=>Auth::user()->id]);

    }

    public function index()
    {
        $user = Auth::user()->id;
        $basket = Basket::where('user_id', $user)->get();



        $minkblanket = $basket->where('basketable_type', 'App\Minkblanket');


        foreach ($minkblanket as $m) {

            $minkblankets[] = MinkBlanket::where('id', $m['basketable_id'])->get();
       }



        $prayermat = $basket->where('basketable_type', 'App\Prayermat');

        foreach ($prayermat as $m) {

            $prayermats[] = Prayermat::where('id', $m['basketable_id'])->get();
        }



        $carpet = $basket->where('basketable_type', 'App\Carpet');

        foreach ($carpet as $m) {

            $carpets[] = Carpet::where('id', $m['basketable_id'])->get();
        }


        $flannel = $basket->where('basketable_type', 'App\Flannel');

        foreach ($flannel as $m) {

            $flannels[] = Flannel::where('id', $m['basketable_id'])->get();
        }


                return view('basket.index',compact('minkblankets','flannels','carpets','prayermats'));
            }




            public function delete(Request $request){

$basket=Basket::findOrFail($request['id']);
    $basket->delete();
    return redirect('basket/index');

            }



}
