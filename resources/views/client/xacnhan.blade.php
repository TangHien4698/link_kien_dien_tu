<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" class="flexbox">
<head>
    <link rel="shortcut icon" href="//theme.hstatic.net/1000069225/1000590042/14/favicon.png?v=152" type="image/png" />
    <title>
        Hshop.vn - Thanh toán đơn hàng
    </title>


    <meta name="description" content="Hshop.vn - Thanh to&#225;n đơn h&#224;ng" />

    <link href='//hstatic.net/0/0/global/checkouts.css?v=1.1' rel='stylesheet' type='text/css'  media='all'  />
    <link href='//theme.hstatic.net/1000069225/1000590042/14/check_out.css?v=152' rel='stylesheet' type='text/css'  media='all'  />
    <script src='//hstatic.net/0/0/global/jquery.min.js' type='text/javascript'></script>

    <script src='//hstatic.net/0/0/global/jquery.validate.js' type='text/javascript'></script>

    <style>
        .mainbar-qr h2 {
            text-align: center;
            font-size: 16px;
            margin-bottom: 30px;
            font-weight: 500;
            color: #212121;
        }
        .mainbar-info .mainbar-qr_section {
            text-align: center;
        }
        .mainbar-info .mainbar-qr_section .count_time {
            margin-bottom: 10px;
            margin-top: 30px;
        }
        .mainbar-info .mainbar-qr_section .count_time .time-out {
            color: #008fe5;
        }
        .mainbar-info .mainbar-qr_section .count_time .count_text {
            margin-bottom: 10px;
        }
        .mainbar-info .mainbar-qr_section .count_time .time {
            display: inline-block;
            position: relative;
            font-style: italic;
            font-size:12px;
        }
        .mainbar-info .mainbar-qr_section .count_time .time i {
            width: 10px;
            height: 10px;
            border: 1px solid #333;
            border-bottom-color: transparent;
            border-radius: 100%;
            position: absolute;
            top: 50%;
            left: -14px;
            margin-top: -6px;
            margin-left: -6px;
            opacity: 1;
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=" 0 ")";
            filter: alpha(opacity=0);
            -webkit-animation: rotate 0.5s linear infinite;
            animation: rotate 0.5s linear infinite;
            opacity: 1;
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=" 100 ")";
            filter: alpha(opacity=100);
        }
        .mainbar-info .mainbar-qr_instruction {
            max-width: 300px;
            margin: auto;
            text-align: center;
            color: #212121;
            line-height: 24px;
        }

        form#form_update_shipping_method {
            position: relative;
        }
        .order-checkout__loading { position: static; }
        .order-checkout__loading--box{
            position: absolute;
            left: 0;
            top: 0;
            z-index: -1;
            width: 100%;
            height: 100%;
            display: -webkit-flex;
            display: flex;
            opacity: 0;
            visibility: hidden;
            justify-content: center;
            align-items: center;
            padding: 0;
        }
        .order-checkout__loading--box.show {
            z-index: 2;
            visibility: visible;
            opacity: 1;
        }
        .order-checkout__loading--circle {
            border: 2px solid #f3f3f3;
            border-top: 2px solid #5cabe0;
            border-radius: 50%;
            width: 32px;
            height: 32px;
            margin: 0;
            -webkit-transform-origin: 50%;
            -o-transform-origin: 50%;
            -ms-transform-origin: 50%;
            transform-origin: 50%;
            -moz-animation: spin 700ms infinite linear;
            -ms-animation: spin 1.5s infinite linear;
            -webkit-animation: spin 700ms infinite linear;
            -o-animation: spin 700ms infinite linear;
            animation: spin 700ms infinite linear;
            z-index: 1;
        }
        .order-checkout__loading--box.show:after {
            content: "";
            position: fixed;
            width: 100%;
            height: 100%;
            left: 0;
            top: 0;
            z-index: 3;
        }


        .step-sections { position: relative; z-index: 3; }

        @media (max-width: 767px){
            .order-checkout__loading--box{ position: fixed; }
            .order-checkout__loading--box.show:after { display: none; }
        }


        .order-checkout__loading--show .order-checkout__loading--box {
            display:block;
        }


        @-moz-keyframes spin {
            100% {
                -moz-transform: rotate(360deg);
            }
        }

        @-webkit-keyframes spin {
            100% {
                -webkit-transform: rotate(360deg);
            }
        }

        @keyframes spin {
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }
        .redeem-login {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .redeem-login-title {
            position: relative;
            display: flex;
            flex-wrap: wrap;
        }
        .redeem-login-title h2 {
            color: #333;
            margin-right: 5px;
        }
        .redeem-login-btn a {
            display: inline-block;
            border-radius: 4px;
            font-weight: 500;
            padding: 13px 10px;
            background: #338dbc;
            color: #fff;
            width: 82px;
            text-align: center;
        }
        .redeem-form-used
        {
            padding-top : 10px;
        }
        .btn-redeem-loading .btn-redeem-spinner {
            -webkit-animation: rotate 0.5s linear infinite;
            animation: rotate 0.5s linear infinite;
            opacity: 1;
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=" 100 ")";
            filter: alpha(opacity=100);
        }
        .icon-redeem-button-spinner {
            position: absolute;
            top: 0;
            opacity: 0;
            right: -25px;
            width: 12px;
            height: 12px;
            border: 2px solid #999999;
            border-bottom-color: transparent;
            border-radius: 100%;
        }
        .total-line-table-footer {
            white-space: nowrap;
        }
        .row-align-top {
            vertical-align: top;
        }
    </style>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2, user-scalable=no">
    <script type="text/javascript">
        var parseQueryString = function(url) {

            var str = url;
            var objURL = {};

            str.replace(
                new RegExp("([^?=&]+)(=([^&]*))?", "g"),
                function($0, $1, $2, $3) {

                    if($3 != undefined && $3 != null)
                        objURL[$1] = decodeURIComponent($3);
                    else
                        objURL[$1] = $3;
                });

            return objURL;
        };
    </script>
