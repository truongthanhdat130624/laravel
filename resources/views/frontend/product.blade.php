@extends('layouts.site')
@section('title', 'Trang Chủ')


@section('content')
<div>
    <x-slider />
    <div>


        <h1 class="tatcasp">Tất cả sản phẩm</h1>
        <!-- New Products Section -->
        <section class="new-products">
            <h2></h2>
            <div class="col-md-12">
                <x-product-card />
                <x-product-card />
                <x-product-card />

            </div>
        </section>

        <!-- Sale Products Section -->
        <section class="new-products">
            <h2></h2>
            <div class="col-md-12">
                <x-product-card />
                <x-product-card />
                <x-product-card />
            </div>
        </section>
        <section class="new-products">
            <h2></h2>
            <div class="col-md-12">
                <x-product-card />
                <x-product-card />
                <x-product-card />
            </div>
        </section>
        <!-- New Posts Section -->


        <!-- Footer Section -->


    </div>
</div>
@endsection
@section('header')
<link rel="stylesheet" href="home.css">
@endsection
