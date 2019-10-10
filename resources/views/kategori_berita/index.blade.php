@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
          
                <div class="card-header">List Kategori Berota</div>
                <a href = "{!! route('kategori_berita.create') !!}" class="btn btn-success">Tambah Data</a>
                <table border="1">
        <tr>
        <td>ID</td>
        <td>nama</td>
        <td>Users</td>
        <td>Create</td>
        <td>Aksi</td>
        </tr>

        @foreach($listKategoriBerita as $item)
        <tr>
        <td>{!! $item->id !!}</td>
        <td>{!! $item->nama !!}</td>
        <td>{!! $item->users_id !!}</td>
        <td>{!! $item->created_at->format('d/m/y H:i:s') !!}</td>
       
       
        <td>
        <a href="{!! route('kategori_berita.show',[$item->id]) !!} " class="btn btn-primary " >
        
        Lihat
        </a>    
        </td>
        </tr>
        @endforeach
        
        </table>
                <div class="card-body">
                  
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
