<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategoripengumuman extends Model
{
	protected $table='kategori_pengumuman';

	protected $fillable = [
	'nama','users_id',
	];
}
