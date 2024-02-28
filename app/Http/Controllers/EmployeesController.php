<?php
namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Staff;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    public function create3() {

        return view('formulario3');
       
    }

    public function store3(Request $request ){

       $personal = new Employee();
       $personal->name=$request->name;  
       $personal->identification=$request->identification;
       $personal->contrate=$request->contrate;
       $personal->num=$request->num;
       $personal->save();
       return $personal;


    }



}