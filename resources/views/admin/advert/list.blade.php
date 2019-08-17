@extends('admin.layouts.master')
@section('title')
    Quang Cao
@endsection
@section('style')
    <style>
    .col-sm-9 {
        flex: 0 0 75%;
        max-width: 75%;
        float: right;
    }
    </style>
@endsection
@section('breadcrumb')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Quang cao</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Trang chủ</a></li>
                <li class="breadcrumb-item active">Quang cao</li>
            </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
@endsection

@section('admin.content')
<div id="page-wrapper">
  <div class="row">

  </div>
  <!-- /.row -->
  <div class="row">
      <div class="col-lg-12">
          <div class="panel panel-default">
              <div class="panel-heading">
                  <button type="button" class="btn btn-info" data-toggle="modal" data-target=".nn-modal-add-advert" id="nn-add-advert">+ Thêm Quảng Cáo</button>
              </div>
              <!-- /.panel-heading -->
              <div class="panel-body">
              @if(session('thongbao'))
                  <div class="alert-tb alert alert-success">
                      <span class="fa fa-check"> </span> {{ session('thongbao') }}
                  </div>
              @endif
                  <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                      <thead>
                          <tr>
                              <th>STT</th>
                              <th>Vị trí</th>
                              <th>Hiện thị</th>
                              <th>Hình ảnh</th>
                              <th>Chi tiết</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach($adverts as $advert)
                          <tr class="odd gradeX">
                              <td>{{ $advert->id }}</td>
                              <td class="text-center">
                                  @if($advert->area ==1)
                                      <span style="color: #1f796d;">Đầu trang</span>
                                  @elseif($advert->area ==2)
                                      <span style="color: #16690c;">Giữa trang</span>
                                  @elseif($advert->area ==3)
                                      <span style="color: red;">Cuối trang </span>
                                  @else
                                      <span style="color: #673020;">Trang chủ</span>
                                  @endif
                              </td>
                              <td class="text-center">
                                  @if($advert->hide ==1)
                                      <span class="glyphicon glyphicon-remove" style="color: red;">Khong hien thi</span>
                                  @else
                                       <i class="glyphicon glyphicon-ok" style="color:green;">Hien thi</i>
                                  @endif
                              </td>
                              <td class="center">
                                  <img src="{{ pare_url_file($advert->img, 'images_bn') }}" style="width: 55px">
                              </td>
                              <td>
                                  <i class="nneditadvert btn btn-info fa fa-edit" id="ennadvert{{ $advert->id }}" editid="{{ $advert->id }}"  hide="{{ $advert->hide }}" area="{{ $advert->area }}"  link="{{ $advert->link }}" code="{{$advert->code}}" sort="{{$advert->sort}}" imgo="{{ $advert->img }}"> Sửa</i>
                                  <i class="nndeditlistpro btn btn-danger far fa-trash-alt"  editid="{{ $advert->id }}" imgo="{{ $advert->img }}" title="{{ $advert->id }}" > Xóa</i>
                              </td>
                          </tr>
                          @endforeach
                      </tbody>
                  </table>
                  <!-- /.table-responsive -->
              </div>
              <!-- /.panel-body -->
          </div>
          <!-- /.panel -->
      </div>
      <!-- /.col-lg-12 -->
  </div>
  <!-- /.row -->
</div>
<!-- model -->
<!-- model them quang cao -->
<div class="modal fade nn-modal-add-advert" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Quảng cáo</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <form class="form-horizontal" action="{{route('admin.post.add.advert')}}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="modal-body">
            <div class="row">
                <div class="col-xs-12">
                    <div class="form-group">
                        <label for="nnchar" class="col-sm-3 control-label"><i class="fab fa-free-code-camp"></i> Hiện thị:</label>
                        <div class="col-sm-9">
                            <label class="radio-inline">
                                <input type="radio" name="nnhide" id="nn-hide-1" value="1" > Ẩn
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="nnhide" id="nn-hide-2" value="2" checked> Hiện
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nnchar" class="col-sm-3 control-label"><i class="fab  fa-free-code-camp"></i> Khu vực:</label>
                        <div class="col-sm-9">
                            <label class="radio-inline">
                                <input type="radio" name="nnshowin" id="nn-show-1" value="1" > Đầu trang
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="nnshowin" id="nn-show-2" value="2" checked> Giữa trang
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="nnshowin" id="nn-show-3" value="3"> Cuối trang
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="nnshowin" id="nn-show-4" value="4"> Trang chủ
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nnlink" class="col-sm-3 control-label"><i class="fab  fa-free-code-camp"></i> Thứ tự:</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="sort" id="idesort" placeholder="Nhấp số thứ tự xắp xếp">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="ennlink" class="col-sm-3 control-label"><i class="fab  fa-free-code-camp"></i> Link:</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="nnlink" id="nnlink" placeholder="link bài viết quảng cáo">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nnlink" class="col-sm-3 control-label"><i class="fab  fa-free-code-camp"></i> Code :</label>
                        <div class="col-sm-9">
                          <textarea class="form-control" name="code" id="idcode" rows="4"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                            <label for="nnavatar" class="col-sm-4 control-label"><i class="fas fa-image"></i> Hình ảnh</label>
                            <div class="col-sm-8">
                                <img id="nnavatar" src="" alt="..." class="img-thumbnail" style="width: 50%;">
                                <input type="file" name="ennavatarfile" id="ennavatarfile" onchange="eshowimg(this);" style="display: none">
                                <input type="hidden" name="nnavatarfile" id="nnavatarfile">
                            </div>
                        </div>

                </div>
            </div>
          </div>
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng cửa sổ</button>
          <button type="submit" class="btn btn-primary">Cập nhật</button>
        </div>
        </form>
      </div>
    </div>
  </div>

  <!-- end modal -->

  <!-- end modal -->
