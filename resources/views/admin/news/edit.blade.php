@extends('admin.layouts.master')
@section('title')
    Tin tức
@endsection
@section('action')
    Sửa bài
@endsection
@section('content')

   
    <div class="box-header">
        <h3 class="box-title">Sửa bài viết</h3>
        <form role="form" action="{{route('post_edit_news',$new->id)}}" method="POST" enctype="multipart/form-data" >
            @csrf
            <div class="form-group">
                            <label>Tiêu đề</label>
                            <input class="form-control" type="text" name="title" placeholder="Xin nhập tiêu đề" required="" value="{{$new->title}}"/>
                        </div>
                        <div class="form-group">
                            <label>Nội dung</label>
                            <textarea id="editor1" required="" name="content">{{$new->content}}</textarea>
                        </div>  
                        <div class="form-group">
                            <label>Hình ảnh</label>
                           <input type="file" name="image" required="" value="{{$new->image}}">
                           @if($new->image <> null)
                            <img src="/public/uploads/images/news/{{$new->image}}">
                            @endif
                        </div>    
                         <div class="text-center">
                            <button type="submit" class="btn btn-success" name="edit_news">Lưu</button>
                            
                        </div>  
        </form>
    </div>

@endsection
@section('script')
<script type="text/javascript" src="public/ckeditor/ckeditor.js"></script>
<script>    CKEDITOR.replace( 'editor1' );</script>
@endsection
