<?php

namespace CEM;

use Illuminate\Database\Eloquent\Model;

class background extends Model
{
    protected $table='background';

	protected $primaryKey='id_background';

	public $timestamps=false;

	protected $fillable =[
		'imagen',
		'texto'
	];

	protected $guarded =[

	];
}
