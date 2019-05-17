@extends('admin.layouts.master')
@section('title')
    Tin tức
@endsection
@section('action')
    Thêm mới
@endsection
@section('content')

    

    <div class="box-header">
        <h3 class="box-title">Thêm bài viết</h3>
        <form role="form" action="{{route('post_add_news')}}" method="POST" enctype="multipart/form-data" >
            @csrf
            <div class="form-group"> 
                            <label>Tiêu đề</label>
                            <input class="form-control" type="text" name="title" placeholder="Xin nhập tiêu đề" required="" >
                        </div>
            <div class="form-group">
                            <label>Nội dung</label>
                            <textarea id="editor1"  name="content" required=""></textarea>
                        </div>  
                        <div class="form-group">
                            <label>Hình ảnh</label>
                           <input type="file" name="image" required="">
                        </div>    
                        
                         <div class="text-center">
                            <button type="submit" class="btn btn-success" name="post_add_news">Lưu</button>    
                        </div>      
        </form>
    </div>

@endsection
@section('script')
<script type="text/javascript" src="public/ckeditor/ckeditor.js"></script>
<script>    CKEDITOR.replace( 'editor1' );</script>
@endsection