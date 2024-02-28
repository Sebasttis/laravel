<?php
namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
   

    public function create() {

        return view('formulario');
       
    }

    public function store(Request $request ){

       $producto = new Product();
       $producto->name=$request->name;  
       $producto->price=$request->price;
       $producto->expiration=$request->expiration;  
       $producto->flavor=$request->flavor;
       $producto->save();
       return $producto;


    }



}