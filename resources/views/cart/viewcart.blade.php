@extends('frontend.welcome')
@section('kabir')

<div class="page-head">
    <div class="container">
        <h3>Check Out</h3>
    </div>
</div>
<!-- //banner -->
<!-- check out -->
<div class="checkout">
    <div class="container">
        <h3>My Shopping Bag</h3>
        {{Session::get('message')}}
        <div class="table-responsive checkout-right animated wow slideInUp" data-wow-delay=".5s">
            <table class="timetable_sub">
                <thead>
                    <tr>
                        <th>Remove</th>
                        <th>Product Image</th>
                        <th>Quantity</th>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Sub Total</th>
                    </tr>
                </thead>
                <?php $total=0;
                ?>
                @foreach($cartprodutcts as $cartprodutct)
                <tr class="rem1">
                    <td><a href="{{url('/delete/cart/'.$cartprodutct->rowId)}}">Remove</a></td>
                    <!--<td class="invert-image"><a href="single.html"><img src="{{asset('$cartprodutct->image')}}" alt=" " class="img-responsive" /></a></td>-->
                    <td <img src="{{asset($cartprodutct->image)}}" alt=""> </td>
                    
                    <td class="invert">{{$cartprodutct->qty}}</td>
                   
                   
                    <!--<input type="hidden" value="{{$cartprodutct->rowId}}" name="rowId">-->
                    <!--<input type="submit" value="update">-->
                    
                    
                    
                    
                    <td class="invert">{{$cartprodutct->name}}</td>
                    <td class="invert">TK{{$cartprodutct->price}}</td>
                    <?php 
                    
                    
                    $subTotal=$cartprodutct->qty*$cartprodutct->price;
                    
                    ?>
                    <td>{{$subTotal}}</td>
                </tr>
                <?php
               
                $total=$total+$subTotal;
                ?>
                @endforeach
                
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Total Price</td>
                    <td>{{$total}}TK</td>
                    
                </tr>
                

                <!--quantity-->
                
                <!--quantity-->
            </table>
        </div>
        <div class="checkout-left">	

            <div class="checkout-right-basket animated wow slideInRight" data-wow-delay=".5s">
                <a href="{{url('/')}}"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>Back To Shopping</a>
            </div>
            
            
            <div class="checkout-right-basket animated wow slideInRight" data-wow-delay=".5s">
                <a href="{{url('/check-out')}}"><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>Checkout</a>
            </div>
            
            <div class="clearfix"> </div>
        </div>
        
    </div>
</div>

@endsection()