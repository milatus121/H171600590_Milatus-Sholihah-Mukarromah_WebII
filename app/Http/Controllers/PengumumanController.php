<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengumuman;
use App\KategoriPengumuman;

class PengumumanController extends Controller
{
    function index(){
        $pengumuman=Pengumuman::all();

        return view ('pengumuman.index',compact('pengumuman'));
    }
    public function show($id)
    {
    
        $pengumuman=Pengumuman::find($id);

        return view('pengumuman.show',compact( 'pengumuman'));
    }

    public function create()
    {
        $KategoriPengumuman=KategoriPengumuman::pluck('nama','id');
        

        return view( 'pengumuman.create',compact('KategoriPengumuman'));
    }
    public function store(Request $request)
    {
        $input= $request->all();
        
       Pengumuman::create($input);

        return redirect(route('pengumuman.index'));
    }

    public function edit($id)
    {
        $pengumuman=Pengumuman::find($id);
        $KategoriPengumuman=KategoriPengumuman::pluck('nama','id');

        if (empty($pengumuman))
        { return redirect(route('Pengumuman.index')); }

        return view( 'pengumuman.edit',compact( 'pengumuman','KategoriPengumuman'));
    }

    public function update($id,Request $request)
    {
    
        $pengumuman=Pengumuman::find($id);
        $input= $request->all();

        if (empty($Pengumuman))
        { return redirect(route('pengumuman.index')); }

        $Pengumuman->update($input);
        return redirect(route('pengumuman.index'));
        
    }

    public function destroy($id)
    {
    
        $pengumuman=Pengumuman::find($id);

        if (empty($pengumuman))
        { return redirect(route('pengumuman.index')); }

        $pengumuman->delete();
        return redirect(route('pengumuman.index'));
    }

}
