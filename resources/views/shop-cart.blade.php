@extends('layout')
@section('user_content')


    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="./index.html"><i class="fa fa-home"></i> Home</a>
                        <span>Shopping cart</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Shop Cart Section Begin -->

    <section class="shop-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div id="change__view__cart">
                    <div class="shop__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(Session::has('Cart')!=null)
                                @foreach(Session::get('Cart')->products as $item)
                                <tr>
                                    <td class="cart__product__item">
                                        <img src="{{{'public/frontend/img/'.$item['productInfo']->spHinh}}}" alt="">
                                        <div class="cart__product__item__title">
                                            <h6>{{$item['productInfo']->spTen}}</h6>
                                           
                                        </div>
                                    </td>
                                    <td class="cart__price">{{number_format($item['productInfo']->spGia)}}</td>
                                    <td class="cart__quantity">
                                        <div class="">
                                            {{$item['quanty']}}
                                        </div>
                                    </td>
                                    <td class="cart__total">{{number_format($item['price'])}}</td>
                                   <td id="cart__close" class="cart__close" onclick="DeleteListItem()">
                                        <i class="ti-close" onclick="DeleteListItem({{$item['productInfo']->spMa}})" data-id="{{$item['productInfo']->spMa}}">X</i>
                                    </td>
                                </tr>
                                @endforeach
                                @endif
                               
                            </tbody>
                        </table>
                    </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="cart__btn">
                        <a href="#">Continue Shopping</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="cart__btn update__btn">
                        <a href="{{URL::to('/shop-cart')}}"><span class="icon_loading"></span> Update cart</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="discount__content">
                      
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-2">
                    <div class="cart__total__procced">
                        <h6>Cart total</h6>
                        <ul>
                            <li>Tổng số lượng: <span>{{number_format(Session::get('Cart')->totalQuanty)}}</span></li>
                            <li>Tổng tiền: <span>{{number_format(Session::get('Cart')->totalPrice)}}VND</span></li>
                        </ul>

                   
                             <a href="{{URL::to('/thanhtoan')}}" class="site-btn" name="btn_thanhtoan" type="submit">Thanh toán</a>
                   
                     
                    </div>
                </div>
            </div>
        </div>
    </section>
   
    <!-- Shop Cart Section End -->

 
    
@endsection