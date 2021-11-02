<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\DeliveryMan;

class deliveryManController extends Controller
{
    //

    public function index(){
        $d = DeliveryMan::where('userId',session()->get('user'))->first();
        $o = Order::where('deliveryManId',$d->id)->get();
     
       
        return view('pages.dMan.index')->with('orders',$o);

    }
}
