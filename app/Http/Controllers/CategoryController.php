<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Http\Controllers\DB;

class CategoryController extends Controller
{
    public function index(){
    	$cat = Category::all();
    	return view('Cat.category', compact('cat'));
    }

    public function create(){
    	return view('Cat.create-cat');
    }

    public function store(Request $request){
        Category::insert([
        'id_category' => $request->inputIDCategory,
        'Category' => $request->inputCategory,
        ]);
        return redirect('cat');
    }

    public function edit($id_category){
        $data = Category::where('id_category',$id_category)->get();
        return view('Category.edit', ['data'=>$data]);
        
    }

    public function update(Request $request, $id_category)
    {
        Category::where('id_category',$id_category)->update([
            'category_kain' => $request->inputCategory
            ]); 
    return redirect('cat');        
    }

    public function destroy($id_category)
    {
        Category::where('id_category',$id_category)->delete();
        return redirect('category');
    }

}
