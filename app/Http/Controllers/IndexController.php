<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;
use App\Http\Controllers\DB;

class IndexController extends Controller
{
    public function index(){
    	$item = Barang::all();
        return view('List.item',compact('item'));
    }

    public function create(){
    	return view('List.create');
    }

    public function store(Request $request){
        Barang::insert([
    	'id_item' => $request->inputIDItem,
        'id_category' => $request->inputIDCategory,
        'nama_item' => $request->inputNamaItem,
        'stok' => $request->inputStok,
        'harga' => $request->inputHarga,
        'satuan' => $request->inputSatuan
        ]);
        return redirect('item');
    }

    public function edit($id_item){
        $data = Barang::where('id_item',$id_item)->get();
        return view('List.edit', ['data'=>$data]);
    }

    public function update(Request $request, $id_item)
    {
        Barang::where('id_item',$id_item)->update([
            'id_category' => $request->inputIDCategory,
            'nama_item' => $request->inputNamaItem,
            'stok' => $request->inputStok,
            'harga' => $request->inputHarga,
            'satuan' => $request->inputSatuan
            ]); 
    return redirect('item');        
    }

    public function destroy($id_item)
    {
        Barang::where('id_item',$id_item)->delete();
        return redirect('item');
    }
}
