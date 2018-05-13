<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Manufecture;
use App\Product;
use DB;

class ProductController extends Controller
{
    public function addProduct(){
        $categories=Category::where('publication_status',1)->get();
        $manufecturies= Manufecture::where('publication_status',1)->get();
        return view('product.addproduct',['category'=>$categories],['manufecture'=>$manufecturies]);
    }
    public function saveProduct(Request $request){
        //dd($request->all());
        $productImage=$request->file('product_image');
        $name=$productImage->getClientOriginalName();
        $path=('public/productimage/');
        $productImage->move($path,$name);
        $imageurl=$path.$name;
        
        $product=new Product();
        $product->product_name=$request->product_name;
        $product->categoryId=$request->categoryId;
        $product->manufectureId=$request->manufectureId;
        $product->product_price=$request->product_price;
        $product->product_quantity=$request->product_quantity;
        $product->product_short_description=$request->product_short_description;
        $product->product_Long_description=$request->product_Long_description;
        $product->product_image=$imageurl;
        $product->publication_status=$request->publication_status;
        $product->save();
        return back()->with('message','data seved successsfully');
        
        
    }
    public function manageProduct(){
        //$products=Product::all();
        //return view('product.manageproduct',['product'=>$products]);
        $products=DB::table('Products')
                ->join('categories','categories.id','=','Products.categoryId')
                ->join('manufectures','manufectures.id','=','Products.manufectureId')
                 ->select('Products.id','Products.product_name','Products.product_price',
                        'Products.product_quantity','Products.publication_status',
                        'categories.category_name','manufectures.manufecture_name')
                ->get();
       return view('product.manageproduct',['product'=>$products]);
    }
    public function viewProduct($id){
        $products=DB::table('Products')
                ->join('categories','categories.id','=','Products.categoryId')
                ->join('manufectures','manufectures.id','=','Products.manufectureId')
                 ->select('Products.id','Products.product_name','Products.product_price',
                        'Products.product_quantity','Products.publication_status',
                         'Products.product_short_description','Products.product_Long_description',
                         'Products.product_image',
                        'categories.category_name','manufectures.manufecture_name')
                ->where('Products.id',$id)
                ->first();
        //echo'<pre>';
        //print_r($products);
        //sexit();
                
       return view('product.viewProduct',['product'=>$products]);
    }
    public function editProduct($id){
        $category= Category::where('publication_status',1)->get();
        $manufecture= Manufecture::where('publication_status',1)->get();
        $productById= Product::where('id',$id)->first();
        return view('product.editProduct',['category'=>$category,'manufecture'=>$manufecture,'productById'=>$productById]);
    }
    public function updateProduct(Request $request){
        $imageurl=$this->chkimage($request);
        
         $product= Product::find($request->productId);
        $product->product_name=$request->product_name;
        $product->categoryId=$request->categoryId;
        $product->manufectureId=$request->manufectureId;
        $product->product_price=$request->product_price;
        $product->product_quantity=$request->product_quantity;
        $product->product_short_description=$request->product_short_description;
        $product->product_Long_description=$request->product_Long_description;
        $product->product_image=$imageurl;
        $product->publication_status=$request->publication_status;
        $product->save();
        return back()->with('message','data updated successsfully');
        //return $imgurl;
        //exit();
    }
    private function chkimage($request){
        $productbyid= Product::where('id',$request->productId)->first();
        $productimage=$request->file('product_image');
        if($productimage){
            unlink($productbyid->product_image);
            $name=$productimage->getClientOriginalName();
            $path='public/productimage/';
            $productimage->move($path,$name);
            $imageurl=$path.$name;
            
        }
        else{
            $imageurl=$productbyid->product_image;
        }
        return $imageurl;
    }
    public function deleteProduct($id){
        $product= Product::where('id',$id);
        $product->delete();
        return back()->with('message','data removed successfully');
        
    }
}
