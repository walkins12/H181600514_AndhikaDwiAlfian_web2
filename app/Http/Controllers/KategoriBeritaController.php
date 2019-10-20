<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriBerita;

class KategoriBeritaController extends Controller
{
    public function index(){
        //Eloquent => ORM (Object Relational Mapping)
        $listKategoriBerita=KategoriBerita::all(); //select * from kategori_artikel
       
        
        return view('kategori_berita.index',compact('listKategoriBerita'));
        //return view('kategori_artikel.index')->with('data',$ListKategoriArtikel);
       
    }
    public function show($id){
   
        $kategoriBerita=KategoriBerita::find($id);
    
    
            return view('kategori_berita.show', compact ('kategoriBerita') );
    }

    public function create(){
        return view('kategori_berita.create');
    }
    public function store(request $request){
        $input= $request->all();
        KategoriBerita::create([
            'nama'=>$input['nama'],
            'users_id'=>$input['users_id']

        ]);
        
        return redirect(route('kategori_berita.index'));
    }
    public function edit($id){
        $kategoriBerita=KategoriBerita::find($id);
           

        if (empty($kategoriBerita)){
            return redirect(route('kategori_berita.index'));
        }

        return view('kategori_berita.edit',compact('kategoriBerita'));
    }


    public function update($id, Request $request){
        $kategoriBerita=KategoriBerita::find($id);
        $input= $request->all();
        if (empty($kategoriBerita)){
            return redirect(route('kategori_berita.index'));
        
    }
    $kategoriBerita->update($input);
    return redirect(route('kategori_berita.index'));
}
public function destroy($id){
    $KategoriBerita=KategoriBerita::find($id);
       

    if (empty($KategoriBerita)){
        return redirect(route('kategori_berita.index'));
    }
    $KategoriBerita->delete();
    return redirect(route('kategori_berita.index'));
}

}
