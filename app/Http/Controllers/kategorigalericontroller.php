<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kategorigaleri;

class kategorigalericontroller extends Controller
{
function index(){
	$kategorigaleri=kategorigaleri::all();

    return view('kategori_galeri.index',compact ('kategorigaleri'));

}
}
