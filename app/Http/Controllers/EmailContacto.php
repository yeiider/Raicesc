<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contacto;

class EmailContacto extends Controller
{
    

   public function index(Request $request){
    
    $data= $request->all();
   

   	Mail::to('soporte@raicesc.net',$data['nombre'])->send(new Contacto($data));
   	
    	return 'mensage enviado';

 
    }
}
