<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
    public function index(){
        $product = Product::all();
        return view('page.index', compact('product'));
    }
    public function buyAcc($id){
        $product = Product::find($id);
        if (!$product){
            return abort(404);
        }
        return view('page.buy', compact('product'));
    }
    public function payment(Request $request){
        dd($request->all());
        return view('page.history');
    }
    public function historyPayment(Request $request){
        print_r($request->get('count'));
    }
}
