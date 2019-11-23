<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Portafolioli;
use App\Models\Historia;
use App\Servicio;
use App\Configure;
class Index extends Controller
{
   
   public function index(){
    $portafolio= Portafolioli::all();
    $banner = Banner::all();
    $historia = Historia::all();
    $servicio = Servicio::all();
    $config = Configure::first();
    $titulo = $config->titulo_pagina;
    $color = $config->color_titulo;
    $bg_nav = $config->bg_color_nav;
    $primario = $config->color_primario;

    $datos=[
    'titulo' => $titulo,
    'banner' => $banner,
    'portafolio' => $portafolio,
    'historia' => $historia,
    'servicio' => $servicio,
    'color' => $color,
    'bg_nav' => $bg_nav,
    'primario' => $primario,
    ];
   	return view('index', compact('datos'));
   }

   public function servicioCrear (){
        
        $dato='yeider';
     	return view('createservicio',compact('dato'));
     }


   public function servicio($id){

    $servicio=Servicio::where('id','=',$id)->first();
    
   	return view('servicio', compact('servicio'));
   }

   public function setServicio(Request $request){
     
     
     
     $datos=Servicio::where('id','=',$request->id)->first();
     
     $datos->titulo=$request->titulo;
     $datos->class=$request->class;
     $datos->save(); 

     return "<script> window.close() </script>";

     }

     public function addServicio(){
       $datos = request()->all();
       Servicio::create([
        'titulo' => $datos['titulo'],
        'class' => $datos['class']
    ]);

        return "<script> window.close() </script>";
     }

     public function servicioDrop($id){
       Servicio::destroy($id);   
       return redirect()->route('index');    
     }


       public function addPortafolio(){
        $titulo="titulo";
     	return view('createPortafolio', compact('titulo'));
       }





     public function setPortafolio(Request $request){
         
        $portafolio=Portafolioli::where('id','=',$request->id)->first();

        if(empty($request->imagen)){
         
          $img1=$portafolio->imagen;
        }else{
         $file1 = $request->file('imagen');
         $img1 =  date('d-m-y')  . $file1->getClientOriginalName();
        
        }
        if(empty($request->imagen2)){
         
         $img2=$portafolio->imagen2;
        }else{
         $file2 = $request->file('imagen2');
         $img2 =  date('d-m-y') . $file2->getClientOriginalName();
        
        }

   
     $datos=Portafolioli::where('id','=',$request->id)->first();
    
      if (!empty($request->imagen)) {
         array_map('unlink', glob(public_path().'/public/assets/img/portfolio/' . $datos->imagen));
     	$file1->move(public_path().'/public/assets/img/portfolio',$img1);
     }else if(!empty($request->imagen2)){
     	array_map('unlink', glob(public_path().'/public/assets/img/portfolio/' . $datos->imagen2));
        $file2->move(public_path().'/public/assets/img/portfolio',$img2);

     }
     
     $datos->titulo=$request->titulo;
     $datos->subtitulo =$request->subtitulo;
     $datos->cuerpo = $request->body;
     $datos->titulo2 = $request->titulo2;
     $datos->subtitulo2 = $request->subtitulo2;
     $datos->identificador = str_replace(" ", "_", $request->titulo);
     $datos->imagen = $img1;
     $datos->imagen2 = $img2;

     $datos->save();

      
       

     return "<script> window.close() </script>";
     }

     public function portafolioUp($id){
      
      $p =  Portafolioli::where('id', '=' , $id)->first();

      return view('portafolio', compact('p'));      
     }


     public function portafolioDrop($id){
        $img =Portafolioli::where('id','=',$id)->first();

         array_map('unlink', glob(public_path().'/public/assets/img/portfolio/' . $img->imagen));
         array_map('unlink', glob(public_path().'/public/assets/img/portfolio/' . $img->imagen2));
     	Portafolioli::destroy($id);
     	return redirect()->route('index'); 
     }

