<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kategoriArtikel;
class KategoriArtikelController extends Controller
{
    function index(){
	$KategoriArtikel=KategoriArtikel::all();

    return view('kategori_artikel.index',compact ('KategoriArtikel'));

}
}



