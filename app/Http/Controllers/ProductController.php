<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    public function index(){

        $pro=Product::orderBy('id','DESC')->paginate();
        return view('products.index', compact('pro'));
    }

    public function create(){
        return view('products.create');
    }

    //guardamos el producto con validacion
    public function store(ProductRequest $request){
        $producto=new Product;

       $producto->name=$request->name;
       $producto->short=$request->short;
       $producto->body=$request->body;

       $producto->save();

       return redirect()->route('products.index')
       ->with('info' , 'El producto fue guardado');

    }
    


    public function edit($id)
    {
        $pro=Product::find($id);
        return view('products.edit', compact('pro'));
    }

    //con esto actualizamos y validamos
    public function update(ProductRequest $request , $id){
       // return $request;  verificamos los productos
       $producto=Product::find($id);
       $producto->name=$request->name;
       $producto->short=$request->short;
       $producto->body=$request->body;

       $producto->save();

       return redirect()->route('products.index')
       ->with('info' , 'El producto fue actualizado');



    }

    public function show($id){
        $pro=Product::find($id);
        return view('products.show', compact('pro'));
    }

    public function destroy($id)
    {
        $pro=Product::find($id);
        $pro->delete();

        return back()->with('info','El producto fue Eliminado');

    }
}
