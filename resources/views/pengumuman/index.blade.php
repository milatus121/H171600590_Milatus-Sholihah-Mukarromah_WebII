@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center bg-succes"  >Pengumuman</div>
                <div class="card-body bg-succes">
                 <a href="{!! route('pengumuman.create')!!}" class="btn btn-primary">{{ __('Tambah Data')}}</a>
                <a href="{!! route('kategori_pengumuman.index')!!}" class="btn btn-primary">{{ __('Lihat Kategori Pengumuman')}}</a>
                <div class="col text ">
                <br>
                <table class="table table-bordered bg-white">
                    <thead class ="bg-success">
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Judul</th>
                                <th scope="col">isi</th>
                                <th scope="col">User_id</th>
                                <th scope="col">Kategori_pengumuman_id</th>
                                <th scope="col">Aksi</th>
                            </tr>
                    </thead>
                    <tbody>
                        @foreach ($pengumuman as $item)
                            <tr>
                               
                                <td>{!! $item->id!!}</td>
                                <td>{!! $item->judul!!}</td>
                                <td>{!! $item->isi!!}</td>
                                <td>{!! $item->users_id!!}</td>
                                <td>{!! $item->kategori_pengumuman_id!!}</td>

                                <td>
                                <a href="{!! route('pengumuman.show',[$item-> id]) !!}" button class="btn btn-sm  btn-primary" >Detail</a>
                                
                                <a href="{!! route('pengumuman.edit',[$item-> id]) !!}" button class="btn btn-sm btn-warning" >Edit</a>
                             
                                {!! Form::open(['route' => ['pengumuman.destroy', $item->id],'method' => 'delete']) !!}

                                {!! Form::submit('Hapus', ['class'=>'btn  btn-sm btn-danger','onclick'=>"return confirm('Apakah Anda yakin menghapus data ini ?')"]); !!}
                                {!! Form::close() !!}
                                </td>

                            </tr>
                            @endforeach
                    </tbody>
                    </table>
                    </div>
</div>
</div>
</div>
</div>
@endsection