<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Cart;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FrontendController extends Controller
{
    //
    public function index(){
        $brands = Brand::all();
        $products = Product::with(['brand','photo'])->get();
        return view('index', compact('products', 'brands'));
    }
    public function productsPerBrand($id){
        $brands = Brand::all();
        $products = Product::with(['brand','photo'])->where('brand_id', '=', $id)->get();
        return view('index', compact('products', 'brands'));
    }

    public function addToCart($id){
        $product = Product::with(['category', 'brand','photo'])->where('id','=', $id)->first();

        $oldCart = Session::has('cart') ? Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->add($product, $id);
        Session::put('cart', $cart);
        //dd(Session::get('cart'));
        return redirect('/');
    }

    public function cart(){
        if(!Session::has('cart')){
            return redirect('/');
        }else{
            $currentCart = Session::has('cart') ? Session::get('cart') : null;
            $cart = new Cart($currentCart);
            $cart = $cart->products;
            return view('checkout',compact('cart'));
        }
    }
    public function updateQuantity(Request $request){
        $oldCart = Session::has('cart') ? Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->updateQuantity($request->id, $request->quantity);
        //(Session('cart'));
        Session::put('cart', $cart);

        return redirect('/checkout');
    }
}
