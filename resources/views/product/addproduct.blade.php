@extends('admin.dashboard')
@section('main')
<head>
 <h3 class="text-center text-success"></h3>
</head>

 
<body>
   
    
  {!!Form::open(['url'=>'/product/store','method'=>'POST','enctype'=>'multipart/form-data'])!!}
  
  <h3 class="text-success text-center">{{Session::get('message')}}</h3>
 
        <div class="form-group">
            <label for="product">Product Name</label>
            <input id="product_name" name="product_name" class="form-control" type="text">
        </div>
  
        <div class="form-group">
            <label for="status">Category Name</label>
            <select  name="categoryId" class="form-control">
                <option>Select Category Name</option>
                @foreach($category as $categories)
                <option value="{{$categories->id}}">{{$categories->category_name}}</option>
                @endforeach
            </select>
        </div>
  
        <div class="form-group">
            <label for="status">Manufecture Name</label>
            <select  name="manufectureId" class="form-control">
                <option>Select Manufecture Name</option>
                @foreach($manufecture as $manufecture)
                <option value="{{$manufecture->id}}">{{$manufecture->manufecture_name}}</option>
                @endforeach
            </select>
        </div>
            <div class="form-group">
            <label for="product">Product Price</label>
            <input id="product_price" name="product_price" class="form-control" type="number">
        </div>
            
            <div class="form-group">
            <label for="product">Product Quantity</label>
            <input id="product_quantity" name="product_quantity" class="form-control" type="number">
        </div>
        
        <div class="form-group">
            <label for="product">Product Short Description</label>
            <textarea id="product_short_description" name="product_short_description" class="form-control" rows="3"></textarea>
        </div>
  
        <div class="form-group">
            <label for="product">Product Long Description</label>
            <textarea id="product_Long_description" name="product_Long_description" class="form-control" rows="5"></textarea>
        </div>
        <div class="form-group">
            <label for="productimage">Product Image</label>
            <input id="product_image" name="product_image" class="form-control" type="file" accept="image/*">
        </div>
        <div class="form-group">
            <label for="status">Publication status</label>
            <select id="publication_status" name="publication_status" class="form-control">
                <option value="">Select one option</option>
                <option value="1">Published</option>
                <option value="0">Unpublished</option>
            </select>
        </div>
        
        <button type="submit" class="btn btn-primary">Save Product Info</button>
         {!!Form::close()!!}
      
</body>

</html>
@endsection