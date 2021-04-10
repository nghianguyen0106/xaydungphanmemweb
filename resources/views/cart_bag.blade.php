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
                                    <span>total:{{number_format(Session::get('Cart')->totalPrice)}}VND</span>
                                   <input id="input__total__quanty" hidden type="number" value="{{Session::get('Cart')->totalQuanty}}"  />
                                </div>

                                <div class="select-button">
                                    <a href="{{URL::to('/shop-cart')}}" class="primary-btn view-card">Xem chi tiết giỏ hàng</a>
                                    <a href="#" class="primary-btn checkout-btn">CHECK OUT</a>
                                </div>
                            </div>
@endif 