<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use File;

class DashController extends Controller
{
  function inicio(){
    $lista_dir = File::directories('C:\xampp\htdocs');
    $dirs = array();
    foreach ($lista_dir as $dir) {
      if(!strpos($dir, 'dashboard')){
        $str = explode("\\", $dir);
        array_push($dirs, $str[3]);
      }
    }
    $datos = array(
      'dirs' => $dirs,
      'lista' => $lista_dir,
    );
    return view("inicio")->with($datos);
  }

  function actualiza(Request $request){
    $palabra = "N/A";
    $lista_dir = File::directories('C:\xampp\htdocs');
    $dirs = array();
    if($request->ajax()){
      $palabra = $request->get("dato");
      if($palabra == ""){
        foreach ($lista_dir as $dir) {
          if(!strpos($dir, 'dashboard')){
            $str = explode("\\", $dir);
            array_push($dirs, $str[3]);
          }
        }
      }else{
        foreach ($lista_dir as $dir) {

            if(!strpos($dir, 'dashboard') && strpos($dir, $palabra) != false){
              $str = explode("\\", $dir);
              array_push($dirs, $str[3]);
            }


        }
      }

    }

    return response()->json($dirs) ;
    // return response()->json($dato) ;
  }
}
