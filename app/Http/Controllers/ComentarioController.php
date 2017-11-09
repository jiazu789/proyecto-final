<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comentario;

class ComentarioController extends Controller
{
      public function show($id)
    {
    	$com=Comentario::find($id);

    	return view('noticias.show',compact('com'));
    	//return "url funciona para el articulo" . $id;
    }

    public function store(Request $request)
{
    

    Comentario::create($request->all());
    return 'completado';
}
}
