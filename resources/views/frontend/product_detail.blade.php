@extends('layouts.site')
@section('title', 'Trang Chủ')


@section('content')

<div>

<x-slider/>
    <div>
            <!-- Product Detail Section -->
    <section class="product-detail">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="img/sp1.webp" alt="Product Image">
                </div>
                <div class="col-md-6">
                    <h4 class="fs-5 py-1">ÁO POLO PHỐI KHÓA CỔ</h4>
                    <p>
                        Hướng dẫn bảo quản sử dụng:
                        
                        Giặt, phơi và ủi bề mặt bên trong của sản phẩm.
                        
                        Tránh ủi trực tiếp lên chi tiết in
                        
                        Giặt máy chế độ nhẹ, nước lạnh.
                        
                        Không sấy nóng.
                        
                        Những sản phẩm đậm màu, giặt riêng ở 2-3 lần giặt đầu tiên.</p>
                    <div><strong class="text-danger fs-5">Giá: 399.000 <sup>đ</sup></strong></div>
                    <div><button> <a class="btn btn-sm btn-success form-control">Thêm vào giỏ hàng</a></button></div>
                </div>
            </div>
        </div>
    </section>

    </div>
</div>

@endsection
@section('header')
    <link rel="stylesheet" href="home.css">
@endsection