@extends('frontend.welcome')
@section('kabir')


<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">
    <head> 



    </head>
    <body>
        <div class="container">
            <div class="row main">
                <div class="panel-heading">
                    <div class="panel-title text-center">
                        <h1 class="title">Cofirmation Form</h1>
                        <hr />
                    </div>
                </div> 
                <div class="main-login main-center">
                    <h3 class="text-success text-center">{{Session::get('message')}}</h3>
                    {!! Form::open(['url'=>'/order/confirm','method'=>'POST']) !!}
                    

                        <div class="form-group">
                            <label for="name" class="cols-sm-2 control-label">Your Name</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="name" id="name"  placeholder="Enter your Name"/>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="cols-sm-2 control-label">Your Email</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="email" id="email"  placeholder="Enter your Email"/>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="comment">Address</label>
                            <textarea class="form-control" rows="5" name="address" id="comment"></textarea>
                        </div> 

                        <div class="form-group">
                            <label for="password" class="cols-sm-2 control-label">Phone Number</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                    <input type="number" class="form-control" name="number" id="password"  placeholder="Enter your phone number"/>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="status">Payment Type</label>
                            <select id="publication_status" name="payment_type" class="form-control">
                                <option value="">Select one option</option>
                                <option value="1">Cash</option>
                                <option value="0">Card</option>
                            </select>
                        </div>

                        <div class="form-group ">
                            <button type="submit" class="btn btn-primary btn-lg btn-block login-button">Place your Order</button>
                        </div>
                        {!!Form::close()!!}
                    </form
                </div>
            </div>
        </div>


    </body>
</html>

@endsection