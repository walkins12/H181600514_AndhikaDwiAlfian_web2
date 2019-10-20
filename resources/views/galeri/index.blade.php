@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-18">
            <div class="card">
                <div class="card-header">List Galeri</div>

                <div class="card-body">
                <a href="{!! route('galeri.create')!!}" class="btn btn-primary" >Tambah Data</a>
         <table border="1">
        <tr>
        <td>ID</td>
        <td>nama</td>
        <td>keterangan</td>
        <td>path</td>
        <td>user </td>
        <td>Create</td>
        <td>Update</td>
        <td>Aksi</td>
        </tr>

        @foreach($listGaleri as $item)
        <tr>
        <td>{!! $item->id !!}</td>
        <td>{!! $item->nama !!}</td>
        <td>{!! $item->keterangan !!}</td>
        <td>{!! $item->path !!}</td>
        <td>{!! $item->users_id !!}</td>
        <td>{!! $item->created_at->format('d/m/y H:i:s') !!}</td>
        <td>{!! $item->updated_at->format('d/m/y H:i:s') !!}</td>
       
       <td>
       <a href="{!! route('galeri.show',[$item->id]) !!} " class="btn btn-primary " >
       
       Lihat
       </a>    

         <a href="{!! route('galeri.edit',[$item->id]) !!} " class="btn btn-primary " >
       
       Ubah
       </a> 
       {!! Form::open(['route' => ['galeri.destroy', $item->id], 'method'=>'delete']) !!}
        {!! Form::submit('Hapus',['class'=>'btn  btn-danger']); !!}
        {!! Form::close() !!}
       </td>
        </tr>
        @endforeach
        
        </table>
           
                  
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