</head>
<body>
<input id="reloadValue" type="hidden" name="reloadValue" value="" />
<input id="is_vietnam" type="hidden" value="true" />
<input id="is_vietnam_location" type="hidden" value="true" />
<div class="banner">
    <div class="wrap">
        <a href="/" class="logo">
            <h1 class="logo-text">Hshop.vn</h1>
        </a>
    </div>
</div>
<button class="order-summary-toggle order-summary-toggle-hide">
    <div class="wrap">
        <div class="order-summary-toggle-inner">
            <div class="order-summary-toggle-icon-wrapper">
                <svg width="20" height="19" xmlns="http://www.w3.org/2000/svg" class="order-summary-toggle-icon"><path d="M17.178 13.088H5.453c-.454 0-.91-.364-.91-.818L3.727 1.818H0V0h4.544c.455 0 .91.364.91.818l.09 1.272h13.45c.274 0 .547.09.73.364.18.182.27.454.18.727l-1.817 9.18c-.09.455-.455.728-.91.728zM6.27 11.27h10.09l1.454-7.362H5.634l.637 7.362zm.092 7.715c1.004 0 1.818-.813 1.818-1.817s-.814-1.818-1.818-1.818-1.818.814-1.818 1.818.814 1.817 1.818 1.817zm9.18 0c1.004 0 1.817-.813 1.817-1.817s-.814-1.818-1.818-1.818-1.818.814-1.818 1.818.814 1.817 1.818 1.817z"></path></svg>
            </div>
            <div class="order-summary-toggle-text order-summary-toggle-text-show">
                <span>Hiển thị thông tin đơn hàng</span>
                <svg width="11" height="6" xmlns="http://www.w3.org/2000/svg" class="order-summary-toggle-dropdown" fill="#000"><path d="M.504 1.813l4.358 3.845.496.438.496-.438 4.642-4.096L9.504.438 4.862 4.534h.992L1.496.69.504 1.812z"></path></svg>
            </div>
            <div class="order-summary-toggle-text order-summary-toggle-text-hide">
                <span>Ẩn thông tin đơn hàng</span>
                <svg width="11" height="7" xmlns="http://www.w3.org/2000/svg" class="order-summary-toggle-dropdown" fill="#000"><path d="M6.138.876L5.642.438l-.496.438L.504 4.972l.992 1.124L6.138 2l-.496.436 3.862 3.408.992-1.122L6.138.876z"></path></svg>
            </div>
            <div class="order-summary-toggle-total-recap" data-checkout-payment-due-target="2600000">
                <span class="total-recap-final-price">26,000₫</span>
            </div>
        </div>
    </div>
