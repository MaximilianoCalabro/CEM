<?php

namespace CEM\Http\Controllers;

use Illuminate\Http\Request;
use CEM\Popup;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use CEM\Http\Requests\PopupFormRequest;
use DB;

class PopupController extends Controller
{
    public function __construct()
    {
		
    }
    public function index(Request $request)
    {
    	if ($request)
    	{
    		$query=trim($request->get('searchText'));
    		$popup=DB::table('popup')->get();
    		return view('noticias.popup.index',["popup"=>$popup,"searchText"=>$query]);
    	}
    }
    public function create()
    {
    	return view ("noticias.popup.create");
    }
	public function store(PopupFormRequest $request)
	{
		$popup=new Popup;
		$popup->titulo=$request->get('titulo');
		$popup->subtitulo=$request->get('subtitulo');
		$popup->noticia=$request->get('noticia');
		if (Input::hasFile ('imagen_slider')){
			$file=Input::file('imagen_slider');
			$file->move(public_path().'/img/',$file->getClientOriginalName());
			$popup->imagen_slider=$file->getClientOriginalName();
		}
		$popup->save();
		return Redirect::to('noticias/popup');
	}
	public function show($id)
	{
		return view("noticias.popup.show",["popup"=>Popup::findOrFail($id)]);
	}
	public function edit($id)
	{
		return view("noticias.popup.edit",["popup"=>Popup::findOrFail($id)]);	
	}
	public function update(PopupFormRequest $request, $id)
	{
		$popup=popup::findOrFail($id);
		$popup->titulo=$request->get('titulo');
		$popup->subtitulo=$request->get('subtitulo');
		$popup->noticia=$request->get('noticia');
		if (Input::hasFile ('imagen_slider')){
			$file=Input::file('imagen_slider');
			$file->move(public_path().'/img/',$file->getClientOriginalName());
			$popup->imagen_slider=$file->getClientOriginalName();
		}
		$popup->update();
		return Redirect::to('noticias/popup');
	}
	public function destroy($id)
	{
		$popup=Popup::findOrFail($id);
		$popup->delete();
		return Redirect::to('noticias/popup');
	}
}
