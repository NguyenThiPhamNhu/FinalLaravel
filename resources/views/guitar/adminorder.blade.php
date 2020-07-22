<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<title>Guitar shop</title>
<style>
    table {
        width: 900px;
        height: 100px;
    }

    th {
        background-color: yellow;
    }

    td {
        background-color: #e1f0f5;
    }

    body {
        background-color: #fff5eb;
    }

    .show {

        display: inline-block;
        border: 2px solid black;
        height: 400px;
        width: 400px;
        margin: 20px;
    }


    #display {
        display: grid;
        grid-template-columns: 300px 300px 300px 300px;
        grid-gap: 20px;
    }

    footer {
        background: #222;
        color: #aaa;
        padding-top: 10px;
    }

    footer a {
        color: #aaa;
    }

    footer a:hover {
        color: #fff;
    }

    footer h3 {
        color: #0894d1;
        letter-spacing: 1px;
        margin: 30px 0 20px;
    }

    footer .three-column {
        overflow: hidden;
    }

    footer .three-column li {
        width: 33.3333%;
        float: left;
        padding: 5px 0;
    }

    footer .socila-list {
        overflow: hidden;
        margin: 20px 0 10px;
    }

    footer .socila-list li {
        float: left;
        margin-right: 3px;
        opacity: 0.7;
        overflow: hidden;
        border-radius: 50%;
        transition: all 0.3s ease-in-out;
    }

    footer .socila-list li:hover {
        opacity: 1;
    }

    footer .img-thumbnail {
        background: rgba(0, 0, 0, 0.2);
        border: 1px solid #444;
        margin-bottom: 5px;
    }

    footer .copyright {
        padding: 15px 0;
        background: #333;
        margin-top: 20px;
        font-size: 15px;
    }

    footer .copyright span {
        color: #0894d1;
    }

    .vertical-menu {
        width: 400px;
        height: 450px;
        overflow-y: auto;
    }

    .vertical-menu a {
        background-color: #eee;
        color: black;
        display: block;
        padding: 12px;
        text-decoration: none;
    }

    .vertical-menu a:hover {
        background-color: #ccc;
    }

    .vertical-menu a.active {
        background-color: black;
        color: white;
    }

    .paralell {
        display: flex;
    }

    div.container2 {
        border: 3px solid black;
        cursor: pointer;
        width: 500px;
        display: flex;
        flex-wrap: wrap;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    /* img {
width: 100%;
height: auto;
transition: all ease-in-out ;
} */

    .img {
        width: 300px;
        height: 225px;
        position: relative;

        overflow: hidden;
    }

    .txt {
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.52);
        position: absolute;
        bottom: 50px;
        text-align: center;
        color: white;
        padding: 10px;
        box-sizing: border-box;
        opacity: 0;
    }

    .img:hover div.txt {
        opacity: 1;
        transform: translateY(50px);
        transition: ease-in-out 0.5s;
    }

    .img:hover img {
        transform: scale(1.5);
        transition: all ease-in-out 0.5s;
    }
</style>
</head>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <h1 style="color: yellow;">Vitguitar</h1>

    &emsp;&emsp;&emsp;&emsp;

    <form class="form-inline" action="/action_page.php">
        <input class="form-control mr-sm-2" type="text" placeholder="Nhập tên sản phẩm">
        <button class="btn btn-success" type="submit"><span class="glyphicon glyphicon-search"></span>Tìm</button>
    </form>
    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;

    <form action="/auth/login" method="GET">
        <button type="submit" class="btn btn-info"><span class="glyphicon glyphicon-log-in"></span>Login</button>
    </form>
    &emsp;
    <form action="/auth/register" method="GET">
        <button type="submit" class="btn btn-info"><span class="glyphicon glyphicon-user"></span>Register</button>
    </form>
    &emsp;
    <form action="/auth/logout" method="GET">
        <button type="submit" class="btn btn-info"><span class="glyphicon glyphicon-log-out"></span>Logout</button>
    </form>
    &emsp;

</nav>




