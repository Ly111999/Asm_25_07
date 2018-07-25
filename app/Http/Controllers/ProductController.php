<?php
/**
 * Created by PhpStorm.
 * User: LAPTOP
 * Date: 7/18/2018
 * Time: 1:59 PM
 */

namespace App\Http\Controllers;


use App\Product;
use Illuminate\Support\Facades\Input;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.product.list')->with('list_obj', $products);
}

    public function create()
    {
        return view('admin.product.form');
    }

    public function edit($id){
        $product = Product::find($id);
        if($product == null){
            return view ('404');
        }
        return view('admin.product.edit')->with('product_in_view', $product);
    }

    public function store()
    {
        $product = new Product();
        $product->name = Input::get('name');
        $product->price = Input::get('price');
        $product->image = Input::get('image');
        $product->description = Input::get('description');
        $product->categoryId = Input::get('categoryId');

        $product->save();
        $products = Product::all();
        return view('admin.product.list')->with('list_obj', $products);
    }

    public function update()
    {
        $product = Product::find(Input::get('id'));
        if($product == null){
            return view ('404');
        }
        $product->name = Input::get('name');
        $product->price = Input::get('price');
        $product->image = Input::get('image');
        $product->description = Input::get('description');
        $product->categoryId = Input::get('categoryId');

        $product->save();
        return redirect('/admin/product');
    }

    public function destroy($id)
    {
        $product = Category::find($id);
        if ($product == null) {
            return response()->json(['error' => 'not found'], 404);
        }
        $product->delete();
        return response()->json(['message' => 'Deleted'], 200);
    }

}