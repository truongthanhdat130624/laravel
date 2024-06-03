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
            <h1>Thêm mới bài viết</h1>
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
                    <a class="btn btn-sm btn-danger" href="{{ route('admin.post.index') }}">
                        <i class="fas fa-arrow-left"></i> Quay lại
                    </a>
                </div>
            </div>
            </div>
                <tbody>
                    <div>
                        <div class="form-group">
                            <label class="titel">Tên bài viết: *</label>
                            <input type="text" class="form-control" name="titel" placeholder="Nhập tên bài viết" name="fname"/>
                        </div>
                        <div class="form-group">
                            <label class="category_name">Chủ đề: *</label>
                            <input type="text" class="form-control" name="category_name" placeholder="Nhập chủ đề" name="fname"/>
                        </div>
                        <div class="form-group">
                            <label class="detail">Kiểu bài viết: *</label>
                            <input type="text" class="form-control" name="detail" placeholder="Nhập kiểu bài viết" name="fname"/>
                        </div>
                        <div class="form-group">
                            <label  for="image"  class="text-main">  Hình ảnh sản phẩm(*)</label>
                            <input  class="form-control"  type="file"  name="image"/><br/>
                        </div>
                        <div class="mb-3">
                            <button  class="btn btn-success"  type="submit"  id="submit"  name="submit">Lưu</button>
                        </div>
                    </div>
                </tbody>
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