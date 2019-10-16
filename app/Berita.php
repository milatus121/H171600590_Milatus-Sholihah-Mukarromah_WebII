<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
     protected $table ='berita';

    	protected $fillable = ['judul','nama', 'keterangan', 'users_id','kategori_berita_id'];
}