     public function createPortafolio(Request $request){
     	

     	$datos = request()->all();
        if(empty($datos['imagen'])){
         $img1="N/A";
        }else{
         $file1 = $request->file('imagen');
         $img1 =  date('d-m-y')  . $file1->getClientOriginalName();
        
        }
        if(empty($datos['imagen2'])){
         
         $img2="N/A";
        }else{
         $file2 = $request->file('imagen2');
         $img2 =  date('d-m-y') . $file2->getClientOriginalName();
        
        }

        Portafolioli::create([
        'titulo' => $datos['titulo'],
        'titulo2' => $datos['titulo2'],
        'subtitulo' => $datos['subtitulo'],
        'subtitulo2'  => $datos['subtitulo'],
        'cuerpo' => $datos['body'],
        'imagen' => $img1,
        'imagen2' => $img2,
        'identificador' => str_replace(" ", "_", $datos['titulo'])
        ]);

         if (!empty($request->imagen) && !empty($request->imagen2)) {
     	$file1->move(public_path().'/public/assets/img/portfolio',$img1);
        $file2->move(public_path().'/public/assets/img/portfolio',$img2);
         }
 
        return "<script> window.close() </script>"; 
     }


     public function historia(){

     	return view('createHistory');
     }

     public function setHistory(Request $request){
     	 $historia=Historia::where('id','=',$request->id)->first();

        if(empty($request->imagen)){
         
          $img1=$historia->imagen;
        }else{
         $file1 = $request->file('imagen');
         $img1 =  date('d-m-y')  . $file1->getClientOriginalName();
        
        }
      
   
     $datos=Historia::where('id','=',$request->id)->first();
    
     if (!empty($request->imagen)) {
     	 array_map('unlink', glob(public_path().'/public/assets/img/about/' . $datos->imagen));
     	 $file1->move(public_path().'/public/assets/img/about',$img1);
     }
    
     $datos->titulo=$request->titulo;
     $datos->contedino =$request->contedino;
     
     $datos->imagen = $img1;
     

     $datos->save();
      

     return "<script> window.close() </script>";

     }

      public function createHistory(Request $request){
        $datos = request()->all();
        if(empty($datos['imagen'])){
         $img1="N/A";
        }else{
         $file1 = $request->file('imagen');
         $img1 =  date('d-m-y')  . $file1->getClientOriginalName();
        
        }
        Historia::create([
        'titulo' => $datos['titulo'],
        'contedino' => $datos['contedino'],
        'imagen' => $img1,
        
        
        ]);

         if (!empty($request->imagen)) {
     	$file1->move(public_path().'/public/assets/img/about',$img1);
       
         }
 
        return "<script> window.close() </script>"; 
     }

      public function updateHistory($id){
     	$historia=Historia::where('id','=',$id)->first();
     	return view('updateHistory',compact('historia'));
       }
      



     public function dropHistoria($id){
        $img=Historia::where('id','=',$id)->first();
       
       array_map('unlink', glob(public_path().'/public/assets/img/about/' . $img->imagen));
        
      	Historia::destroy($id);

     	return redirect()->route('index'); 
     }

  
     
   public function setConfig(Request $request){
     $datos=Configure::first();
     
     if($request->primario=="#000000"){
     	$request->primario="default";
     }
     if($request->bg_nav=="#000000"){
     	$request->bg_nav="default";
     }
      if($request->color_titulo=="#000000"){
     	$request->color_titulo="default";
     }
     $datos->titulo_pagina=$request->titulo;
     $datos->color_titulo=$request->color_titulo;
     $datos->bg_color_nav=$request->bg_nav;
     $datos->color_primario=$request->primario;

     $datos->save();

    return redirect()->route('index'); 
   }

   public function createBanner(Request $request){
      
      if(empty($request->imagen)){
         $img1="N/A";

        }else{
         $file1 = $request->file('imagen');
         $img1 =  date('d-m-y')  . $file1->getClientOriginalName();
        
        }

        if($request->color=="#000000"){
     	$request->color="default";
        }
  
      Banner::Create([
      'titulo' => $request->titulo,
      'subtitulo' => $request->subtitulo,
      'link' => $request->link,
      'descripcion' => $request->color,
      'imagen' => $img1
      ]);

      if (!empty($request->imagen)) {
     	$file1->move(public_path().'/assets/img/banner/',$img1);
       
         }


    return redirect()->route('index'); 
   }

   public function setBanner($id){

   	$banner=Banner::where('id','=',$id)->first();
     $banner->imagen=public_path().'/assets/img/banner/'. $banner->imagen;
   	return view('setBanner', compact('banner'));
   }
    public function dropBanner($id){
        $img=Banner::where('id','=',$id)->first();
       
       array_map('unlink', glob(public_path().'/assets/img/banner/' . $img->imagen));
        
      	Banner::destroy($id);

     	return "<script> window.close() </script>"; 
     }

    
}

