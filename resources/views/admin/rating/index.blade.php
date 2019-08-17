@extends('admin.layouts.master')
@section('title')
    Danh sách đánh giá
@endsection
@section('breadcrumb')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Đánh giá</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Trang chủ</a></li>
                <li class="breadcrumb-item active">Đánh giá</li>
            </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
@endsection

@section('admin.content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover">
                        <tr>
                            <th>STT</th>
                            <th>Họ tên</th>
                            <th>Bài viết</th>
                            <th>Nội dung đánh giá</th>
                            <th>Số sao đánh giá</th>
                            <th>Chức năng</th>
                        </tr>
                        @if (isset($ratings))
                            @foreach ($ratings as $key => $rating)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>
                                        {{ isset($rating->user->user_name) ? $rating->user->user_name : '' }}
                                    </td>
                                    <td>
                                        {{ isset($rating->new->new_title) ? $rating->new->new_title : '' }}
                                    </td>
                                    <td>{{ $rating->rating_content }}</td>
                                    <td>{{ $rating->rating_number }}</td>
                                    <td>
                                        <a href="{{ route('admin.post.action.rating', ['delete', $rating->rating_id]) }}" onclick="return confirm('Bạn có chắc muốn xóa đánh giá thứ {{$rating->rating_id}}?')">
                                            <i class="fa fa-trash"> Xóa</i>
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

    <!-- Modal -->
    <div class="modal fade" id="orderModal" tabindex="-1" role="dialog" aria-labelledby="orderModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Chi tiết Đánh giá #<span id="rating_id"></span>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="content-order">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('script')
    <script>
        $(document).ready(function () {
            $('.js_order_item').click(function (event) {
                event.preventDefault();
                let url = $(this).attr('href');
                $('#rating_id').text($(this).attr('data-id'));
                $.ajax({
                    url: url
                }).done(function (result) {
                    // console.log(result)
                    if (result) {
                        $('#content-order').html('').append(result);
                    }
                })
            })
        });
    </script>
@endsection
