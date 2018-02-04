<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductImage;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index(){
        $products = Product::paginate(10);
        return view('admin.products.index')->with(compact('products')); //listado

    }

    public function create(){
        return view('admin.products.create'); //formulario de registro
    }

    public function store(Request $request){
        //registrar el nuevo producto en la base de datos
        //dd($request->all());
        $product = new Product();
        $product->name=$request->input('name');
        $product->description=$request->input('description');
        $product->price=$request->input('price');
        $product->long_description=$request->input('long_description');
        $product->save(); // insert del objeto

        return redirect('/admin/products');
    }

    public function edit($id){

        $product = Product::find($id);
        return view('admin.products.edit')->with(compact('product')); //formulario de registro
    }

    public function update(Request $request,$id){
        //actualizar la informacion del producto en la base de datos
        //dd($request->all());
        $product = Product::find($id);
        $product->name=$request->input('name');
        $product->description=$request->input('description');
        $product->price=$request->input('price');
        $product->long_description=$request->input('long_description');
        $product->save(); // insert del objeto

        return redirect('/admin/products');
    }

    public function destroy($id){
        ProductImage::where('product_id', $id)->delete();

        $product = Product::find($id);
        $product->delete(); // delete del objeto

        return back();
    }
}
