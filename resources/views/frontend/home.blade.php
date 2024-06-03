@extends('layouts.site')
@section('title', 'Trang Chủ')


@section('content')
@includeIf('aa')
<div>
    <x-slider />
    <div>



        <!-- New Products Section -->
        <section class="new-products">
            <h2>New Products --------------------------------------------------------------------------------------------------------------------------------------------------------------------------</h2>
            <div class="col-md-12">
                <x-product-card />
                <x-product-card />
                <x-product-card />
                <!-- Add more products as needed -->
        </section>

        <!-- Sale Products Section -->
        <section class="new-products">
            <h2>product sale -----------------------------------------------------------------------------------------------------------------------------------------------------------------------------</h2>
            <div class="col-md-12">
                <x-product-card />
                <x-product-card />
                <x-product-card />
            </div>
        </section>

        <!-- New Posts Section -->
        <section class="new-posts">
            <h3 class="tatcasp">TIN TỨC MỚI</h3>
            <x-post/>
        </section>
    </div>


    @endsection
    @section('header')
    <link rel="stylesheet" href="home.css">
    @endsection