</button>
<div class="content content-second">
    <div class="wrap">
        <div class="sidebar sidebar-second">
            <div class="sidebar-content">
                <div class="order-summary">
                    <div class="order-summary-sections">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<form  method="post" action="{{url('xacnhan')}}">
    {{ csrf_field() }}
    <div class="content">
        <div class="wrap">
            <div class="sidebar">
                <div class="sidebar-content">
                    <div class="order-summary order-summary-is-collapsed">
                        <h2 class="visually-hidden">Thông tin đơn hàng</h2>
                        <div class="order-summary-sections">
                            <div class="order-summary-section order-summary-section-product-list" data-order-summary-section="line-items">
                                <table class="product-table">
                                    <thead>
                                    <tr>
                                        <th scope="col"><span class="visually-hidden">Hình ảnh</span></th>
                                        <th scope="col"><span class="visually-hidden">Mô tả</span></th>
                                        <th scope="col"><span class="visually-hidden">Số lượng</span></th>
                                        <th scope="col"><span class="visually-hidden">Giá</span></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($Cart as $value)
                                    <tr class="product" data-product-id="1014702604" data-variant-id="1027927726">
                                        <td class="product-image">
                                            <div class="product-thumbnail">
                                                <div class="product-thumbnail-wrapper">
                                                    <img class="product-thumbnail-image" alt="Mạch hiển thị 2 led 7 đoạn 0.5 inch 74HC595" src="{{url('/img/'.$value->products->toArray()[0]['image'])}}" />
                                                </div>
                                                <span class="product-thumbnail-quantity" aria-hidden="true">{{$value->soluong}}</span>
                                            </div>
                                        </td>
                                        <td class="product-description">
                                            <span class="product-description-name order-summary-emphasis">{{$value->pro_name}}</span>
                                        </td>
                                        <td class="product-quantity visually-hidden">{{$value->soluong}}</td>
                                        <td class="product-price">
                                            <span class="order-summary-emphasis">{{number_format($value->products->toArray()[0]['price'])}}₫</span>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="order-summary-section order-summary-section-total-lines payment-lines" data-order-summary-section="payment-lines">
                                <table class="total-line-table">
                                    <thead>
                                    <tr>
                                        <th scope="col"><span class="visually-hidden">Mô tả</span></th>
                                        <th scope="col"><span class="visually-hidden">Giá</span></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                    <tfoot class="total-line-table-footer">
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main">
                <div class="main-header">
                    <a href="/" class="logo">
                        <h1 class="logo-text">Hshop.vn</h1>
                    </a>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="/cart">Giỏ hàng</a>
                        </li>
                        <li class="breadcrumb-item breadcrumb-item-current">
                            Thông tin giao hàng
                        </li>
                    </ul>
                </div>
                <div class="main-content">
                    <div class="step">
                        <div class="step-sections steps-onepage" step="1">
                            <div class="section">
                                <div class="section-header">
                                    <h2 class="section-title">Thông tin giao hàng</h2>
                                </div>
                                <div class="section-content section-customer-information no-mb">
                                    <div class="fieldset">
                                        <div class="field field-required  ">
                                            <div class="field-input-wrapper">
                                                <label class="field-label" for="billing_address_full_name">Họ và tên</label>
                                                <input placeholder="Họ và tên" autocapitalize="off" spellcheck="false" class="field-input" size="30" type="text" id="billing_address_full_name" name="name" value="{{$infor->name}}" readonly/>
                                            </div>
                                        </div>
                                        <div class="field field-required field-two-thirds  ">
                                            <div class="field-input-wrapper">
                                                <label class="field-label" for="checkout_user_email">Email</label>
                                                <input placeholder="Email" autocapitalize="off" spellcheck="false" class="field-input" size="30" type="email" id="checkout_user_email" name="email" value="{{$infor->email}}" />
                                            </div>
                                        </div>
                                        <div class="field field-required field-third  ">
                                            <div class="field-input-wrapper">
                                                <label class="field-label" for="billing_address_phone">Số điện thoại</label>
                                                <input placeholder="Số điện thoại" autocapitalize="off" spellcheck="false" class="field-input" size="30" maxlength="11" type="tel" id="billing_address_phone" name="phone" value="{{$infor->phone_number}}" />
                                            </div>
                                        </div>
                                        <div class="field field-required  ">
                                            <div class="field-input-wrapper">
                                                <label class="field-label" for="billing_address_address1">Địa chỉ</label>
                                                <input placeholder="Địa chỉ" autocapitalize="off" spellcheck="false" class="field-input" size="30" type="text" id="billing_address_address1" name="address" value="{{$infor->address}}" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="section-content">
                                    <div class="fieldset">
                                        <input name="selected_customer_shipping_province" type="hidden" value="">
                                        <input name="selected_customer_shipping_district" type="hidden" value="">
                                        <input name="selected_customer_shipping_ward" type="hidden" value="">
                                        <input name="utf8" type="hidden" value="✓">
                                        <div class="order-checkout__loading--box">
                                            <div class="order-checkout__loading--circle"></div>
                                        </div>
