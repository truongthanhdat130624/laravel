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
            <h1>Thêm mới menu</h1>
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
                    <a class="btn btn-sm btn-danger" href="{{ route('admin.menu.index') }}">
                        <i class="fas fa-arrow-left"></i> Quay lại
                    </a>
                </div>
            </div>
            </div>
                <tbody>
                    <div>
                        <div class="form-group">
                            <label class="name">Tên Menu: *</label>
                            <input type="text" class="form-control" name="name" placeholder="Nhập Menu" name="fname"/>
                        </div>
                        <div class="form-group">
                            <label class="link">Đường dẫn/Link: *</label>
                            <input type="text" class="form-control" name="link" placeholder="Nhập đường dẫn/link" name="fname"/>
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