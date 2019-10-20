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

public function edit($id){
    $kategoriPengumuman=KategoriPengumuman::find($id);
       

    if (empty($kategoriGaleri)){
        return redirect(route('kategori_pengumuman.index'));
    }

    return view('kategori_pengumuman.edit',compact('kategoriPengumuman'));
}
public function update($id, Request $request){
    $kategoriPengumuman=KategoriPengumuman::find($id);
    $input= $request->all();
    if (empty($kategoriGaleri)){
        return redirect(route('kategori_pengumuman.index'));
    
}
$kategoriGaleri->update($input);
return redirect(route('kategori_pengumuman.index'));
}
public function destroy($id){
    $KategoriPengumuman=KategoriPengumuman::find($id);
       

    if (empty($KategoriPengumuman)){
        return redirect(route('kategori_pengumuman.index'));
    }
    $KategoriPengumuman->delete();
    return redirect(route('kategori_pengumuman.index'));
}

}
