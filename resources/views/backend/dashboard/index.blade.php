@extends('layouts.admin')
@section('title', 'Trang Chủ')


@section('content')
<div>
 <div class="content-wrapper">
    <!-- CONTENT -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Blank Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.dashboard.index') }}">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div>
    </section>
    <section class="content">
      <div class="card">
        <div class="card-header">
          <div class="row">
            <div class="col-12 text-right">
              <i class="fas fa-plus"></i>thêm
            </div>
          </div>
        </div>
        <div class="card-body">
          <table class="table table-bordered table-hover table-striped">
          <thead>
          <tr>
          <th class="text">
                #
          </th>
          <th>
          Hình
          </th>
            <th>
          Tên sản phẩm
          </th>
            <th>
          Danh mục
          </th>
            <th>
          Thương hiệu
          </th>
            <th>
          Chức năng
          </th>
            <th>
          id
          </th>
          </tr>
          </thead>
          <tbody>
          </tbody>
          </table>
        </div>
      </div>
    </section>
    <!-- /.CONTENT -->
  </div>
</div>

@endsection
@section('header')
<link rel="stylesheet" href="home.css">
@endsection