<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student_table;

class HomeController extends Controller
{
    function HomeIndex(){
        return view('Home');
    }
    function DataInsert(Request $request){

        $name = $request->input('name');
        $phone = $request->input('phone');
        $address = $request->input('address');
        $age = $request->input('age');

        $isInsertSuccess = Student_table::insert(['name'=>$name, 'phone'=>$phone, 'address'=>$address, 'age'=>$age
    
    ]);
    
        if($isInsertSuccess) echo '<h1>Insert Success</h1>';
        else echo '<h1>Insert Failed</h1>';
    }
}
