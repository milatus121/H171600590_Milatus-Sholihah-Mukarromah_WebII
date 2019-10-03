<?php

namespace App\Http\Controller;

use Illuminate\Http\Request;
use App\kategorigaleri;

class kategoriAgalericontroller extends Controller
{
function index(){
	$kategorigaleri=kategorigaleri::all();

    return view('kategori_galeri.index',compact ('kategorigaleri'));

}
}
