<div class="header-area">
    <div class="header-drop">
        <div class="container">
            <div class="row">
                <div class="">
                    <a href="http://doan2.com/" class="header-logo"><img class="header-logo-vpv" src="{{asset('public/img/logo-hearder.png')}}"></img></a>
                    <div class="user-menu">
                        <form class="header-form" action="" method="get" autocomplete="off">
                            
                            <input class="stxtfs" type="text" name="" placeholder="Nhập tên điện thoại, máy tính, phụ kiện... cần tìm" autocomplete="off" maxlength="50">
                            <button type="submit" class="header-search-button"><i class="fa fa-search"></i>
                            </button>
                            <div class="fs-sresult" style="display : block !important">
                                <div class="fs-sremain">
                                    <ul></ul>
                                </div>
                            </div>
                        </form>
                    </div>
                    <ul class="icon-header-menu">
                        <li class="small-icon-header">
                            <a class = "a-class-2" href="http://doan2.com/my-cart">
                                <i class="fa2 fa fa-shopping-cart"></i><span class="span-header-icon">Giỏ Hàng</span>
                            </a>
                        </li>
                        <li class="small-icon-header">
                            <a class = "a-class-2" href="http://doan2.com/my-cart">
                                <i class="fa2 fa fa-globe"></i><span class="span-header-icon">Hàng Quốc Tế</span>
                            </a>
                        </li>
                        <li class="small-icon-header">
                            <a class = "a-class-2" href="http://doan2.com/my-cart">
                                <i class="fa2 fa fa-cc-visa"></i><span class="span-header-icon">Mua Trả Sau</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <div class="header-right">
                        
                    </div>
                </div>
            </div>
    </div>
    </div>
    
</div> <!-- End header area -->
<div class="site-branding-area">
    <div class="container">
        Header
    </div>
</div> <!-- End site branding area -->

@include('pages.layouts.menu')