@extends('admin.dashboard')
@section('main')
<head>
 <h3 class="text-center text-success"></h3>
</head>

 
<body>
   
    
  {!!Form::open(['url'=>'/update/product','method'=>'POST','enctype'=>'multipart/form-data','name'=>'ediproductForm'])!!}
  
  <h3 class="text-success text-center">{{Session::get('message')}}</h3>
 
        <div class="form-group">
            <label for="product">Product Name</label>
            <input id="product_name" value="{{$productById->product_name}}" name="product_name" class="form-control" type="text">
            <input id="productId" value="{{$productById->id}}" name="productId" class="form-control" type="hidden">
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
            <input id="product_price" value="{{$productById->product_price}}" name="product_price" class="form-control" type="number">
        </div>
            
            <div class="form-group">
            <label for="product">Product Quantity</label>
            <input id="product_quantity" value="{{$productById->product_quantity}}" name="product_quantity" class="form-control" type="number">
        </div>
       
        <div class="form-group">
            <label for="product">Product Short description</label>
            <input id="product_short_description" value="{{$productById->product_short_description}}" name="product_short_description" class="form-control" type="text">
        </div>
  
        <div class="form-group">
            <label for="product">Product Short description</label>
            <input id="product_Long_description" value="{{$productById->product_Long_description}}" name="product_Long_description" class="form-control" type="text">
        </div>
        <div class="form-group">
            <label for="productimage">Product Image</label>
            <th> <img src="{{asset($productById->product_image)}}"alt="{{$productById->product_name}}"width="200" height="200"> </th>
            <input id="product_image" value="{{$productById->product_image}}" name="product_image" class="form-control"accept="image/*" type="file">
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
<script>
  document.forms['ediproductForm'].elements['publication_status'].value={{$productById->publication_status}}
  document.forms['ediproductForm'].elements['categoryId'].value={{$productById->categoryId}}
  document.forms['ediproductForm'].elements['manufectureId'].value={{$productById->manufectureId}}
  


</script>

</html>
@endsection