<?php

namespace CEM\Http\Controllers;

use Illuminate\Http\Request;
use CEM\Noticias;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use CEM\Http\Requests\NoticiasFormRequest;
use DB;

class NoticiasController extends Controller
{
    public function __construct()
    {
		
    }
    public function index(Request $request)
    {
    	if ($request)
    	{
    		$query=trim($request->get('searchText'));
    		$noticias=DB::table('noticias')->get();
    		return view('noticias.inicio.index',["noticias"=>$noticias,"searchText"=>$query]);
    	}
    }
    public function create()
    {
    	return view ("noticias.inicio.create");
    }
	public function store(NoticiasFormRequest $request)
	{
		$noticias=new Noticias;
		$noticias->titulo=$request->get('titulo');
		$noticias->subtitulo=$request->get('subtitulo');
		$noticias->fecha=$request->get('fecha');
		$noticias->noticia=$request->get('noticia');
		if (Input::hasFile ('imagen')){
			$file=Input::file('imagen');
			$file->move(public_path().'/img/',$file->getClientOriginalName());
			$noticias->imagen=$file->getClientOriginalName();
		}
		$noticias->save();
		return Redirect::to('noticias/inicio');
	}
	public function show($id)
	{
		return view("noticias.inicio.show",["noticias"=>Noticias::findOrFail($id)]);
	}
	public function edit($id)
	{
		return view("noticias.inicio.edit",["noticias"=>Noticias::findOrFail($id)]);	
	}
	public function update(NoticiasFormRequest $request, $id)
	{
		$noticias=Noticias::findOrFail($id);
		$noticias->titulo=$request->get('titulo');
		$noticias->subtitulo=$request->get('subtitulo');
		$noticias->fecha=$request->get('fecha');
		$noticias->noticia=$request->get('noticia');
		if (Input::hasFile ('imagen')){
			$file=Input::file('imagen');
			$file->move(public_path().'/img/',$file->getClientOriginalName());
			$noticias->imagen=$file->getClientOriginalName();
		}
		$noticias->update();
		return Redirect::to('noticias/inicio');
	}
	public function destroy($id)
	{
		$noticias=Noticias::findOrFail($id);
		$noticias->delete();
		return Redirect::to('noticias/inicio');
	}

}
