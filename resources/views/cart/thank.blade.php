@extends('frontend.welcome')
@section('kabir')
<div class="jumbotron text-xs-center">
  <h1 class="display-3">Thank You!</h1>
  <p class="lead"><strong>Please check your email for further instructions,We will contact you soon; .</strong> </p>
  <hr>
  <p>
    Having trouble? <a href="">Contact us</a>
  </p>
  <p class="lead">
    <a class="btn btn-primary btn-sm" href="{{url('/')}}" role="button">Continue to homepage</a>
  </p>
</div>
@endsection