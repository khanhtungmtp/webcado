@extends('admin.layouts.master')
@section('title')
    Danh sách bài viết
@endsection
@section('style')
    <style>
        .active {
            color: #ff9727!important;
        }
        .modal-full {
            min-width: 96%;
            margin: 0 auto;
        }

        .modal-full .modal-content {
            min-height: 100vh;
        }

        td {
            border:1px solid #8080801f;
            width:200px;
            height:200px;
            word-wrap:break-word;
        }
    </style>
@endsection
@section('breadcrumb')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Bài viết</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Trang chủ</a></li>
                <li class="breadcrumb-item active">Bài viết</li>
            </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
@endsection

@section('admin.content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        <a href="{{ route('admin.get.create.news') }}" class="btn btn-primary">Thêm mới</a>
                    </h3>

                    <div class="card-tools">
                        <form method="get">
                            <div class="input-group input-group-sm" style="width: 250px;">
                                <select name="cat_search" id="">
                                    <option value="">Danh mục</option>
                                    @if (isset($categories))
                                        @foreach ($categories as $cat)
                                            <option value="{{ $cat->cat_id }}" {{ \Request::get('cat_search') == $cat->cat_id ? "selected='selected'" : '' }}>{{ $cat->cat_name }}</option>
                                        @endforeach
                                    @endif
                                </select>
                                <input type="text" name="name_search" class="form-control float-right" placeholder="Tìm bài viết...">

                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover">
                        <tr>
                            <th>STT</th>
                            <th>Tiêu đề bài viết</th>
                            <th>Tiêu đề seo</th>
                            <th>Danh mục bài viết</th>
                            <th>Trạng thái</th>
                            <th>Chức năng</th>
                        </tr>
                        @if (isset($news))
                            @foreach ($news as $key => $new)
                                <?php
                                $avgStar = 0;
                                $total_rating        = $new->new_total_rating;
                                $total_number_rating = $new->new_total_number_rating;
                                if ($new->new_total_rating)
                                {
                                    $avgStar = round($total_number_rating / $total_rating, 2);
                                }
                                ?>
                                <tr>
                                    <td style="width: 0">{{ $key+1 }}</td>
                                    <td>
                                        <ul>
                                            <li>
                                                {{ $new->new_title }}
                                            </li>
                                            <li>
                                                <img src="{{ pare_url_file($new->new_image, 'news') }}"
                                                     class="img img-responsive" width="200" alt="{{ $new->new_title }}">
                                            </li>
                                            <li>
                                                Đánh giá:
                                                @for ($i = 1; $i <= 5; $i++)
                                                    <i class="fa fa-star {{ $i <= $avgStar ? 'active' : '' }}"></i>
                                                @endfor
                                                <span>{{ $avgStar }}</span>
                                            </li>
                                        </ul>
                                    </td>
                                    <td>{{ $new->new_slug }}</td>
                                    <td style="width: 0">{{ isset($new->category->cat_name) ? $new->category->cat_name : '[N\A]' }}</td>
                                    <td style="width: 0"><a href="{{ route('admin.post.action.news',['new_publish',$new->new_id]) }}" style="padding: 5px 10px;border-radius: 5px;"
                                           class="{{ $new->getStatus($new->new_publish)['class'] }}">{{ $new->getStatus($new->new_publish)['name'] }}</a>
                                    </td>

                                    <td>
                                        <a href="{{ route('admin.get.show.news', $new->new_id) }}" data-toggle="modal" data-target="#newModal">
                                            <i class="fa fa-eye">Xem</i>
                                            &nbsp
                                        </a>
                                        <a href="{{ route('admin.get.edit.news', $new->new_id) }}">
                                            <i class="fa fa-edit">Sửa</i>
                                            &nbsp
                                        </a>
                                        <a href="{{ route('admin.post.action.news', ['delete', $new->new_id]) }}" onclick="return confirm('Bạn có chắc muốn xóa bài viết {{$new->new_title}}?')">
                                            <i class="fa fa-trash">Xóa</i>
                                        </a>

                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </table>
                    <!-- Modal xem chi tiet tin-->
                    @if (isset($new))
                        <div class="modal" id="newModal" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-full" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Chi tiết bài viết ({{ $new->new_title }})</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body" id="result">
                                        <div class="row">
                                            <div class="col-4 col-xs-4">Nội dung bài viết</div>
                                            <div class="col-4 col-xs-4 ">Mô tả bài viết</div>
                                            <div class="col-4 col-xs-4">Từ khóa seo</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-4 col-xs-4">{!! $new->new_content !!}</div>
                                            <div class="col-4 col-xs-4">{{ $new->new_description }}</div>
                                            <div class="col-4 col-xs-4">{{ $new->new_meta_keywords }}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">OK</button>
                                </div>
                            </div>
                        </div>
                </div>
                    @endif
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div><!-- /.row -->
@endsection
