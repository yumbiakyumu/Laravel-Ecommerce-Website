<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\Product;


class Homecontroller extends Controller
{
    public function index(){
        $product=Product::paginate(10);
        return view('home.userpage',compact('product'));
    }
    public function redirect()
    {
        $usertype=Auth::user()->usertype;

        if($usertype=='1')
        {
            return view('admin.home');
        }

        else 
        {
            $product=Product::paginate(10);
            return view('home.userpage',compact('product'));
        }
    }
    
    public function product_details($id)
    {
        $product=product::find($id);
        return view('home.product_details',compact('product'));

    }
    public function add_cart(Request $request,$id){
        if (Auth::id()){
            $user=Auth::user();
            $product=product::find($id);
            dd($product);

        }
        else{
            return redirect('login');
        }
    }

}
