@extends('admin.dashboard')
@section('main')
<hr/>

<table class="table table-bordered table-hover">

<tr>
    <th> product Id </th>
    <th> {{$product->id}} </th>
    
</tr>
<tr>
    <th> product name </th>
    <th> {{$product->product_name}} </th>
    
</tr>
<tr>
    <th> category name </th>
    <th> {{$product->category_name}} </th>
    
</tr>
<tr>
    <th> Manufecture name </th>
    <th> {{$product->manufecture_name}} </th>
    
</tr>
<tr>
    <th> product PRice </th>
    <th> {{$product->product_price}} </th>
    
</tr>
<tr>
    <th> product Quantity </th>
    <th> {{$product->product_quantity}} </th>
    
</tr>
<tr>
    <th> product short description </th>
    <th></th>
    
</tr>
<tr>
    <th> product Long description </th>
    <th></th>
    
</tr>
<tr>
    <th> product Image  </th>
    <th> <img src="{{asset('../$product->product_image')}}"alt="{{$product->product_name}}"> </th>
    
</tr>
<tr>
    <th> Publication Status </th>
    <th> {{$product->publication_status ==1?'Published': 'UnPublished'}} </th>
    
</tr>
</table>



@endsection