@extends('layout')
@section('user_content')




 
    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="./index.html"><i class="fa fa-home"></i> Home</a>
                        <span>Shop</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Shop Section Begin -->
    <section class="shop spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="shop__sidebar">
                        <div class="sidebar__categories">
                             <form action="{{URL::to('/tim-kiem')}}" method="get">
                            <input class="form-control"  type="text" name="search_text" placeholder="tìm..." size="12">
                            <input type="submit" name="search-item" class="btn btn-success" value="Tìm">
                         </form>
                         <form action="{{URL::to('findcate')}}" method="get" accept-charset="utf-8">
                            <select class="form-control"  name="loai">
                                  @foreach($l as $loai )
                                   <option value="{{$loai->loaiMa}}"><a href="#">{{$loai->loaiTen}}</a></option>
                                   @endforeach
                            </select>
                            <button type="submit" class="btn btn-success">Tìm</button>
                                 
                         </form>
                        </div>
                    </div>
                </div>

                {{-- List of product --}}
                <div class="col-lg-9 col-md-9">
                    <div class="row">
                       @foreach($db as $item)
                                <div class="col-lg-4 col-md-6">
                            <div class="product__item sale">
                                <div class="product__item__pic set-bg" data-setbg="">
                                    <img src="{{{'public/frontend/img/'.$item->spHinh}}}" alt="hinh">
                                {{--     <div class="label">Sale</div> --}}
                                    <ul class="product__hover">
                                        <li><a onclick="AddCart({{ $item->spMa }})" href="javascript:"><span class="icon_bag_alt"></span></a>Thêm vào giỏ hàng</li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="#">{{ $item->spTen }}</a></h6>
                                
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    
                                    <div class="product__price">{{ $item->spGia}} <span>$ 59.0</span></div>
                                </div>
                            </div>
                        </div>
                      @endforeach
                        <div class="col-lg-12 text-center">
                            <div class="pagination__option">
                                <a href="#">1</a>
                                <a href="#">2</a>
                                <a href="#">3</a>
                                <a href="#"><i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shop Section End -->

    <!-- Instagram Begin -->
    <div class="instagram">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                    <div class="instagram__item set-bg" data-setbg="{{{'public/frontend/img/instagram/insta-1.jpg'}}}">
                        <div class="instagram__text">
                            <i class="fa fa-instagram"></i>
                            <a href="#">@ ashion_shop</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                    <div class="instagram__item set-bg" data-setbg="{{{'public/frontend/img/instagram/insta-2.jpg'}}}">
                        <div class="instagram__text">
                            <i class="fa fa-instagram"></i>
                            <a href="#">@ ashion_shop</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                    <div class="instagram__item set-bg" data-setbg="{{{'public/frontend/img/instagram/insta-3.jpg'}}}">
                        <div class="instagram__text">
                            <i class="fa fa-instagram"></i>
                            <a href="#">@ ashion_shop</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                    <div class="instagram__item set-bg" data-setbg="{{{'public/frontend/img/instagram/insta-4.jpg'}}}">
                        <div class="instagram__text">
                            <i class="fa fa-instagram"></i>
                            <a href="#">@ ashion_shop</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                    <div class="instagram__item set-bg" data-setbg="{{{'public/frontend/img/instagram/insta-5.jpg'}}}">
                        <div class="instagram__text">
                            <i class="fa fa-instagram"></i>
                            <a href="#">@ ashion_shop</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                    <div class="instagram__item set-bg" data-setbg="{{{'public/frontend/img/instagram/insta-6.jpg'}}}">
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
@endsection
