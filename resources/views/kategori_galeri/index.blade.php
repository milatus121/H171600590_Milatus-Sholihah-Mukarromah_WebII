@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center bg-succes">Kategori Galeri</div>
                <div class="card-body bg-succes">
                <a href="{!! route('kategori_galeri.create') !!}" class="btn btn-primary">Tambah Data</a>
                  <a href="{!! route('galeri.index') !!}" class="btn btn-primary">Lihat Galeri</a>
                <table class="table table-bordered">
                    <thead class="bg-success">
                        <tr>
                         <th scope="col">id</th>
                                 <th scope="col">id</th>
                                <th scope="col">nama</th>
                                <th scope="col">keterangan</th>
                                <th scope="col">path</th>
                                <th scope="col">Users_id</th>
                                <th scope="col">created_at</th>
                                <th scope="col">updated_at</th>
                                <th scope="col">kategori_galeri_id</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach( $listKategoriGaleri as $item)
                        <tr>
                        <td>{!! $item->id!!}</td>
                                <td>{!! $item->nama!!}</td>
                                <td>{!! $item->keterangan!!}</td>
                                <td>{!! $item->path!!}</td>
                                <td>{!! $item->users_id!!}</td>
                                <td>{!! $item->created_at!!}</td>
                                <td>{!! $item->updated_at!!}</td>
                                <td>{!! $item->kategori_galeri_id!!}</td>
                        <td>
                        <a href="{!! route('kategori_galeri.show',[$item->id]) !!}" class="btn btn-sm btn-primary">Detail</a>
                        
                        <a href="{!! route('kategori_galeri.edit',[$item->id]) !!}" class="btn btn-sm btn-warning">Edit</a>
                        

                        {!! Form::open(['route'=>['kategori_galeri.destroy',$item->id],'method'=>'delete']) !!}

                        {!! Form::submit('Hapus', ['class'=>'btn btn-sm btn-danger','onclick'=>"return confirm ('Apakah anda yakin ingin menghapus?')"]); !!}

                        {!! Form::close() !!}

                        </td>
                        </tr>
                       @endforeach
                    </tbody>
                </table>
                    <td>
                        
                    </td>
            </div>
        </div>
    </div>
</div>
</div>
@endsection