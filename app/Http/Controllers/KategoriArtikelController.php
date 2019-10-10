<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriArtikel;
class KategoriArtikelController extends Controller
{
    public function index(){
        //Eloquent => ORM (Object Relational Mapping)
        $listKategoriArtikel=KategoriArtikel::all(); //select * from kategori_artikel
       
        
        return view('kategori_artikel.index',compact('listKategoriArtikel'));
        //return view('kategori_artikel.index')->with('data',$ListKategoriArtikel);
       
    }
    public function show($id){
        //Eloquent
        //$kategoriArtikel=KategoriArtikel::where('id',$id)->first();
        $kategoriArtikel=KategoriArtikel::find($id);
    
    
            return view('kategori_artikel.show', compact ('kategoriArtikel') );
    }

    public function create(){
        return view('kategori_artikel.create');
    }

    public function store(request $request){
        $input= $request->all();
        KategoriArtikel::create([
            'nama'=>$input['nama'],
            'users_id'=>$input['users_id']

        ]);
        
        return redirect(route('kategori_artikel.index'));
    }
}
