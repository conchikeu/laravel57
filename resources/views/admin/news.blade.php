@extends('pages.layouts.master')
@section('style')
    <style>
        .button-hidden{
            background: transparent;
            border: none !important;
            font-size:0;
            outline:none;
        }
        .fix-font a{
            overflow: hidden;
            display: -webkit-box;
            -webkit-line-clamp: 1;
            -webkit-box-orient: vertical;
        }
        .product-f-image{
            overflow: hidden;
        }
        .single-product-widget h2{
            font-family: "Times New Roman", serif;
        }
    </style>
@stop
@section('content')
<div class="single-product-area">
        <div class="container">
            <div class="row">
                <div class="box-inner">
   <div style='color:red; font-weight:bold; text-transform: uppercase; text-align:center;font-size: 35px;' id="ctl00_Widget1139_Widget_HeaderPanel" class="box-header  _specials" style="">
      <span  id="ctl00_Widget1139_Widget_txtTitleContentPlaceHolder1Widget">Tin tức</span>
   </div>
   <div id="ctl00_Widget1139_Widget_HeaderPanelDes" class="_panel_des _hidden">
      <span id="ctl00_Widget1139_Widget_txtDescriptionContentPlaceHolder1Widget" class="_custom_desc_html"></span>
   </div>
   <div id="ctl00_Widget1139_Widget_WidgetBodyPanel" class="box-content nofr nopd " style="">
      <style>
         body {background:#fff;}
      </style>
        <div class="fck_detail">
            <div id="title"><h2>{{$chitiet_news->title}}</h2></div>
        <p>{!!$chitiet_news->content!!}</p>
     
        </div>
   </div>
</div>
            </div>
        </div>
</div>
@endsection