<!-- end model -->

<!-- model sua quang cao -->
<div class="modal fade nn-modal-edit-advert"  id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Quảng cáo</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <form class="form-horizontal" action="{{route('admin.post.edit.advert')}}" method="post" enctype="multipart/form-data">
          @csrf
          <input type="hidden" name="ennidadvert" id="ennidadvert" />
          <div class="modal-body">
            <div class="row">
                <div class="col-xs-12">
                    <div class="form-group">
                        <label for="ennhide" class="col-sm-3 control-label"><i class="fab fa-free-code-camp"></i> Hiện thị:</label>
                        <div class="col-sm-9">
                            <label class="radio-inline">
                                <input type="radio" name="ennhide" id="nn-hide-1" value="1" > Ẩn
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="ennhide" id="nn-hide-2" value="2"> Hiện
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="ennshowin" class="col-sm-3 control-label"><i class="fab  fa-free-code-camp"></i> Khu vực:</label>
                        <div class="col-sm-9">
                            <label class="radio-inline">
                                <input type="radio" name="ennshowin" id="nn-show-1" value="1" > Đầu trang
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="ennshowin" id="nn-show-2" value="2"> Giữa trang
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="ennshowin" id="nn-show-3" value="3"> Cuối trang
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="ennshowin" id="nn-show-4" value="4"> Trang chủ
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nnlink" class="col-sm-3 control-label"><i class="fab  fa-free-code-camp"></i> Thứ tự:</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="esort" id="idesort" placeholder="Nhấp số thứ tự xắp xếp">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="ennlink" class="col-sm-3 control-label"><i class="fab  fa-free-code-camp"></i> Link:</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="ennlink" id="ennlink" placeholder="link bài viết quảng cáo">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nnlink" class="col-sm-3 control-label"><i class="fab  fa-free-code-camp"></i> Code :</label>
                        <div class="col-sm-9">
                          <textarea class="form-control" name="ecode" id="idecode" rows="4"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                            <label for="ennavatar" class="col-sm-4 control-label"><i class="fas fa-image"></i> Hình ảnh</label>
                            <div class="col-sm-8">
                                <img id="ennavatar" src="" alt="..." class="img-thumbnail" style="width: 50%;">
                                <input type="file" name="ennavatarfile" id="ennavatarfile" onchange="eshowimg(this);" style="display: none">
                                <input type="hidden" name="ennimguserold" id="ennimguserold">
                            </div>
                        </div>

                </div>
            </div>
          </div>
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng cửa sổ</button>
          <button type="submit" class="btn btn-primary">Cập nhật</button>
        </div>
        </form>
      </div>
    </div>
  </div>

  <!-- end modal -->

  <!-- end modal -->
<!-- end Model -->

<!-- model xoa quang cao -->
<div class="modal fade nn-modal-delete-listpro"  id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Xóa Quảng cáo</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <form class="form-horizontal" action="{{route('admin.post.delete.advert')}}" method="post" enctype="multipart/form-data">
          @csrf
          <input type="hidden" name="dennidlistpro" id="dennidlistpro" />
          <input type="hidden" name="dennimglistpro" id="dennimglistpro" />
          <div class="modal-body">
            <div class="row">
                <h4 class="nnbodydelete">Bạn có chắc xóa Quảng Cáo <i id="deletename"></i></h4>
            </div>
          </div>
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng cửa sổ</button>
          <button type="submit" class="btn btn-warning">Xóa</button>
        </div>
        </form>
      </div>
    </div>
  </div>

  <!-- end modal -->

  <!-- end modal -->
<!-- end model -->
@endsection
@section('script')
  <script src="{{ asset('js/advert.js') }}"></script>
  <script type="text/javascript">
    @if(session('actionuser')=='add' && count($errors) > 0)
        $('.nn-modal-add-advert').modal('show');
    @endif
    @if (session('actionuser')=='edit' && count($errors) > 0)
        $(document).ready(function(){
          $("#ennadvert{{ session('editid') }}").trigger('click');
        });
    @endif
  </script>
@endsection
