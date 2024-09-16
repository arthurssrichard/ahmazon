<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Image;

class AdminController extends Controller
{
    public function index(){
        return view('admin.dashboard');
    }
    public function products(){
        $products = Product::all();
        return view('admin.product.products', ['products'=> $products]);
    }
    public function show($id){
        $product = Product::findOrFail($id);
        $categories = Category::all();
        $category_id = $product->category->id;
        $images = $product->images;


        return view('admin.product.show', ['product'=> $product, 'categories'=>$categories, 'category_id' => $category_id, 'images' => $images]);
    }



    public function create(){
        $categories = Category::all();
        return view('admin.product.create', ['categories'=>$categories]);
    }
    public function store(Request $request){
        $product = new Product;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->stock_quantity = $request->stock_quantity;
        $product->category_id = $request->category_id;
        $product->save();

        if($request->hasFile('images')){
            $images = $request->file('images');
            foreach($images as $image){
                if($image->isValid()){
                    $extension = $image->extension();
                    $imageName = md5($image->getClientOriginalName() . strtotime("now")).".". $extension;
                    $image->move(public_path('img/products'), $imageName);

                    $newImage = new Image();
                    $newImage->product_id = $product->id;
                    $newImage->image = $imageName;
                    $newImage->save();
                }
            }
        }

        return redirect('admin/products')->with('msg', 'Produto criado com sucesso!');
    }

    public function update(Request $request, $id)
    {
        // Atualiza o produto no banco de dados
        $product = Product::findOrFail($id);
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->stock_quantity = $request->stock_quantity;
        $product->category_id = $request->category_id;
        $product->update(); // Atualiza o produto no banco de dados
    
        // Pega as imagens antigas associadas ao produto
        $imagensAntigas = $product->images; // Esta é uma coleção
        $images = $request->file('images'); // Novas imagens enviadas no formulário
    
        if ($images) { // Verifica se o formulário enviou imagens
            for ($i = 0; $i < count($images); $i++) {
                if ($images[$i]->isValid()) {
                    $extension = $images[$i]->extension();
                    $imageName = md5($images[$i]->getClientOriginalName() . strtotime("now")) . "." . $extension;
                    $images[$i]->move(public_path('img/products'), $imageName); // Salva a nova imagem no disco
    
                    // Atualiza ou cria uma nova imagem no banco de dados
                    $imagemAntiga = $imagensAntigas->get($i); // Usa o método 'get()' para acessar o índice da coleção
    
                    if ($imagemAntiga) { // Se houver uma imagem antiga, atualiza
                        $imagemAntiga->image = $imageName;
                        $imagemAntiga->save(); // Atualiza o registro no banco de dados
                    } else { // Caso contrário, cria uma nova entrada de imagem
                        $newImage = new Image();
                        $newImage->product_id = $product->id;
                        $newImage->image = $imageName;
                        $newImage->save();
                    }
                }
            }
        }
    
        return redirect('/admin/products')->with('msg', 'Produto atualizado com sucesso!');
    }
    
    

}

