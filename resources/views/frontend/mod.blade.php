@extends('layouts.site')
@section('title', 'Trang Chủ')


@section('content')
<div>
        <nav class="menu">
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="product">Products</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="contact">Contact</a></li>
                <li><a href="#">Product Categories</a>
                    <ul>
                        <li><a href="#">Category 1</a></li>
                        <li><a href="#">Category 2</a></li>
                        <li><a href="#">Category 3</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
</div>
@endsection
@section('header')
    <link rel="stylesheet" href="home.css">
@endsection
