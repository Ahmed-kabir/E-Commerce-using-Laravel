<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;

class WelcomeController extends Controller
{
    public function index(){
        $product= Product::where('publication_status',1)->get();
                
                
        return view('frontend.main_content',['proudcts'=>$product]);
    }
    public function category($id){
        $category= Product::where('categoryId',$id)
                ->where('publication_status',1)
                ->get();
        return view('frontend.submenu',['category'=>$category]);
    }
    public function view($id){
        $product= Product::where('id',$id)
                ->where('publication_status',1)
                ->first();
        //dd($product);
        
        return view('frontend.view',['product'=>$product]);
    }
   
    }

