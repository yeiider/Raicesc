<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailPQRSF;

class PQRSF extends Controller
{
   public function index(){

   	return view('pqrsf');
   }

   public function sendPQRSF(Request $request){
     $datos=$request->all();
   
     $c=array('soporte@raicesc.net','admin@raicec.net','yeideradrian.noba@gmail.com');
     
   
   
   
      //Mail::to('admin@raicesc.net', $datos['nombre']. ',' .$datos['motivo'])->send(new MailPQRSF($datos));
   

    $contenido=$request->all();
  
  $pdf=\PDF::loadView('pdf.pqrf', compact('contenido'));
  //return new MailPQRSF($datos);
  return $pdf->stream('responsepqrsf.pdf');
    
   
   }
}
