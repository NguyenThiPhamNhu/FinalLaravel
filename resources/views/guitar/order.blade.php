<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

	<title>Insert Product</title>
	<style>
		body {
			background-color: #ffcccc;
		}

		.orderngang {
			display: flex;
		}
	</style>
</head>

<body>
	<div class="container-fluid" style=" position: relative">
		<div class="orderngang">

			<div class="container">
				<div id="viewport">
					<!-- Content -->
					<div id="content">
						<h1>Your bill</h1>

						<form action="/guitar/index/order" method="POST" enctype="multipart/form-data">
							@csrf


							<div class="form-group">
								<label>Name</label>
								<input style="width:300px" type="text" class="form-control" name="name" placeholder="Entry ur name" value="{{old ('name')}}">
							</div>

							<div class="form-group">
								<label>Phone</label>
								<input style="width:300px" type="text" class="form-control" name="phone" placeholder="Entry phone">
							</div>

							<div class="form-group">
								<label>Address</label>
								<input style="width:300px" type="text" class="form-control" name="address" placeholder="Entry address">
							</div>

							<label for="sel1">Pay way (select one):</label>
							<select style="width:300px" class="form-control" name="pay" id="sel1">
								<option>Momo</option>
								<option>Airpay</option>
								<option>Vietcombank</option>
								<option>Viettinbank</option>
							</select>

							<label for="sel1">Discount code</label>
							<div style="display: flex;">
								<input style="width:300px" type="text" class="form-control" name="quantity" placeholder="Entry discount code">
								<button type="button" class="btn btn-warning">Áp dụng mã giảm</button>

							</div>



						</form>
						<form action="/guitar/insert/order" onclick="myFunction()" method="GET">
							<button type="submit" class="btn btn-danger">Order</button>
							<script>
								function myFunction() {
									alert("Congratution{{ Auth::user()->name }} order successfully !");
								}
							</script>
						</form>

					</div>



				</div>
			</div>

			<!-- cart -->
			<div>

				<?php
				$total = 0;
				?>
				<h3>Tổng Giỏ Hàng</h1>

					<h5><b>Tạm Tính: <?php
										foreach ($cartdata as $cart) {
											$total = $total + ($cart->new_price * $cart->quantity);
										}
										echo $total;
										?>.000.000 VND </b></h5>
					<br>
					<table class="table">
						<tr style="background-color: #fff3f5;">
							<td>Picture</td>
							<td>Name</td>
							<td>Price</td>
							<td>Quantity</td>
							<td>Do you want </td>
							<td>Total</td>
							<td></td>

						</tr>
						@foreach($cartdata as $cart)
						<tr>
							<th>
								<img style="width: 150px;height: 150px;" src="{{'/storage/'.$cart->image}}">
							</th>

							<th>{{$cart->name}}</th>
							<th>{{$cart->new_price}}000</th>

							<th><input type="number" name="" value="{{$cart->quantity}}"></th>
							<!--  -->
							<th>
								<form method="POST" action="/guitar/cart/{{$cart->id}}">
									@csrf
									@method("DELETE")
									<button type="submit" class="btn btn-danger">Delete</button>
								</form>
							</th>
							<th>{{number_format($cart->new_price * $cart->quantity) }}.000.000 VND</th>
						</tr>

						@endforeach
					</table>
					<hr>

					<!-- admin user -->




			</div>

		</div>



	</div>

</body>

</html>