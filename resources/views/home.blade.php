@extends('layouts.app')

@section('content')
<style>
    /* body {
        background-image: url("https://api.wecode.vn/Uploads/origin/goi-y-5-cach-the-hien-trang-404-error-hieu-qua-nhat-20180820202302323.jpg");
        background-size: 1210px;

    } */
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">VIT GUITAR SHOP</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    You are logged in!
                </div>
                <form action="/guitar/home" method="GET">
                    <button type="submit" class="btn btn-danger">Home</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection