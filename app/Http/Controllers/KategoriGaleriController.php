<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriGaleri;


class KategoriGaleriController extends Controller
{
    public function index(){
      
         $listKategoriGaleri=kategoriGaleri::all(); 
       
        
         return view('kategori_galeri.index',compact('listKategoriGaleri'));
      
       
    }
    public function show($id){
     
        $kategoriGaleri=KategoriGaleri::find($id);
    
    
            return view('kategori_galeri.show', compact ('kategoriGaleri') );
    }

    public function create(){
        return view('kategori_galeri.create');
    }
    public function store(request $request){
        $input= $request->all();
        KategoriGaleri::create([
            'nama'=>$input['nama'],
            'users_id'=>$input['users_id']

        ]);
        
        return redirect(route('kategori_galeri.index'));
    }
}