<h5>
    <a href="https://www.mayguitar.com/"><b>VITGUITAR</b></a>

    <img weight="80px" height="80px" src="https://cdn.shopify.com/s/files/1/1434/2352/products/Freshman-Ukulele-Soprano-Solid-Top-Mahogany-FU1S-with-gig-bag_2048x@2x.jpg?v=1477738660">
    &emsp;&emsp;&emsp;&emsp;
    <img weight="40px" height="40px" src="https://png.pngitem.com/pimgs/s/170-1702493_delivery-car-logo-png-download-delivery-car-png.png">
    <b>Giao hàng toàn quốc</b>


    &emsp;&emsp;&emsp;&emsp;

    <img weight="40px" height="40px" src="https://img.pngio.com/telephone-phone-icon-telephone-icon-yellow-png-png-phone-icons-phone-icon-png-920_959.png">
    <b>Hotline: 0962973782</b>

    &emsp;&emsp;&emsp;&emsp;

    <img weight="40px" height="40px" src="https://pluspng.com/img-png/best-seller-transparent-png-image-300.png">
    <b>Best seller</b>

    &emsp;&emsp;&emsp;&emsp;

    <img weight="40px" height="40px" src="https://image3.tienphong.vn/w665/Uploaded/2020/rrd_uswkxr/2020_05_02/thuong_kayh.jpg">
    <b>Friendly staff</b>

    &emsp;&emsp;&emsp;&emsp;

    <img weight="40px" height="40px" src="https://phuot247.vn/wp-content/uploads/2018/07/icon-uu-dai.png">

    <b>Huge Gift</b>

</h5>
<center>


    <header style="background-color: yellow;">

        <link href="css/home.css">
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


        <div class="na2">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <h3><b><a class="nav-link active" href="/guitar/home">Home</a></b></h3>
                </li>
                <li class="nav-item">
                    <h3><b><a class="nav-link" href="#">Product Manage</a></b></h3>
                </li>

                <li class="nav-item">
                    <h3><b><a class="nav-link" href="#">User Manage</a></b></h3>
                </li>

                <li class="nav-item">
                    <h3><b><a class="nav-link disabled" href="#">Disabled</a></b></h3>
                </li>
                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                <li>
                    <form action="/guitar/cart" method="GET">
                        <button type="submit" class="btn btn-warning"><img weight="40px" height="40px" src="data:image/png;base64,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"></span>Gio hang</button>
                    </form>

                </li>
                &emsp;&emsp;


        </div>

        </ul>
        </div>

    </header>

    <div class="paralell">

    </div>

    <body>

        <center>
            <h1>WELCOME TO VIT GUITAR SHOP</h1>
            <table border="1px;">
                <tr>
                    <th>Id</th>
                    <th>User Id</th>
                    <th>Detail</th>
                </tr>
                @foreach($orders as $order)
                <tr>
                    <td>{{$order -> id}}</td>
                    <td>{{$order -> user_id}}</td>
                    <td>{{$order -> detail}}</td>
                </tr>
                @endforeach
            </table>
        </center>

        <!-- admin user -->

        <div class="container">

            <div class="row">


            </div>

            <div class="row">
                <div class="tabs_div">
                    <ul>
                        <li>Users</li>
                        <li>Photos</li>
                        <li>Feedback</li>
                        <li>Products</li>
                        <li>Nhu Nhu Official</li>
                    </ul>
                    <div>
                        <table class="table">
                            @foreach($users as $user)
                            <form action="/guitar/adminorder/{{$user->id}}" method="post" enctype="multipart/form-data">
                                @method("PATCH")
                                @csrf

                                <tbody>
                                    <tr>
                                        <td class="success">User ID: </td>
                                        <td>{{ $user->id}}</td>
                                    </tr>
                                    <tr>
                                        <td class="success">Name: </td>
                                        <td>{{ $user->name}}</td>
                                    </tr>
                                    <tr>
                                        <td class="success">Password: </td>
                                        <td>{{ $user->password}}</td>
                                    </tr>

                                </tbody>
                                @endforeach
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
                            @foreach($guitars as $guitar)
                            <tbody>
                                <tr>
                                    <td class="success">Product ID: </td>
                                    <td>{{ $guitar->id}}</td>
                                </tr>
                                <tr>
                                    <td class="success">Image: </td>
                                    <td><img width="100px" height="100px" class="group list-group-image" src="{{'/storage/'.$guitar->image}}" alt="Card image cap"></td>
                                </tr>
                                <tr>
                                    <td class="success">Name: </td>
                                    <td>{{ $guitar->name}}</td>
                                </tr>
                                <tr>
                                    <td class="success">Type: </td>
                                    <td>{{ $guitar->typer}}</td>
                                </tr>
                                <tr>
                                    <td class="success">New Price: </td>
                                    <td>{{ $guitar->new_price}}</td>
                                </tr>

                            </tbody>
                            @endforeach
                        </table>

                    </div>
                    <div>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td class="success">Nhu Nhu Official </td>
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
                                <tr>
                                    <td class="success">Youtube Chanel: </td>
                                    <td><b><a class="nav-link" href="https://www.youtube.com/channel/UCWvwjfgeuf-BVpCkS-v80aw">Nhu Nhu Official</a></b></td>
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







    </body>

</html>