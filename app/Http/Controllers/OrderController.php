<?php

namespace App\Http\Controllers;
use App\Basket;
use App\Carpet;
use App\Flannel;
use App\Minkblanket;
use App\Prayermat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    //

    public function order(Request $request){

$product=new $request['class'];
$pr=$product->findOrFail($request['id']);
/*$order['user_id']=Auth::user()->id;
$order['orderable_id']=$request['id'];*/
$pr->orders()->create(['user_id'=>Auth::user()->id]);

return $pr;
    }


    public function orderFromBasket(){
        $user=Auth::user()->id;
        $baskets=Basket::where('user_id',$user)->get();

        $minkblanket=$baskets->where('basketable_type','App\Minkblanket');
        $prayermat=$baskets->where('basketable_type','App\Prayermat');
        $carpet=$baskets->where('basketable_type','App\Carpet');
        $flannel=$baskets->where('basketable_type','App\Flannel');
        $minkblanketId=$minkblanket->pluck('basketable_id');
        $prayermatId=$prayermat->pluck('basketable_id');
        $carpetId=$carpet->pluck('basketable_id');
        $flannelId=$flannel->pluck('basketable_id');

        foreach ($minkblanketId as $id){
            $minkblanket=Minkblanket::findOrFail($id);
            $minkblanket->orders()->create(['user_id'=>$user]);
        }
        foreach ($prayermatId as $id){
            $prayermat=Minkblanket::findOrFail($id);
            $prayermat->orders()->create(['user_id'=>$user]);
        }
        foreach ($carpetId as $id){
            $carpet=Minkblanket::findOrFail($id);
            $carpet->orders()->create(['user_id'=>$user]);
        }
        foreach ($flannelId as $id){
            $flannel=Minkblanket::findOrFail($id);
            $flannel->orders()->create(['user_id'=>$user]);
        }

        foreach ($baskets as $basket){
            $basket->delete();
        }
        return redirect('basket/index');

        }



}
