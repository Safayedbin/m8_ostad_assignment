<?php

namespace App\Http\Controllers;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(Request $request ) : array | string | null {

 
        $id= $request->id;
           $name = "Donal Trump" ;
        
           $age = "75";
           $data = [
            "id"=>$id,
            "name"=>$name,
            "age"=>$age
           ];

        $name = $request->cookie('access_token');
        
        $value = $request->cookie('Expires');
        
        $minutes = $request->cookie('Time');
        
        $path = $request->cookie('Path');
        
        $domain = $request->cookie('Domain');
        
        $secure = $request->cookie('Secure');
        
        $httpOnly = $request->cookie('HttpOnly');

        $response = new Response();
        $response->cookie('access_token', '123-XYZ', 1,'Path','Domain', 'Secure', 'HttpOnly'); 

        return response()->json(
        [  
             "id"=>$id,
            "name"=>$name,
            "age"=>$age

        ])->withCookie('access_token', '123-XYZ', 1)->setStatusCode(200); 
         
           //'id' => 'value','key' => 'value','key' => 'value'
        }
        
         
}
