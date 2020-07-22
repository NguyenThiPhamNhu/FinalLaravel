<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<title>Vit Guitar Shop</title>
</head>
<div>
	@include('partials\header')
</div>

<body>
	<div class="container-fluid mt-3">
		<center>
			<h1 class="mb-2">Detail </h1>
		</center>

		<!-- Specifications -->
		<div class="container">
			<div class="row">
				<div class="col-md-8 offset-md-2">
					<div class="row" id="gradient">
						<div class="col-md-4">
							<form action="/guitar/detail/{{$dbedit->id}}" method="post" enctype="multipart/form-data">
								@method("PATCH")
								@csrf
								<img width="200px" class="group list-group-image" src="{{'/storage/'.$dbedit->image}}" title="Vit Guitar shop" alt="Card image cap">
						</div>
						<div class="col-md-8" id="overview">
							<div class="row">
								<div class="col-xs-6 col-md-6">
									<ul class="pb-product-details-ul">
										<li><span class="fa fa-calendar">&nbsp;Released 2016, March</span></li>
										<li>&nbsp;{{ $dbedit->name}}</span></li>
										<li>&nbsp;{{ $dbedit->typer}}</span></li>
										<li><span class="fa fa-microchip">&nbsp;Specifications:{{ $dbedit->specifications}}</span></li>
										<li><span class="fa fa-microchip">&nbsp;Old Price:{{ $dbedit->old_price}}.000.000$</span></li>
										<li><span class="fa fa-microchip">&nbsp;New Price:{{ $dbedit->new_price}}.000.000 $</span></li>
										<li><span class="fa fa-microchip">&nbsp;Made In:{{ $dbedit->made_in}}</span></li>
									</ul>
								</div>
								<div class="col-xs-3 col-md-3 text-xs-center" id="hits">
									<span class="fa fa-bar-chart">&nbsp;90% Votes</span>
									<p>22,010,155 Like</p>
								</div>
								<div class="col-xs-3 col-md-3 text-xs-center" id="fan">
									<a href="#"><span class="fa fa-heart">&nbsp;VIT </span></a>
									<p>VIT BECOME A FAMOUS TRADEMARK </p>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-3 col-md-3 pb-product-details-fa">
									<span class="fas fa-thumbs-up"></span>
									<h3><strong>Key</strong></h3>
									<p> 14-17 keys</p>
								</div>
								<div class="col-xs-3 col-md-3 pb-product-details-fa">
									<span class="fas fa-thumbs-up"></span>
									<h3><strong>Length</strong></h3>
									<p>
										total length 56-58 cm</p>
								</div>
								<div class="col-xs-3 col-md-3 pb-product-details-fa">
									<span class="fas fa-thumbs-up"></span>
									<h3><strong>Size</strong></h3>
									<p>32 inches</p>
								</div>
								<div class="col-xs-3 col-md-3 pb-product-details-fa">
									<span class="fas fa-thumbs-up"></span>
									<h3><strong>Line</strong></h3>
									<p>4 Lines</p>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="tabs_div">
							<ul>
								<li>Display</li>
								<li>Photo</li>
								<li>Feedback</li>
								<li>Accessories included</li>
								<li>About us</li>
							</ul>
							<div>
								<table class="table">
									<tbody>
										<tr>
											<td class="success">Physical size: </td>
											<td>32 inches</td>
										</tr>
										<tr>
											<td class="success">Name: </td>
											<td>{{ $dbedit->name}}</td>
										</tr>
										<tr>
											<td class="success">Quantity: </td>
											<td>{{ $dbedit->quantity}}</td>
										</tr>
										<tr>
											<td class="success">Type: </td>
											<td>{{ $dbedit->typer}}</td>
										</tr>
										<tr>
											<td class="success">Specifications: </td>
											<td>{{ $dbedit->specifications}}%</td>
										</tr>
										<tr>
											<td class="success">Old price: </td>
											<td>{{ $dbedit->specifications}}Modern technology</td>
										</tr>
									</tbody>
								</table>
							</div>
							<div>
								<table class="table">
									<tbody>
										<tr>
											<td class="success">Photo 1: </td>
											<td><img width="70px" class="group list-group-image" src="https://vn-live-01.slatic.net/original/4a6e94a7ecd824c156dd28b2fe6de33b.jpg" title="Vit Guitar shop" alt="Card image cap"></td>
											<td><img width="70px" class="group list-group-image" src="https://scdn.thitruongsi.com/image/cached/size/w1280-h0/img/product/2017/08/03/0cd43560-77fb-11e7-887e-c5a070c79e77.jpg" title="Vit Guitar shop" alt="Card image cap"></td>
											<td><img width="70px" class="group list-group-image" src="https://lindoguitars.com/wp-content/uploads/2016/04/lindo-little-feeling-concert-electro-acoustic-ukulele-1.jpg" title="Vit Guitar shop" alt="Card image cap"></td>
										</tr>
										<tr>
											<td class="success">Photo 2: </td>
											<td><img width="70px" class="group list-group-image" src="https://product.hstatic.net/1000323804/product/andrew_master.jpg" title="Vit Guitar shop" alt="Card image cap"></td>
											<td><img width="70px" class="group list-group-image" src="https://cdn.shopify.com/s/files/1/0806/0141/products/KA-CSTP-BK_grande.png?v=1571914446" title="Vit Guitar shop" alt="Card image cap"></td>
											<td><img width="70px" class="group list-group-image" src="https://www.429records.com/wp-content/uploads/2018/11/Ukulele-Straps.jpg" title="Vit Guitar shop" alt="Card image cap"></td>
										</tr>
										<tr>
											<td class="success">Photo 3: </td>
											<td><img width="70px" class="group list-group-image" src="https://lindoguitars.com/wp-content/uploads/2016/04/lindo-little-feeling-concert-electro-acoustic-ukulele-1.jpg" title="Vit Guitar shop" alt="Card image cap"></td>
											<td><img width="70px" class="group list-group-image" src="https://i5.walmartimages.com/asr/2570d8e4-0337-4234-97d6-5c2e6b3db242_1.e45f8ebee06a3995c2a07d7727ba754b.jpeg?odnWidth=612&odnHeight=612&odnBg=ffffff" title="Vit Guitar shop" alt="Card image cap"></td>
											<td><img width="70px" class="group list-group-image" src="https://images.vat19.com/covers/large/populele.jpg" title="Vit Guitar shop" alt="Card image cap"></td>
										</tr>
										
										<tr>
											<td class="success">Made in: </td>
											<td>{{ $dbedit->made_in}} with modern technology and perfect quanlity</td>
										</tr>
										
									</tbody>
								</table>
							</div>
							<div>
								<table class="table">
									<tbody>
										<tr>
											<td class="success">Nhu Nguyen: </td>
											<td> Oh man Perfect!</td>
										</tr>
										<tr>
											<td class="success">Manh Pham: </td>
											<td>Má ưi đẹp kinh bay ^^!</td>
										</tr>
										<tr>
											<td class="success">Thien Ly </td>
											<td>Good Good Good </td>
										</tr>
										<tr>
											<td class="success">Huan Rose: </td>
											<td>Vippro</td>
										</tr>
										<tr>
											<td class="success">Tran Duc Bo: </td>
											<td>Mèo Méo Meo Mèo Meo</td>
										</tr>
										<tr>
											<td class="success">Banh Bao Boss: </td>
											<td>Oh Man, It sounds great</td>
										</tr>
									</tbody>
								</table>
							</div>
							<div>
								<table class="table">
									<tbody>
										<tr>
											<td class="success">Holster: </td>
											<td>200.000 $</td>
										</tr>
										<tr>
											<td class="success">Pic fracture: </td>
											<td>100.000 - 200.000 $</td>
										</tr>
										<tr>
											<td class="success">Guitar/Uku String: </td>
											<td>300.000 $</td>
										</tr>
									</tbody>
								</table>
							</div>
							<div>
								<table class="table">
									<tbody>
										<tr>
											<td class="success">CEO Nhu Pham </td>
											<td>Nguyen Thi Pham Nhu from Quang Nam Province aka an CEO of VIT Group</td>
										</tr>
										<tr>
											<td class="success">VIT GUITAR SHOP: </td>
											<td>VIT established on June 20, 2020, with customers' trust through monthly sales. 50% of customers are from Da Nang</td>
										</tr>
										<tr>
											<td class="success">Headquarters: </td>
											<td>99 To Hien Thanh - Son - Tra Danang</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- you need to include the shieldui css and js assets in order for the charts to work -->
		<link rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/light-glow/all.min.css" />
		<script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>

		<script type="text/javascript">
			jQuery(function($) {
				$(".tabs_div").shieldTabs();
			});
		</script>

		<style>
			.pb-product-details-ul {
				list-style-type: none;
				padding-left: 0;
				color: black;
			}

			.pb-product-details-ul>li {
				padding-bottom: 5px;
				font-size: 15px;
			}

			#gradient {
				/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#feffff+0,ddf1f9+31,a0d8ef+62 */
				background: #feffff;
				/* Old browsers */
				background: -moz-linear-gradient(left, #feffff 0%, #ddf1f9 31%, #a0d8ef 62%);
				/* FF3.6-15 */
				background: -webkit-linear-gradient(left, #feffff 0%, #ddf1f9 31%, #a0d8ef 62%);
				/* Chrome10-25,Safari5.1-6 */
				background: linear-gradient(to right, #feffff 0%, #ddf1f9 31%, #a0d8ef 62%);
				/* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
				filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#feffff', endColorstr='#a0d8ef', GradientType=1);
				/* IE6-9 */
				border: 1px solid #f2f2f2;
				padding: 20px;
			}

			#hits {
				border-right: 1px solid white;
				border-left: 1px solid white;
				vertical-align: middle;
				padding-top: 15px;
				font-size: 17px;
				color: white;
			}

			#fan {
				vertical-align: middle;
				padding-top: 15px;
				font-size: 17px;
				color: white;
			}

			.pb-product-details-fa>span {
				padding-top: 20px;
			}
		</style>

	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<div>
		@include('partials\footer')
	</div>w
</body>






</html>