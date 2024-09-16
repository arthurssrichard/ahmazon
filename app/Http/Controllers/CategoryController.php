<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use PDO;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::All();
        return view('admin.category.categories', ['categories'=>$categories]);
    }
    public function create(){
        return view('admin.category.create');
    }
    public function store(Request $request){
        $category = new Category;
        $category->name = $request->name;
        $category->description = $request->description;

        // tratar imagem
        if($request->hasFile('image' && $request->file('image')->isValid())){
            $image = $request->file('image');
            $extension = $image->extension();
            $imageName = md5($image->getClientOriginalName().strtotime("now")).".".$extension;
            
            $image->move(public_path('img/categories'), $imageName);
            $category->image = $imageName;
        }
        $category->save();
        return redirect('admin/categories')->with('msg', 'Categoria criado com sucesso!');
    }
}
