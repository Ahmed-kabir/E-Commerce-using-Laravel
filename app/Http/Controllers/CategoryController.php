<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function addcategory(){
        return view('category.add_category');
    }
    public function savecategory(Request $request){
        $category=new Category();
        $category->category_name=$request->category_name;
        $category->category_description=$request->category_description;
        $category->publication_status=$request->publication_status;
        $category->save();
        return back()->with('message','data saved successfully');
    }
    public function managecategory(){
        
        $categories=Category::all();
        return view('category.manageCategory',['categories'=>$categories]);
    }
    public function editcategory($id){
        $categoryById=Category::where('id',$id)->first();
        return view('category.editCategory',['categoryById'=>$categoryById]);
        
    }
    public function updatecategory(Request $request){
    //dd($request->all());
    $category=Category::find($request->categoryId);
    $category->category_name=$request->category_name;
    $category->category_description=$request->category_description;
    $category->publication_status=$request->publication_status;
    $category->save();
    return back()->with('message','data updated succesfully');
    }
    public function deletecategory($id){
        $category= Category::where('id',$id);
        $category->delete();
        return back()->with('message','data deleted successfully');
        
    }
}
