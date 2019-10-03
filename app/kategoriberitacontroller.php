<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriBerita;

class kategoriberitaController extends Controller
{
    public function index(){
    	
    	$KategoriBerita=KategoriBerita::all(); 

    	return view ('kategori_berita.index',compact('KategoriBerita'));
    	
    }

    public function show($id) {

        
        $KategoriBerita=kategoriBerita::find($id);
        
    }

     public function create(){

        return view ('kategori_berita.create');
        
    }

    public function store(Request $request){
        $input= $request->all();

        KategoriBerita::create($input);
        
        return redirect(route('kategori_berita.index'));
    }
}

