@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">List Galeri</div>
                <div class="card-body">
                
                <table class="table table-bordered">
                    <thead class="bg-success">
                        <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">path</th>
                        <th scope="col">Create</th>
                        <th scope="col">Kategori Id</th>
                        <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach( $listGaleri as $item)
                        <tr>
                        <td>{!! $item->id !!}</td>
                        <td>{!! $item->nama !!}</td>
                        <td>{!! $item->keterangan !!}</td>
                        <td>{!! $item->path !!}</td>
                        <td>{!! $item->created_at !!}</td>
                        <td>{!! $item->kategori_galeri_id !!}</td>
                        <td>
                         <a href="{!! route('galeri.show',[$item->id]) !!}">Detail</a>
                        </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <a href="{!! route('galeri.create') !!}" class="btn btn-primary">Tambah Data</a>
        @endsection