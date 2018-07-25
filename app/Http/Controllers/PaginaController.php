<?php

namespace CEM\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;

class PaginaController extends Controller
{
	public function show() //cosulta a la db por cada seccion
	{
		$background=DB::table('background')->get();
		$noticias=DB::table('noticias as n')
		->get();
		$slider = DB::table('slider as s')->get();
		$popup=DB::table('popup')->get();

		return view('index',["background"=>$background, "noticias"=>$noticias, "popup"=>$popup, "slider"=>$slider]);
	}
}
