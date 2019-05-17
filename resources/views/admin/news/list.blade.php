@extends('admin.layouts.master')
@section('title')
    Quản lý tin tức
@endsection
@section('action')
    Danh sách
@endsection
@section('style')
    <style>
        .error{color:red;font-weight:normal}
    </style>
@endsection
@section('content')
    <section class="content container-fluid">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Danh sách tin tức</h3>
            </div>

            <div class="box-body">
                <div class="dataTables_wrapper form-inline dt-bootstrap">
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-bordered table-hover dataTable">
                                <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tiêu đề</th>
                                    <th>Hình ảnh</th>
                                    <th width="10%">Ngày tạo</th>
                                    <th width="30%" class="text-center"><a href="{{route('add-news')}}"><button id="add-manufacturer" class="btn btn-primary btn-xs">Thêm</button></a></th>
                                </tr>
                                </thead>
                                <tbody id="add-row-manufacturer">
                                @foreach($news as $new)
                                    <tr id="delete-coloum">
                                        <td>{{$new->id}}</td>
                                        <td>{{$new->title}}</td>
                                        <td><img src="/public/uploads/images/news/{{$new->image}}" width="60px" height="60px"></td>
                                        <td>{{$new->created_date}}</td>
                                        <td class="text-center">
                                            <a href="{{route('edit-news',$new->id)}}"><button class="btn btn-warning btn-xs edit-manufacturer" value="">Sửa</button></a> &ensp;
                                            <a href="{{route('delete_news',$new->id)}}"><button class="btn btn-danger btn-xs" id="delete-manufacturer" value="">Xóa</button></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection

@section('script')
    
@stop