@extends('admin.layouts.master')
@section('title')
    Thêm mới danh mục
@endsection
@section('breadcrumb')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Thêm mới danh mục</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/admin">Trang chủ</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.get.list.category') }}">Danh mục</a></li>
                <li class="breadcrumb-item active">Thêm mới danh mục</li>
            </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
@endsection

@section('admin.content')
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Thêm mới danh mục</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" method="post">
                    @csrf
                    <div class="card-body">

                        <div class="form-group">
                            <label>Danh mục cha</label>
                            <select class="form-control" name="cat_parent_id">
                                <option value="0">Danh mục cha</option>
                                {{ cate_parent($categories) }}
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="cat_name">Tên danh mục</label>
                            <input type="text" class="form-control" name="cat_name" id="cat_name" value="{{ old('cat_name') }}" placeholder="Tên danh mục">
                            @if ($errors->has('cat_name'))
                                <span class="text-danger">
                                    {{ $errors->first('cat_name') }}
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="cat_meta_keywords">Từ khóa seo</label>
                            <input type="text" class="form-control" name="cat_meta_keywords" id="cat_meta_keywords" value="{{ old('cat_meta_keywords') }}" placeholder="Từ khóa seo">
                        </div>
                        <div class="form-group">
                            <label for="cat_meta_description">Mô tả seo</label>
                            <input type="text" class="form-control" name="cat_meta_description" value="{{ old('cat_meta_description') }}" id="cat_meta_description" placeholder="Mô tả seo">
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="cat_publish" id="activeCat" checked>
                            <label class="form-check-label" for="activeCat">Hiển thị</label>
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Thêm mới</button>
                    </div>
                </form>
            </div>
            <!-- /.card -->

        </div>
        <!--/.col (left) -->
    </div>
@endsection
