<?php
namespace App\Http\Controllers;

use App\Models\Client;

use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function create2() {

        return view('formulario2');
       
    }

    public function store2(Request $request ){

       $cliente = new Client();
       $cliente->name=$request->name;  
       $cliente->identification=$request->identification;
       $cliente->mail=$request->mail;
       $cliente->age=$request->age;
       $cliente->save();
       return $cliente;


    }



}


