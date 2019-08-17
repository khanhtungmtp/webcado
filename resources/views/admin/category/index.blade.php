@extends('admin.layouts.master')
@section('title')
    Danh sách danh mục
@endsection
@section('breadcrumb')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Danh mục</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Trang chủ</a></li>
                <li class="breadcrumb-item active">Danh mục</li>
            </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
@endsection

@section('style')
    <style>
        td {
            border:1px solid #8080801f;
            width:200px;
            height:200px;
            word-wrap:break-word;
        }
    </style>
@endsection

@section('admin.content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        <a href="{{ route('admin.get.create.category') }}" class="btn btn-primary">Thêm mới</a>
                    </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover">
                        <tr>
                            <th>STT</th>
                            <th>Tên danh mục</th>
                            <th>Level danh mục</th>
                            <th>Trạng thái</th>
                            <th>Chức năng</th>
                        </tr>
                        @if (isset($categories))
                            @foreach ($categories as $key => $cat)

                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $cat->cat_name }}</td>
                                    <td>
                                        @if($cat->cat_parent_id ==0)
                                            {!! "Cấp cha" !!}
                                        @else
                                            <?php
                                            $parent = DB::table('categories')->where('cat_id',$cat->cat_parent_id)->first();
                                            echo $parent->cat_name;
                                            ?>
                                        @endif
                                    </td>
                                    <td><span class="{{ $cat->getStatus($cat->cat_publish)['class'] }}" style="padding: 5px 10px;border-radius: 5px;"><a
                                                href="{{ route('admin.post.action.category',['cat_publish',$cat->cat_id]) }}">{{ $cat->getStatus($cat->cat_publish)['name'] }}</a></span></td>
                                    <td>
                                        <a href="{{ route('admin.get.edit.category', $cat->cat_id) }}">
                                            <i class="fa fa-edit">Sửa</i> &nbsp
                                        </a>
                                        <a href="{{ route('admin.post.action.category', ['delete', $cat->cat_id]) }}" onclick="return confirm('Bạn có chắc muốn xóa danh mục {{$cat->cat_name}}?')">
                                            <i class="fa fa-trash">Xóa</i>
                                        </a>

                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div><!-- /.row -->
@endsection
