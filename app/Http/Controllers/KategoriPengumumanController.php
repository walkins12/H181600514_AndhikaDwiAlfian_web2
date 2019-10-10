<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriPengumuman;

class KategoriPengumumanController extends Controller
{
    public function index(){
       
        $listKategoriPengumuman=KategoriPengumuman::all(); 
        
        return view('kategori_pengumuman.index',compact('listKategoriPengumuman'));
     
    }
   public function show($id){
     
    $kategoriPengumuman=KategoriPengumuman::find($id);


        return view('kategori_pengumuman.show', compact ('kategoriPengumuman') );
}

public function create(){
    return view('kategori_pengumuman.create');
}
public function store(request $request){
    $input= $request->all();
    KategoriPengumuman::create([
        'nama'=>$input['nama'],
        'users_id'=>$input['users_id']

    ]);
    
    return redirect(route('kategori_pengumuman.index'));
}
}
