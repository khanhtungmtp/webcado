@extends('admin.layouts.master')
@section('title')
    Thêm mới bài viết
@endsection
@section('breadcrumb')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Thêm mới bài viết</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/admin">Trang chủ</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.get.list.news') }}">Bài viết</a></li>
                <li class="breadcrumb-item active">Thêm mới</li>
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
                    <h3 class="card-title">Thêm mới bài viết</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Tiêu đề bài viết</label>
                                    <input type="text" class="form-control" name="new_title" id="new_title"
                                           value="{{ old('new_title') }}" placeholder="Tiêu đề bài viết">
                                    @if ($errors->has('new_title'))
                                        <span class="text-danger">
                                            {{ $errors->first('new_title') }}
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="new_description">Mô tả ngắn</label>
                                    <textarea name="new_description" id="new_description" class="form-control">{{ old('new_description') }}</textarea>
                                    @if ($errors->has('new_description'))
                                        <span class="text-danger">
                                            {{ $errors->first('new_description') }}
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="content">Nội dung bài viết</label>
                                    <textarea name="new_content" id="input_new_content" class="form-control">{{ old('new_content') }}</textarea>
                                    @if ($errors->has('new_content'))
                                        <span class="text-danger">
                                            {{ $errors->first('new_content') }}
                                        </span>
                                    @endif
                                </div>

                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="new_publish" id="activeCat"
                                           checked>
                                    <label class="form-check-label" for="activeCat">Hiển thị</label>
                                </div>

                            </div>
                            <!-- /.card-body -->
                        </div>
                        <div class="col-sm-4">
                            <div class="card-body">

                                <div class="form-group">
                                    <label for="cat_id">Loại danh mục</label>
                                    <select name="cat_id" id="" class="form-control">
                                        <option value="">--Loại danh mục--</option>
                                        {{ cate_parent($categories) }}
                                    </select>
                                    @if ($errors->has('cat_id'))
                                        <span class="text-danger">
                                            {{ $errors->first('cat_id') }}
                                        </span>
                                    @endif
                                </div>


                                <div class="form-group">
                                    <label for="new_image">Hình bài viết</label>
                                    <br/>
                                    <img src="{{ asset('assets/admin/img/no-image.jpg') }}" id="out_img" alt="" width="100%">
                                    <hr>
                                    <input type="file" name="new_image" id="input_img" placeholder="Hình bài viết" class="form-control">
                                    @if ($errors->has('new_image'))
                                        <span class="text-danger">
                                            {{ $errors->first('new_image') }}
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="new_meta_keywords">Từ khóa seo</label>
                                    <input type="text" class="form-control" name="new_meta_keywords" id="new_meta_keywords"
                                           value="{{ old('new_meta_keywords') }}" placeholder="Từ khóa seo">
                                </div>
                                <div class="form-group">
                                    <label for="new_meta_description">Mô tả seo</label>
                                    <input type="text" class="form-control" name="new_meta_description"
                                           value="{{ old('new_meta_description') }}" id="new_meta_description"
                                           placeholder="Mô tả seo">
                                </div>
                            </div>
                        </div>
                    </div>

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

@section('script')
    <script src="ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('input_new_content');
    </script>
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#out_img').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#input_img").change(function() {
            readURL(this);
        });
    </script>
@endsection
