<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    function index() 
    {
        dd("hello");
    }
    function poster(Request $request) 
    {   
        return view('welcome');
        $b=$request->qwerty;
        
        move_uploaded_file($b, 'C:\Users\fed\Documents\MiniProject\MiniServer\Pimtest.jpg');
        exec('C:\Users\fed\anaconda3\envs\tf\python.exe C:\Users\fed\Documents\MiniProject\MiniServer\mlscriptnoapi.py 2>&1',$a);
        $c=json_encode($a);
        return $c;
    }

    function geter() 
    {  
        exec('C:\Users\fed\anaconda3\envs\tf\python.exe C:\Users\fed\Documents\MiniProject\MiniServer\mlscriptnoapi.py 2>&1',$a);
        $c=json_encode($a);
        return($c);
    }
        
}
