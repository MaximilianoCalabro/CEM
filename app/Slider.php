<?php

namespace CEM;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{    
	protected $table='slider';

	protected $primaryKey='id_slider';

	public $timestamps=false;

	protected $fillable =[
		'imagen',
		'id_noticias'
	];

	protected $guarded =[

	];
}
