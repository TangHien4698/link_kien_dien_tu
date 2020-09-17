
@extends('client.layout')
@section('content')
    <div class="page-camon content-page">
        <div class="container-waper">
            <div class="contet-page-camon">
                <div class="hd-page-camon">
                    <h1 style="text-align: center"> Cảm ơn quý khách đã mua hàng tại cửa hàng của chúng tôi</h1>
                    <p class="text-page-camon">
                        Cảm ơn quý khách đã tin tưởng đặt hàng của chúng tôi. đơn hàng của quý khách sẽ được sử lý
                        và giao tới khách hàng trong thời gian sớm nhất.
                    </p>
                </div>
                <div class="table-page-camon">
                    <div class="nd-donhang">
                        <div class="item-donhang item1">
                            <div class="td-nd-donhang">
                                <h3 style="text-align: center;">Thông tin đơn hàng</h3>
                            </div>
                            <div class="info-nd">
                                <div class="info-nd1">
                                    <p class="text-nd">Mã đơn hàng :{{$inforProduct->id}}<span> </span></p>
                                </div>
                                <div class="info-nd2">
                                    <p class="text-nd">Ngày :{{$inforProduct->created_at}}<span></span></p>
                                </div>
                                <div class="info-nd3">
                                    <p class="text-nd">Giá đơn hàng :{{number_format($inforProduct->total_money) }}<span></span> vnđ</p>
                                </div>
                            </div>
                        </div>
                        <div class="item-donhang item2">
                            <div class="td-nd-donhang">
                                <h3 style="text-align: center">Thông tin giao hàng</h3>
                            </div>
                            <div class="info-nd">
                                <div class="info-nd1">
                                    <p class="text-nd">Tên người nhận :{{$inforProduct->receiver_name}}<span></span></p>
{{--                                    <p class="text-nd">Email :{{$inforProduct->receiver_name}}<span></span></p>--}}
                                </div>
                                <div class="info-nd2">
                                    <p class="text-nd">Số điện thoại :{{$inforProduct->receiver_phone_number}}<span></span></p>
                                    <p class="text-nd">Địa chỉ :{{$inforProduct->receiver_address}}<span> </span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-bt-page-camon">
                    <p class="text-camon">Quý khách vui lòng thanh toán với nội dung “<span class="text-main-camon"> Thanh toán đơn hàng </span>
                        " sau khi nhận được thanh toán chúng tôi sẽ liên lạc
                        lại để xác minh đơn hàng
                    </p>
                </div>
            </div>
        </div>
        <div class="button-home">
            <a href="{{url('/')}}">Trở về trang chủ</a>
        </div>
    </div>
@endsection

