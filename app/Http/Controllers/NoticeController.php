<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notice;


class NoticeController extends Controller
{
     public function index()
    {
    	

    	$noticias=Notice::all();
    	return view('noticias.index',compact('noticias'));
    }


    public function show($id)
    {
    	$noticia=Notice::find($id);

    	return view('noticias.show',compact('noticia'));
    	//return "url funciona para el articulo" . $id;
    }

    public function create()
    {
        return view('noticias.create');
    }

    public function store(Request $request)
{
    //$noticiass = new Notice;
    //$noticiass->titulo=$request->input('titulo');
    //$noticiass->texto=$request->input('texto');
    //$noticiass->url=$request->input('url');
    //$noticiass->save();

    Notice::create($request->all());
    return '<a href="/home">Volver</a>';
}
}


