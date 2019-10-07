<?php

namespace App\Http\Controller;

use Illuminate\Http\Request;
use App\KategoriArtikel;

class KategoriArtikelController extends Controller
{
public function index(){
	$KategoriArtikel=KategoriArtikel::all();

    return view('kategori_artikel.index',compact ('KategoriArtikel'));

}

public function show($id){
$KategoriArtikel=KategoriArtikel::find($id);

    return view('kategori_artikel.show',compact ('KategoriArtikel'));


}

}
