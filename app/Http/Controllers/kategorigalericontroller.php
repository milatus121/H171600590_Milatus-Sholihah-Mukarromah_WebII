<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriGaleri;

class KategoriGaleriController extends Controller
{
    public function index(){
    	
    	$listKategoriGaleri=KategoriGaleri::all(); 

    	return view ('kategori_galeri.index',compact('listKategoriGaleri'));
    
    }

    public function show($id) {

    	
    	$KategoriGaleri=KategoriGaleri::find($id);
    	
    }

    public function create(){

        return view ('kategori_galeri.create');
        
    }

    public function store(Request $request){
        $input= $request->all();

        KategoriGaleri::create($input);
        
        return redirect(route('kategori_galeri.index'));
    }
    public function edit($id) {
        $listKategoriGaleri=KategoriGaleri::find($id);

        if (empty($listKategoriGaleri)){
            return redirect(route ('kategori_galeri.index'));
        }

        return view('kategori_galeri.edit',compact('listKategoriGaleri'));
    }

 public function update($id,Request $request)
    {
      $listKategoriGaleri=KategoriGaleri::find($id);
      $input=$request->all();
  
      if(empty($listKategoriGaleri))
      {
        return redirect(route('kategori_galeri.index'));
      }

      $listKategoriGaleri->update($input);
      return redirect(route('kategori_galeri.index'));
    }

    public function destroy($id) {
        $listKategoriGaleri=KategoriGaleri::find($id);

        if (empty($listKategoriGaleri)){
            return redirect(route ('kategori_galeri.index'));
    }

    $listKategoriGaleri->delete();
        return redirect(route('kategori_galeri.index'));
    }

    public function trash(){
        
        $listKategoriGaleri=KategoriGaleri::onlyTrashed(); 

        return view ('kategori_galeri.index',compact('listKategoriGaleri'));
        //return view ('kategori_galeri.index'->with('data',$listKategoriGaleri);
    }
}