</div>
</div>
<div id="change_pick_location_or_shipping">
    <div id="section-payment-method" class="section">
        <div class="section-header">
            <h2 class="section-title">Phương thức thanh toán</h2>
        </div>
        <div class="section-content">
            <div class="content-box">
                <div class="radio-wrapper content-box-row">
                    <label class="radio-label" for="payment_method_id_1023982">
                        <div class="radio-input">
                            <input id="payment_method_id_1023982" class="input-radio" name="payment_method_id" type="radio" value="1" checked />
                        </div>
                        <span class="radio-label-primary">Thanh toán khi nhận hàng (COD)</span>
                    </label>
                </div>
                <div class="radio-wrapper content-box-row">
                    <label class="radio-label" for="payment_method_id_1023980">
                        <div class="radio-input">
                            <input id="payment_method_id_1023980" class="input-radio" name="payment_method_id" type="radio" value="2"  />
                        </div>
                        <span class="radio-label-primary">Chuyển khoản Online</span>
                    </label>
                </div>
            </div>
        </div>
    </div>

</div>
</div>
</div>
<div class="step-footer">
{{--    <form id="form_next_step" accept-charset="UTF-8" method="post">--}}
        <input name="utf8" type="hidden" value="✓">
{{--        <button type="submit" class="step-footer-continue-btn btn">--}}
{{--            <span class="btn-content">Hoàn tất đơn hàng</span>--}}
{{--            <i class="btn-spinner icon icon-button-spinner"></i>--}}
{{--        </button>--}}

    <button type="submit" class="test">
        <span class="btn">Hoàn tất đơn hàng</span>
    </button>
{{--    </form>--}}
</div>
</div>
</div>
<div class="main-footer">
</div>
</div>
</div>
</div>
</form>
</body>
</html>
