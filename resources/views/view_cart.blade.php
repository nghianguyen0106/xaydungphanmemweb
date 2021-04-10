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
                                   <td id="cart__close" class="cart__close">
                                        <i class="ti-close" data-id="{{$item['productInfo']->spMa}}">X</i>
                                    </td>
                                </tr>
                                @endforeach
                                @endif
                               
                            </tbody>
                        </table>
                    </div>