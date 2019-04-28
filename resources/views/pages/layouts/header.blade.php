<header id="header">
        <div class="header-drop">
            <div class="header-wrap">
                <a class="a-header-logo" href="/">
                    <img class="header-logo-align" src="{{asset('public/img/header-logo.png')}}" alt="">
                </a>
                <div class="header-search">
                    <form action="" method="get" autocomplete="off">
                        <input class="fa-stxt" type="text" name="" placeholder="Nhập tên điện thoại, máy tính, phụ kiện... cần tìm" autocomplete="off" maxlength="50">
                        <button type="submit" class="header-search-button"><i class="fa fa-search"></i></button>
                        <div class="fa-sresult" style="display : block !important">
                            <div class="fs-sremain">
                                <ul></ul>
                            </div>
                        </div>
                    </form>
                </div>
                <ul class="header-iconshape">
                    <li class="header-li">
                      <div class="dropdown">
                        <i class="fa fa-globe fa-shape"></i>
                        <button class="header-li-span dropdown-toggle" id="menu1" type="button" data-toggle="dropdown">Hàng Quốc Tế
                        </button>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">
                                <span class="style-header-dropbtn">Mỹ</span>
                                <i class="fa fa-chain i-rightfloat"></i>
                                </a>
                            </li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">
                                <span class="style-header-dropbtn">Nhật</span>
                                <i class="fa fa-chain i-rightfloat"></i>
                                </a>
                            </li>
                            <li role="presentation" class="divider"></li>
                             <li role="presentation"><a role="menuitem" tabindex="-1" href="#">
                                <span class="style-header-dropbtn">Hàn Quốc</span>
                                <i class="fa fa-chain i-rightfloat"></i>
                                </a>
                            </li>
                        </ul>
                      </div>
                    </li>
                    <li class="header-li">
                      <div class="dropdown">
                        <i class="fa fa-truck fa-shape"></i>
                        <button class="header-li-span dropdown-toggle" id="menu1" type="button" data-toggle="dropdown">Giao Hàng Nhanh
                        </button>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">
                                <span class="style-header-dropbtn">VNPost</span>
                                <i class="fa fa-chain i-rightfloat"></i>
                                </a>
                            </li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">
                                <span class="style-header-dropbtn">VNPost</span>
                                <i class="fa fa-chain i-rightfloat"></i>
                                </a>
                            </li>
                            <li role="presentation" class="divider"></li>
                             <li role="presentation"><a role="menuitem" tabindex="-1" href="#">
                                <span class="style-header-dropbtn">VNPost</span>
                                <i class="fa fa-chain i-rightfloat"></i>
                                </a>
                            </li>                        </ul>
                      </div>
                    </li>
                    <li class="header-li">
                      <div class="dropdown">
                        <i class="fa fa-shopping-cart fa-shape"></i>
                        <button class="header-li-span dropdown-toggle" id="menu1" type="button" data-toggle="dropdown">
                            <span>Giỏ Hàng</span>
                        </button>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">
                                <span class="style-header-dropbtn">VNPost</span>
                                <i class="fa fa-chain i-rightfloat"></i>
                                </a>
                            </li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">
                                <span class="style-header-dropbtn">VNPost</span>
                                <i class="fa fa-chain i-rightfloat"></i>
                                </a>
                            </li>
                            <li role="presentation" class="divider"></li>
                             <li role="presentation"><a role="menuitem" tabindex="-1" href="#">
                                <span class="style-header-dropbtn">VNPost</span>
                                <i class="fa fa-chain i-rightfloat"></i>
                                </a>
                            </li>
                        </ul>
                      </div>
                    </li>
                </ul>
            </div>
        </div>
        <nav class="header-menu">
            <div class="header-menu-wrap">
                <ul class="fa-mnul clearfix">
                    
                    @foreach($categories as $category)
                        @if($category->subcate->count() > 0)
                            <li class="dropdown">
                                <a href="" class="dropbtn" data-toggle="dropdown">
                                    {{$category->name}}</a>
                                <ul class="dropdown-content">
                                    @foreach($category->subcate as $submenu)
                                        <li><a href="/subcate/{{$submenu->slug}}">{{$submenu->name}}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                        @else
                            <li><a href="#">{{$category->name}}</a></li>
                        @endif
                    @endforeach
                </ul>
            </div>
        </nav>
</header>
<script>
$(document).ready(function(){
  $(".dropdown").on("show.bs.dropdown", function(event){
    var x = $(event.relatedTarget).text(); // Get the button text
  });
});
</script>