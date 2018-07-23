<?php

namespace CEM\Http\Controllers;

use Illuminate\Http\Request;
use CEM\Slider;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use CEM\Http\Requests\SliderFormRequest;
use DB;

class SliderController extends Controller
{
    public function __construct()
    {
		
    }
    public function index(Request $request)
    {
    	if ($request)
    	{
    		$query=trim($request->get('searchText'));
    		$slider=DB::table('slider')->get();
    		return view('noticias.slider.index',["slider"=>$slider,"searchText"=>$query]);
    	}
    }
    public function create()
    {
    	return view ("noticias.slider.create");
    }
	public function store(SliderFormRequest $request)
	{
		$slider=new Slider;
		if (Input::hasFile ('imagen')){
			$file=Input::file('imagen');
			$file->move(public_path().'/img/',$file->getClientOriginalName());
			$slider->imagen=$file->getClientOriginalName();
		}
		$slider->save();
		return Redirect::to('noticias/slider');
	}
	public function show($id)
	{
		return view("noticias.slider.show",["slider"=>Slider::findOrFail($id)]);
	}
	public function edit($id)
	{
		return view("noticias.slider.edit",["slider"=>Slider::findOrFail($id)]);	
	}
	public function update(SliderFormRequest $request, $id)
	{
		$slider=Slider::findOrFail($id);
		if (Input::hasFile ('imagen')){
			$file=Input::file('imagen');
			$file->move(public_path().'/img/',$file->getClientOriginalName());
			$slider->imagen=$file->getClientOriginalName();
		}
		$slider->update();
		return Redirect::to('noticias/slider');
	}
	public function destroy($id)
	{
		$slider=Slider::findOrFail($id);
		$slider->delete();
		return Redirect::to('noticias/slider');
	}
}
