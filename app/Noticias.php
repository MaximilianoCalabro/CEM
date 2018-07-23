<?php

namespace CEM;

use Illuminate\Database\Eloquent\Model;

class Noticias extends Model
{
    protected $table='noticias';

	protected $primaryKey='id_noticias';

	public $timestamps=false;

	protected $fillable =[
		'titulo',
		'fecha',
		'imagen'
	];

	protected $guarded =[

	];
}
