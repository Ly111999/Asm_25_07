<?php
/**
 * Created by PhpStorm.
 * User: LAPTOP
 * Date: 7/20/2018
 * Time: 3:35 PM
 */

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Support\Facades\Input;

class CategoryController extends Controller
{
    public function index()
    {
        $obj = Category::all();
        return view('admin.category.list')->with('list_obj', $obj);
    }

    public function create()
    {
        return view('admin.category.form');
    }

    public function edit($id){
        $obj = Category::find($id);
        if($obj == null){
            return view ('404');
        }
        return view('admin.category.edit')->with('obj_in_view', $obj);
    }

    public function store()
    {
        $obj = new Category();
        $obj->name = Input::get('name');
        $obj->description = Input::get('description');
        $obj->image = Input::get('image');

        $obj->save();
        $obj = Category::all();
        return view('admin.category.list')->with('list_obj', $obj);
    }

    public function update()
    {
        $obj = Category::find(Input::get('id'));
        if($obj == null){
            return view ('404');
        }
        $obj->name = Input::get('name');
        $obj->image = Input::get('image');
        $obj->description = Input::get('description');
        $obj->save();
        return redirect('/admin/category');
    }

    public function destroy($id)
    {
        $obj = Category::find($id);
        if ($obj == null) {
            return response()->json(['error' => 'not found'], 404);
        }
        $obj->delete();
        return response()->json(['message' => 'Deleted'], 200);
    }
}