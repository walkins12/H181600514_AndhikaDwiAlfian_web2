@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Tambah  Galeri</div>

                <div class="card-body">

                   {!! Form::model($galeri, ['route' => ['galeri.update', $galeri->id], 'method'=>'patch']) !!}
                    @include('galeri.form')
                    {!! Form::close() !!}
                </div>
              </div>
           </div>
         </div>
     </div>
@endsection

