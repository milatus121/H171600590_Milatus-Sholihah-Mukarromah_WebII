<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class KategoriBerita extends Model
{
	use SoftDeletes;

    protected $table='kategori_berita';

    	protected $fillable=['nama','judul','users_id','updated_at','created_at','kategori_berita_id'];

    	protected $casts=[ 
    	'deleted_at'=>'datetime'
    	];
}

