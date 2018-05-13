@extends('admin.dashboard')
@section('main')
<head>
 <h3 class="text-center text-success"></h3>
</head>

 
<body>
   
    
  {!!Form::open(['url'=>'/save-category','method'=>'POST'])!!}
  <h3 class="text-success text-center">{{Session::get('message')}}</h3>
        <div class="form-group">
            <label for="category">Category Name</label>
            <input id="category_name" name="category_name" class="form-control" type="text">
        </div>
        <div class="form-group">
            <label for="categoryDescription">Category Description</label>
            <textarea id="ccategory_description" name="category_description" class="form-control" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="status">Publication status</label>
            <select id="publication_status" name="publication_status" class="form-control">
                <option value="">Select one option</option>
                <option value="1">Published</option>
                <option value="0">Unpublished</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
         {!!Form::close()!!}
      
</body>

</html>
@endsection