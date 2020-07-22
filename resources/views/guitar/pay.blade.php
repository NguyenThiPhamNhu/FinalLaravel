
<center> <h1>WELCOME TO VIT GUITAR SHOP</h1>
        <table border="1px;">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Image</th>
                <th>Type</th>
                <th>Quantity</th> 
            </tr>

@foreach($carts as $cart)
<tr>
<td>{{$cart->inforProduct->name}}</td>
<td><img src="/storage/{{$cart->inforProduct->image}}" width="100px;" height="100px;"></td>
<td>{{$cart->inforProduct->new_price}}</td>
<td>{{$cart->quantity}}</td>
<td>{{$cart->inforProduct->newprice * $cart->quantity}}</td>
<?php
$total = $total + $cart->inforProduct->new_price * $cart->quantity;
?>
</tr>
@endforeach
</table>
    </center>
