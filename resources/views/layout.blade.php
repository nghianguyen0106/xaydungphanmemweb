<?php session_start(); ?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ashion Template">
    <meta name="keywords" content="Ashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap"
    rel="stylesheet")

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{url('resources/css/app.css')}}" >
    <link rel="stylesheet" href="{{url('public/frontend/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('public/frontend/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('public/frontend/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('public/frontend/css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('public/frontend/css/magnific-popup.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('public/frontend/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('public/frontend/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('public/frontend/css/style.css')}}" type="text/css">
    <!-- CSS -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
<!-- Default theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
<!-- Semantic UI theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
<!-- Bootstrap theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__close">+</div>
        <ul class="offcanvas__widget">
            <li><span class="icon_search search-switch"></span></li>
            <li><a href="#"><span class="icon_heart_alt"></span>
                <div class="tip">2</div>
            </a></li>
            <li><a href="#"><span class="icon_bag_alt"></span>
                <div class="tip">0</div>
            </a>
            
        </li>
    </ul>
    <div class="offcanvas__logo">
        <a href="./index.html"><img src="{{{'public/frontend/img/logo.png'}}}" alt=""></a>
    </div>
    <div id="mobile-menu-wrap"></div>
    <div class="offcanvas__auth">
        
       <?php 
       $name=Session::get('khTen');
       if(isset($name))
        { ?>
            <a href="{{URL::to('/logout')}}"><?php echo $name ?>(logout)</a>
        <?php }
        else
            { ?>
                <a href="{{URL::to('login')}}">Login</a>
                <a href="{{URL::to('/register')}}">Register</a>
            <?php }
            ?>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-3 col-lg-2">
                    <div class="header__logo">
                        <a href="{{ url('/') }}"><img src="{{{'public/frontend/img/logo.png'}}}" alt=""></a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="{{ url('shop') }}">Shop</a></li>
                            <li><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="{{url('product-details')}}">Product Details</a></li>
                                    <li><a href="{{url('shop-cart')}}">Shop Cart</a></li>
                                    <li><a href="{{url('checkout')}}">Checkout</a></li>
                                    <li><a href="{{url('blog-details')}}l">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href="{{url('blog')}}">Blog</a></li>
                            <li><a href="{{url('contact')}}">Contact</a></li>
                            <li><a href="{{url('bill')}}">Bill</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__right">
                        <div class="header__right__auth">
                            <?php 
                            $name=Session::get('khTen');
                            if(isset($name))
                                { ?>
                                    <a href="{{URL::to('/logout')}}"><?php echo $name ?>(logout)</a>
                                <?php }
                                else
                                    { ?>
                                        <a href="{{URL::to('login')}}">Login</a>
                                        <a href="{{URL::to('/register')}}">Register</a>
                                    <?php }
                                    ?>

                                </div>
                                <ul class="header__right__widget">
                                    <li><span class="icon_search search-switch"></span></li>
                            {{-- <li><a href="#"><span class="icon_heart_alt"></span>
                                <div class="tip">2</div>
                            </a></li> --}}
                            <li class="cart-icon"><a><span class="icon_bag_alt"></span>

                                <div class="tip">
                                    @if(Session::has('Cart')!=null) 
                                        <span id="total__quanty">{{Session::get('Cart')->totalQuanty}}</span>
                                    @else
                                        <span id="total__quanty">0</span>

                                    @endif                       
                                </div>
                            </a>
                            <div class="cart-hover">
                               <div id="change__item__cart">
                               @if(Session::has('Cart')!=null)                        
                                <div class="select-items">
                                 
                                    <table>
                                        <tbody>
                                             @foreach(Session::get('Cart')->products as $item)
                                             <!--($newCart->products as $item)-->
                                            <tr>
                                                <td class="si-pic"><img src="{{{'public/frontend/img/'.$item['productInfo']->spHinh}}}" alt=""></td>
                                                <td class="si-text">
                                                    <div class="product-selected">
                                                        <p>{{number_format($item['productInfo']->spGia)}}vnd x {{$item['quanty']}}</p>
                                                        <h6>{{$item['productInfo']->spTen}}</h6>
                                                    </div>
                                                </td>
                                                <td class="si-close">
                                                    <i class="ti-close" data-id="{{$item['productInfo']->spMa}}">X</i>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    
                                </div>
                                <div class="select-total">
                                    <span>total:{{number_format(Session::get('Cart')->totalPrice)}}vnd</span>
                                     <input id="input__total__quanty" hidden type="number" value="{{Session::get('Cart')->totalQuanty}}"  />
                                </div>

                                <div class="select-button">
                                    <a href="{{URL::to('/shop-cart')}}" class="primary-btn view-card">Xem chi tiết giỏ hàng</a>
                                    <a href="#" class="primary-btn checkout-btn">CHECK OUT</a>
                                </div>
                            </div>
@endif 
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="canvas__open">
        <i class="fa fa-bars"></i>
    </div>
</div>
</header>
<!-- Header Section End -->




