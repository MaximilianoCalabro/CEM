<?php

namespace CEM;

use Illuminate\Database\Eloquent\Model;

class Popup extends Model
{
    protected $table='popup';

	protected $primaryKey='id_popup';

	public $timestamps=false;

	protected $fillable =[
		'titulo',
		'subtitulo',
		'noticia',
		'imagen_slider'
	];

	protected $guarded =[

	];
}
