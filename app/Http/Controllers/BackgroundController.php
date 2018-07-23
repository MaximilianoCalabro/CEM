<?php

namespace CEM\Http\Controllers;

use Illuminate\Http\Request;
use CEM\Background;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use CEM\Http\Requests\BackgroundFormRequest;
use DB;

class BackgroundController extends Controller
{
    public function __construct()
    {
		
    }
    public function index(Request $request)
    {
    	if ($request)
    	{
    		$query=trim($request->get('searchText'));
    		$background=DB::table('background')->get();
    		return view('background.index',["background"=>$background,"searchText"=>$query]);
    	}
    }
    public function create()
    {
    	return view ("background.create");
    }
	public function store(BackgroundFormRequest $request)
	{
		$background=new Background;
		$background->texto=$request->get('texto');
		if (Input::hasFile ('imagen')){
			$file=Input::file('imagen');
			$file->move(public_path().'/img/',$file->getClientOriginalName());
			$background->imagen=$file->getClientOriginalName();
		}
		$background->save();
		return Redirect::to('background');
	}
	public function show($id)
	{
		return view("background.show",["background"=>Background::findOrFail($id)]);
	}
	public function edit($id)
	{
		return view("background.edit",["background"=>Background::findOrFail($id)]);	
	}
	public function update(BackgroundFormRequest $request, $id)
	{
		$background=Background::findOrFail($id);
		$background->texto=$request->get('texto');
		if (Input::hasFile ('imagen')){
			$file=Input::file('imagen');
			$file->move(public_path().'/img/',$file->getClientOriginalName());
			$background->imagen=$file->getClientOriginalName();
		}
		$background->update();
		return Redirect::to('background');
	}
	public function destroy($id)
	{
		$background=Background::findOrFail($id);
		$background->delete();
		return Redirect::to('background');
	}
}