@yield('user_content')



   <!-- Instagram Begin -->
    <div class="instagram">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                    <div class="instagram__item set-bg" data-setbg="{{URL::asset('public/frontend/img/instagram/insta-1.jpg')}}">
                        <div class="instagram__text">
                            <i class="fa fa-instagram"></i>
                            <a href="#">@ ashion_shop</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                    <div class="instagram__item set-bg" data-setbg="{{URL::asset('public/frontend/img/instagram/insta-2.jpg')}}">
                        <div class="instagram__text">
                            <i class="fa fa-instagram"></i>
                            <a href="#">@ ashion_shop</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                    <div class="instagram__item set-bg" data-setbg="{{URL::asset('public/frontend/img/instagram/insta-3.jpg')}}">
                        <div class="instagram__text">
                            <i class="fa fa-instagram"></i>
                            <a href="#">@ ashion_shop</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                    <div class="instagram__item set-bg" data-setbg="{{URL::asset('public/frontend/img/instagram/insta-4.jpg')}}">
                        <div class="instagram__text">
                            <i class="fa fa-instagram"></i>
                            <a href="#">@ ashion_shop</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                    <div class="instagram__item set-bg" data-setbg="{{URL::asset('public/frontend/img/instagram/insta-5.jpg')}}">
                        <div class="instagram__text">
                            <i class="fa fa-instagram"></i>
                            <a href="#">@ ashion_shop</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                    <div class="instagram__item set-bg" data-setbg="{{URL::asset('public/frontend/img/instagram/insta-6.jpg')}}">
                        <div class="instagram__text">
                            <i class="fa fa-instagram"></i>
                            <a href="#">@ ashion_shop</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Instagram End -->

<!-- Footer Section Begin -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-7">
                <div class="footer__about">
                    <div class="footer__logo">
                        <a href="{{ url('/') }}"><img src="{{{'public/frontend/img/logo.png'}}}" alt=""></a>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                    cilisis.</p>
                    <div class="footer__payment">
                        <a href="#"><img src="{{{'public/frontend/img/payment/payment-1.png'}}}" alt=""></a>
                        <a href="#"><img src="{{{'public/frontend/img/payment/payment-2.png'}}}" alt=""></a>
                        <a href="#"><img src="{{{'public/frontend/img/payment/payment-3.png'}}}" alt=""></a>
                        <a href="#"><img src="{{{'public/frontend/img/payment/payment-4.png'}}}" alt=""></a>
                        <a href="#"><img src="{{{'public/frontend/img/payment/payment-5.png'}}}" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-5">
                <div class="footer__widget">
                    <h6>Quick links</h6>
                    <ul>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Blogs</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4">
                <div class="footer__widget">
                    <h6>Account</h6>
                    <ul>
                        <li><a href="#">My Account</a></li>
                        <li><a href="#">Orders Tracking</a></li>
                        <li><a href="#">Checkout</a></li>
                        <li><a href="#">Wishlist</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-8 col-sm-8">
                <div class="footer__newslatter">
                    <h6>NEWSLETTER</h6>
                    <form action="#">
                        <input type="text" placeholder="Email">
                        <button type="submit" class="site-btn">Subscribe</button>
                    </form>
                    <div class="footer__social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-youtube-play"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                <div class="footer__copyright__text">
                    <p>Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
                </div>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->

<!-- Search Begin -->
<div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch">+</div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Search here.....">
        </form>
    </div>
</div>
<!-- Search End -->

<!-- Js Plugins -->
<script src="{{{'public/frontend/js/jquery-3.3.1.min.js'}}}"></script>
<script src="{{{'public/frontend/js/bootstrap.min.js'}}}"></script>
<script src="{{{'public/frontend/js/jquery.magnific-popup.min.js'}}}"></script>
<script src="{{{'public/frontend/js/jquery-ui.min.js'}}}"></script>
<script src="{{{'public/frontend/js/mixitup.min.js'}}}"></script>
<script src="{{{'public/frontend/js/jquery.countdown.min.js'}}}"></script>
<script src="{{{'public/frontend/js/jquery.slicknav.js'}}}"></script>
<script src="{{{'public/frontend/js/owl.carousel.min.js'}}}"></script>
<script src="{{{'public/frontend/js/jquery.nicescroll.min.js'}}}"></script>
<script src="{{{'public/frontend/js/main.js'}}}"></script>

<!-- JavaScript -->
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

<script>
    function AddCart(spMa){
       $.ajax({
        url:'AddCart/'+spMa,
        type:'GET',
       }).done(function(response){
            //console.log(response);  
           Render(response);
               alertify.success('Thêm vào giỏ hàng thành công !');     
       }); 
    }
     $("#change__item__cart").on('click',".si-close i", function(){
        //console.log($(this).data("id"));
         $.ajax({
        url:'DeleteItem/'+$(this).data("id"),
        type:'GET',
       }).done(function(response){
            //console.log(response);  
            Render(response);
               alertify.success('Đã xóa sản phẩm khỏi giỏ hàng !');     
       }); 
     });

     function Render(response)
     {
         $("#change__item__cart").empty();   
         $("#change__item__cart").html(response); 
         $('#total__quanty').text($('#input__total__quanty').val());
     }

     //JS for view cart(shop-cart.blade.php)
    function DeleteListItem(spMa)
    {
          $.ajax({
        url:'DeleteListItem/'+spMa,
        type:'GET',
       }).done(function(response){
            $("#change__view__cart").empty();   
         $("#change__view__cart").html(response);

         alertify.success('Đã xóa sản phẩm khỏi giỏ hàng !');     
       }); 
    }
</script>
</body>

</html>