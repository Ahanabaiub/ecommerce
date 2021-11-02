<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\DeliveryMan;
use App\Models\Alluser;


class homeController extends Controller
{
    //

    public function home(){

        return view('pages.home');

    }

    public function create(Request $req){

        $var = new Customer();

        $var->name = $req->name;

        $var->phone = $req->phone;

        $var->save();

        echo "hello";

        //return view('pages.login');

    }


    public function profile(){
        //$u = Alluser::where('id',session()->get('user'))->first();
        $c = DeliveryMan::where('userId',session()->get('user'))->first();
       // echo $c;
        return view('pages.dMan.profile')->with('dm',$c);

    }

    public function profilesub(Request $req){

        $c = DeliveryMan::where('id',$req->id)->first();
        $c->name=$req->name;
        $c->address=$req->address;
        $c->phone=$req->phone;
      
        
        $c->save();

     

        $user = Alluser::where('id',$c->userId)->first();

        $user->password=$req->password;
        $user->email=$req->email;

        $user->save();


        return redirect()->route('deliveryMan.index');

    }
}
