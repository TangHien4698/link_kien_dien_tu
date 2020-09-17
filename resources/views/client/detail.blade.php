
@extends('client.layout')
@section('content')
        <div id="Wrapper">

            <div class="breadcrumb">
                <ul>
                    <li><a href="{{url('/')}}" target="_self">Trang chủ</a></li>
                    <li class="active"><span>{{$inforProduct->name}}</span></li>
                </ul>
            </div>
            <div id="main-slider-mobile" >
                <div id="slider_img_mobile">

                    <div class="swiper-container">
                        <div class="swiper-wrapper">

                            <div class="swiper-slide">			<a href="https://hshop.vn/collections/raspberry-pi"><img src="//theme.hstatic.net/1000069225/1000590042/14/slideshow_1.png?v=152" style="width: 100%; height: auto;" /></a></div>

                            <div class="swiper-slide">			<a href="https://hshop.vn/blogs/tin-tuc-hshopvn/hshop-vn-la-dai-ly-uy-quyen-chinh-thuc-cua-waveshare-tai-viet-nam"><img src="//theme.hstatic.net/1000069225/1000590042/14/slideshow_2.png?v=152" style="width: 100%; height: auto;" /></a></div>

                            <div class="swiper-slide">			<a href="https://hshop.vn/blogs/bai-viet-hshop/hshop-vn-chinh-thuc-la-dai-ly-uy-quyen-cua-arduino-cc-tai-viet-nam"><img src="//theme.hstatic.net/1000069225/1000590042/14/slideshow_3.png?v=152" style="width: 100%; height: auto;" /></a></div>
                            <div class="swiper-slide">			<a href="https://hshop.vn/blogs/bai-viet-hshop/hshop-vn-chinh-thuc-la-dai-ly-uy-quyen-cua-seeed-studio-tai-viet-nam"><img src="//theme.hstatic.net/1000069225/1000590042/14/slideshow_4.png?v=152" style="width: 100%; height: auto;" /></a></div>

                        </div>
                        <!-- Add Pagination -->

                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div><!--end #main-slider-->

            <div id="wrap-detail" class="main-right col-sm-12 col-xs-12">
                <div class="product-title">
                    <h1 class="title-product-detail"><p align="center" class="text-center">{{$inforProduct->name}}</p></h1>
                </div>
                <div id="wrap-detail-container">
                    <div id="detail-content">
                        <div class="col-lg-7 col-xs-12 detail-content-left">
                            <div id="product-top-sub-left">
                                <div id="slider" class="flexslider">
                                    <ul class="slides">
                                        <img id="productImage" src="{{url('/img/'.$inforProduct->image)}}" alt="M&#225;y t&#237;nh Raspberry Pi 4 Model B (Made in UK)"/>
                                    </ul>
                                </div>

                            </div><!--end #product-top-sub-left-->
                        </div><!--end .col-lg-7 col-xs-12 detail-content-left-->
                        <div class="col-lg-5 col-xs-12 detail-content-right">
                            <div class="row">
                                <div class="col-lg-12 col-ms-12 col-sm-6 col-xs-12 box-detail-content-right-1">
                                    <div class="ProductMain">
                                        <div class="ProductDetailsGrid">
                                            <div class="Row SKU">
                                                <div class="ProductManufacture">
                                                    <br>
                                                    <strong>Mã sản phẩm:</strong>{{$inforProduct->id}}
                                                </div>
                                                <div class="Clear"></div>
                                            </div>
                                            <div class="Row Price">
									<span class="LabelPrice">
										Giá bán</span>
                                                <div class="ProductPrice VariationProductPrice price">
                                                    <span id="our_price_display" class="price-detail">{{number_format($inforProduct->price)}}₫ </span>
                                                </div>
                                            </div>
                                            <form action="/cart/add" method="post" enctype="multipart/form-data" id="addToCartForm">
                                                <select name="id" id="product-select" class="product-variants" style="display:none" onchange='console.log("gfhgfH")'>
                                                    <option  selected="selected"  value="1042810743">2GB RAM - 1,360,000₫
                                                    </option>
                                                    <option  value="1042810752">4GB RAM - 1,780,000₫
                                                    </option>
                                                    <option  value="1057738075">8GB RAM - 2,380,000₫
                                                    </option>
                                                </select>
                                                <ul class="ProductField">
                                                </ul>
                                                <div class="DetailRow">
                                                    <div class="Row AddCartButton ProductAddToCart">
                                                        <div id="wrap-number-quantily" class="LabelQuantityInput">
                                                            <label for="quantity" class="quantity-selector">Số lượng</label>
                                                            <input type="number" id="quantity" name="quantity" value="1" min="1" class="quantity-selector quantity-input">
                                                        </div>
                                                        <div id="BulkDiscount">

                                                            <p class="soldout-text hidden">Tạm hết hàng</p>

{{--                                                            <div class="bis-btnregister hidden" onclick="showBackInStockModal()"><span>EMAIL KHI CÓ HÀNG</span></div>--}}

                                                                <span class="icon icon-cart"></span>
                                                                <p id="addCart" class="Cart" data-id="{{$inforProduct->id}}"><i class="fa fa-cart-plus"></i> Thêm vào giỏ hàng</p>

                                                            <span id="variantQuantity" class="variant-quantity"></span>
                                                        </div>

                                                        <div class="Clear"></div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!--end .col-lg-4 col-md-4 col-sm-4 col-xs-12 detail-content-right-->
                    </div><!--end #detail-content-->

                    <div id="detail-des" class="row">
                        <div class="col-lg-12 detail-des-left">
                            <!-- Tab panes -->
                            <div class="tab-content">
                                {{$inforProduct->description}}
                            </div><!--end .tab-content-->
                        </div><!--end .col-lg-8 col-md-8 col-sm-8 col-xs-12 detail-des-left-->
                    </div><!--end #detail-des-->


                    <div class="evaluate-product">
                        <div class="evaluate-star">
                            <div class="widget-star">
                                <p class="product">Đánh giá sản phẩm</p>
                                <div class="flex-box">
                                    <div class="count">
                                        <div class="point">
                                            <div class="score text-center">
                                                <p>{{$dataStar['medium']}}/5</p>
                                                <div class="box-start">
                                                    <?php
                                                    $dd = 0;
                                                    for ($m = 1; $m <= $dataStar['medium']; $m++) {
                                                    $dd++;
                                                    ?>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <?php
                                                    }
                                                    if ($dataStar['medium'] != (int)$dataStar['medium']) {
                                                    $dd++;
                                                    ?>
                                                    <i class="fa fa-star-half" aria-hidden="true"></i>
                                                    <?php
                                                    }
                                                    for ($ll = $dd; $ll < 5; $ll++) {
                                                    ?>
                                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                                    <?php
                                                    }
                                                    ?>
                                                </div>
                                                <a href="">(xem {{$dataStar['count']}} đánh giá)</a>
                                            </div>
                                        </div>
                                        <div class="star">
                                            <ul>
                                                <li>
                                                    <div class="count-star">
                                                        5
                                                    </div>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <div class="tile">
                                                        <div class="tile-1"></div>
                                                        <div class="tile-2"
                                                             style="width: {{ !empty($dataStar['count']) ? round(($dataStar['star5'] / $dataStar['count']) * 100, 0) : 0 }}%"></div>
                                                    </div>
                                                    {{ !empty($dataStar['count']) ? round(($dataStar['star5'] / $dataStar['count']) * 100, 0) : 0 }}%
                                                </li>
                                                <li>
                                                    <div class="count-star">
                                                        4
                                                    </div>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <div class="tile">
                                                        <div class="tile-1"></div>
                                                        <div class="tile-2"
                                                             style="width: {{ !empty($dataStar['count']) ? round(($dataStar['star4'] / $dataStar['count']) * 100, 0) : 0 }}%"></div>
                                                    </div>
                                                    {{ !empty($dataStar['count']) ? round(($dataStar['star4'] / $dataStar['count']) * 100, 0) : 0 }}%
                                                </li>
                                                <li>
                                                    <div class="count-star">
                                                        3
                                                    </div>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <div class="tile">
                                                        <div class="tile-1"></div>
                                                        <div class="tile-2"
                                                             style="width: {{ !empty($dataStar['count']) ? round(($dataStar['star3'] / $dataStar['count']) * 100, 0) : 0 }}%"></div>
                                                    </div>
                                                    {{ !empty($dataStar['count']) ? round(($dataStar['star3'] / $dataStar['count']) * 100, 0) : 0 }}%
                                                </li>
                                                <li>
                                                    <div class="count-star">
                                                        2
                                                    </div>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <div class="tile">
                                                        <div class="tile-1"></div>
                                                        <div class="tile-2"
                                                             style="width: {{ !empty($dataStar['count']) ? round(($dataStar['star2'] / $dataStar['count']) * 100, 0) : 0 }}%"></div>
                                                    </div>
                                                    {{ !empty($dataStar['count']) ? round(($dataStar['star2'] / $dataStar['count']) * 100, 0) : 0 }}%
                                                </li>
                                                <li>
                                                    <div class="count-star">
                                                        1
                                                    </div>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <div class="tile">
                                                        <div class="tile-1"></div>
                                                        <div class="tile-2"
                                                             style="width: {{ !empty($dataStar['count']) ? round(($dataStar['star1'] / $dataStar['count']) * 100, 0) : 0 }}%"></div>
                                                    </div>
                                                    {{ !empty($dataStar['count']) ? round(($dataStar['star1'] / $dataStar['count']) * 100, 0) : 0 }}%
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="form-evaluate">
                                        <div class="form-buy">
                                            <form action="{{url('san-pham/danhgiasao-binhluan')}}" id="ratetingstarform" method="post">
                                                {{ csrf_field() }}
                                                <input type="hidden" name="action" value="ratetingstarform">
                                                <div class="form-row">
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-12 mb-3">
                                                                <textarea placeholder="Nội dung" name="content"
                                                                          id="exampleFormControlTextarea1"
                                                                          rows="4"></textarea>
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <div class="box-star-button">
                                                            <p>Đánh giá</p>
                                                            <ul id='stars'>
                                                                <li class='star' data-value='1'>
                                                                    <i class='fa fa-star fa-fw'></i>
                                                                </li>
                                                                <li class='star' data-value='2'>
                                                                    <i class='fa fa-star fa-fw'></i>
                                                                </li>
                                                                <li class='star' data-value='3'>
                                                                    <i class='fa fa-star fa-fw'></i>
                                                                </li>
                                                                <li class='star' data-value='4'>
                                                                    <i class='fa fa-star fa-fw'></i>
                                                                </li>
                                                                <li class='star' data-value='5'>
                                                                    <i class='fa fa-star fa-fw'></i>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <input type="hidden" id="staring" name="star" value="">
                                                        <input type="hidden" id="name_sp" name="id_sanpham" value="{{$inforProduct->id}}">
                                                    </div>
                                                    <div class="col-md-6 mb-3 button_rateting_c">
                                                        <button type="submit" class="btn btn-primary button_rateting" name="button_danhgiasao"
                                                                data-toggle="tooltip"
                                                                title="Chọn đánh giá sao trước khi gửi" value="danh_gia_sao" >Gửi
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="customer-reviews">
                            <div class="title">
                                <h5>Nhận xét của khách hàng</h5>
                                <div class="comment">
                                    <form action="">
                                        <div class="form-group" style="display: none">
                                            <select class="form-control" id="exampleFormControlSelect1">
                                                <option>Mới nhất</option>
                                                <option>Nhiều like nhất</option>
                                            </select>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            @foreach($dataComment as $value)
                            <div class="box-comment-user">
                                <div class="avatar">
                                    <div class="images">
                                        <img class="img-thumb"
                                             src="http://alctienliettuyen.wecan-group.info/wp-content/themes/alc_tien_liet_tuyen/vendor/images/no-avatar.gif"
                                             alt="" style="width: 100%">
                                    </div>
                                    <p>{{$value->user_id}}</p>
                                    <span>{{$value->created_at}}</span>
                                </div>
                                <div class="comment-content">
                                    <div class="box-star">
                                        <div class="box">
                                            <?php
                                            $dd = 0;
                                            for ($m = 1; $m <= $value->number_star; $m++) {
                                            $dd++;
                                            ?>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <?php
                                            }
                                            if ($value->number_star != (int)$value->number_star) {
                                            $dd++;
                                            ?>
                                            <i class="fa fa-star-half" aria-hidden="true"></i>
                                            <?php
                                            }
                                            for ($ll = $dd; $ll < 5; $ll++) {
                                            ?>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <?php
                                            }
                                            ?>
                                        </div>
{{--                                        <p>ALC Cầu giấy</p>--}}
                                    </div>
                                    <p>{{$value->content}}</p>

                                </div>
                            </div>
                            @endforeach
                        </div>
                        </div>
                    </div><!--end .container-->
                </div><!--end #wrap-details-->

                </div>

                <!-- Placed at the end of the document so the pages load faster -->
                <script>
                    $(document).ready(function() {
                        $("#slide-item-product").owlCarousel({
                            autoPlay: 10000,
                            items : 1,
                            itemsDesktop : [1199,1],
                            mouseDrag : true,
                            itemsScaleUp: true,
                            navigation : true,
                        });
                        $(".prod_slider").owlCarousel({
                            autoPlay: true,
                            items : 4,
                            itemsDesktop : [1199,4],
                            itemsDesktopSmall:	[979,4],
                            itemsTablet:	[768,3],
                            itemsMobile:	[479,2],
                            mouseDrag : true,
                            navigation : true,
                            pagination : false,
                        });

                    });
                </script>

                <!-- END JS BOX RIGHT DETAIL -->

                <!-- JS BOX LEFT SLIDER DETAIL -->
{{--                <script type="text/javascript">--}}
{{--                    // JS SLIDER--}}
{{--                    $(window).load(function(){--}}
{{--                        $('#carousel').flexslider({--}}
{{--                            animation: "slide",--}}
{{--                            controlNav: false,--}}
{{--                            animationLoop: false,--}}
{{--                            slideshow: false,--}}
{{--                            itemWidth: 106,--}}
{{--                            itemMargin: 5,--}}
{{--                            asNavFor: '#slider'--}}
{{--                        });--}}

{{--                        $('#slider').flexslider({--}}
{{--                            animation: "slide",--}}
{{--                            controlNav: false,--}}
{{--                            animationLoop: false,--}}
{{--                            slideshow: false,--}}
{{--                            sync: "#carousel",--}}
{{--                            start: function(slider){--}}
{{--                                $('body').removeClass('loading');--}}
{{--                            }--}}
{{--                        });--}}
{{--                    });--}}
{{--                </script>--}}
                <!-- END JS BOX LEFT SLIDER DETAIL -->

{{--                <script>--}}
{{--                    $('.qty-toggle').click(function(){--}}

{{--                        var toggle = $(this).attr('data-toggle');--}}
{{--                        var qtyEl = $('#quantity_wanted');--}}
{{--                        var qty = parseInt( qtyEl.val() );--}}

{{--                        if( toggle == 'minus' ) {--}}
{{--                            if( qty >= 1 ) {--}}
{{--                                qtyEl.attr( 'value', qty - 1 );--}}
{{--                            }--}}

{{--                        } else if( toggle == 'plus' ) {--}}
{{--                            qtyEl.attr( 'value', qty + 1 );--}}

{{--                        }--}}

{{--                        return false;--}}

{{--                    });--}}


{{--                    $('#btn-buy-now').click(function() {--}}
{{--                        var variantId = $(this).attr('data-id');--}}
{{--                        var qty = $('#quantity_wanted');--}}

{{--                        Haravan.addItem( variantId, qty, function( line_item ) {--}}
{{--                            Haravan.getCart( function( cart ) {--}}

{{--                                $('#shop-cart-block .total-item').html( cart.item_count );--}}
{{--                            });--}}
{{--                        });--}}

{{--                    });--}}


{{--                </script>--}}

{{--                <script>--}}
{{--                    jQuery(document).ready(function($){--}}

{{--                        new Haravan.OptionSelectors("product-select", { product: {"available":true,"compare_at_price_max":0.0,"compare_at_price_min":0.0,"compare_at_price_varies":false,"compare_at_price":0.0,"content":null,"description":"<p><span color=\"#ff0000\" data-mce-style=\"color: #ff0000;\" style=\"color: #ff0000;\"><span style=\"font-size: 16px;\" data-mce-style=\"font-size: 16px;\">Quý Khách khi mua Raspberry Pi 4 tại Hshop.vn sẽ được tặng <a data-mce-href=\"https://hshop.vn/products/bo-3-tan-nhiet-raspberry-pi-4-heatsink-co-san-keo-tan-nhiet\" href=\"https://hshop.vn/products/bo-3-tan-nhiet-raspberry-pi-4-heatsink-co-san-keo-tan-nhiet\">Bộ 3 tản nhiệt cho Raspberry Pi 4</a> giúp tăng hiệu quả tản nhiệt.</span></span></p><p><span color=\"#ff0000\" data-mce-style=\"color: #ff0000;\" style=\"color: #ff0000;\"><span style=\"font-size: 16px;\" data-mce-style=\"font-size: 16px;\">Hiện Raspberry Pi 4 Model B đã ngưng sản xuất phiên bản RAM 1GB, chỉ còn bản RAM 2GB/4GB/8GB.</span></span></p><p><span color=\"#ff0000\" style=\"color: #ff0000;\" data-mce-style=\"color: #ff0000;\"><span style=\"font-size: 16px;\" data-mce-style=\"font-size: 16px;\"></span></span><span style=\"color: #ff0000; font-size: 12pt;\" data-mce-style=\"color: #ff0000; font-size: 12pt;\">Quý Khách vui lòng đọc kỹ <a href=\"https://hshop.vn/blogs/bai-viet-hshop/chinh-sach-bao-hanh-raspberry-pi-tai-hshop-vn\" data-mce-href=\"https://hshop.vn/blogs/bai-viet-hshop/chinh-sach-bao-hanh-raspberry-pi-tai-hshop-vn\">Chính sách bảo hành Raspberry Pi tại Hshop.vn trước khi đặt mua máy tại đây!</a></span><br></p><p><span style=\"font-size: 12pt;\" data-mce-style=\"font-size: 12pt;\">Máy tính Raspberry Pi 4 Model B (Made in UK) là phiên bản Raspberry Pi mới nhất hiện nay&nbsp;được Hshop.vn nhập khẩu chính hãng từ RS Component (UK) với những cải tiến vượt trội so với phiên bản cũ: CPU mạnh hơn, tùy chọn Ram 1GB/2GB/4GB,&nbsp;dual-display Micro HDMI 4K,..., là sự lựa chọn phù hợp cho các ứng dụng: IoT, Robot, Smart Home, Media Centre, AI,...</span></p><p><span style=\"font-size: 12pt;\" data-mce-style=\"font-size: 12pt;\"><strong>3 lý do Quý Khách nên lựa chọn mua Raspberry Pi tại Hshop.vn:</strong></span></p><ul><li><span style=\"font-size: 12pt;\" data-mce-style=\"font-size: 12pt;\">Sản phẩm được nhập khẩu chính ngạch từ RS Component (Made in UK), cung cấp hóa đơn tài chính đầy đủ cho Quý Khách nếu cần.</span></li><li><span style=\"font-size: 12pt;\" data-mce-style=\"font-size: 12pt;\"><a href=\"https://hshop.vn/blogs/bai-viet-hshop/chinh-sach-bao-hanh-raspberry-pi-tai-hshop-vn\" data-mce-href=\"https://hshop.vn/blogs/bai-viet-hshop/chinh-sach-bao-hanh-raspberry-pi-tai-hshop-vn\">Chính sách bảo hành 1 năm / 1 đổi 1 / trong 7 ngày nhanh chóng vượt trội.</a></span></li><li><span style=\"font-size: 12pt;\" data-mce-style=\"font-size: 12pt;\">Hỗ trợ kỹ thuật, cài đặt hệ điều hành miễn phí trọn đời cùng với<a href=\"https://hshop.vn/collections/phu-kien-raspberry-pi\" data-mce-href=\"https://hshop.vn/collections/phu-kien-raspberry-pi\">&nbsp;kho phụ kiện Raspberry Pi đa chủng loại</a> giúp Quý Khách thỏa sức chọn lựa.</span></li></ul><p><img src=\"https://file.hstatic.net/1000069225/file/raspberry_pi_4_aff22e7da0544e8884c887a9a81ba5d4.jpg\" style=\"font-size: 12pt;\" data-mce-src=\"https://file.hstatic.net/1000069225/file/raspberry_pi_4_aff22e7da0544e8884c887a9a81ba5d4.jpg\" data-mce-style=\"font-size: 12pt;\"></p><p><span style=\"font-size: 12pt;\" data-mce-style=\"font-size: 12pt;\"><img src=\"https://file.hstatic.net/1000069225/file/raspberry_pi_3_model_b__vs_raspberry_pi_4_c95c3c1d2af7464e921d8bc936cae37c.png\" data-mce-src=\"https://file.hstatic.net/1000069225/file/raspberry_pi_3_model_b__vs_raspberry_pi_4_c95c3c1d2af7464e921d8bc936cae37c.png\"></span></p><p><span style=\"font-size: 12pt;\" data-mce-style=\"font-size: 12pt;\"><strong>Thông số kỹ thuật chi tiết:</strong></span></p><ul><li><span style=\"font-size: 12pt;\" data-mce-style=\"font-size: 12pt;\">Broadcom BCM2711, Quad core Cortex-A72 (ARM v8) 64-bit SoC @ 1.5GHz </span></li><li><span style=\"font-size: 12pt;\" data-mce-style=\"font-size: 12pt;\">2GB or 4GB LPDDR4-2400 SDRAM (depending on model) </span></li><li><span style=\"font-size: 12pt;\" data-mce-style=\"font-size: 12pt;\">2.4 GHz and 5.0 GHz IEEE 802.11ac wireless, Bluetooth 5.0, BLE </span></li><li><span style=\"font-size: 12pt;\" data-mce-style=\"font-size: 12pt;\">Gigabit Ethernet </span></li><li><span style=\"font-size: 12pt;\" data-mce-style=\"font-size: 12pt;\">2 USB 3.0 ports / 2 USB 2.0 ports</span></li><li><span style=\"font-size: 12pt;\" data-mce-style=\"font-size: 12pt;\">Raspberry Pi standard 40 pin GPIO header (fully backwards compatible with previous boards) </span></li><li><span style=\"font-size: 12pt;\" data-mce-style=\"font-size: 12pt;\">2 × micro-HDMI ports (up to 4kp60 supported) </span></li><li><span style=\"font-size: 12pt;\" data-mce-style=\"font-size: 12pt;\">2-lane MIPI DSI display port </span></li><li><span style=\"font-size: 12pt;\" data-mce-style=\"font-size: 12pt;\">2-lane MIPI CSI camera port </span></li><li><span style=\"font-size: 12pt;\" data-mce-style=\"font-size: 12pt;\">4-pole stereo audio and composite video port </span></li><li><span style=\"font-size: 12pt;\" data-mce-style=\"font-size: 12pt;\">H.265 (4kp60 decode), H264 (1080p60 decode, 1080p30 encode) </span></li><li><span style=\"font-size: 12pt;\" data-mce-style=\"font-size: 12pt;\">OpenGL ES 3.0 graphics </span></li><li><span style=\"font-size: 12pt;\" data-mce-style=\"font-size: 12pt;\">Micro-SD card slot for loading operating system and data storage </span></li><li><span style=\"font-size: 12pt;\" data-mce-style=\"font-size: 12pt;\">5V DC via USB-C connector (minimum 3A*) </span></li><li><span style=\"font-size: 12pt;\" data-mce-style=\"font-size: 12pt;\">5V DC via GPIO header (minimum 3A*) </span></li><li><span style=\"font-size: 12pt;\" data-mce-style=\"font-size: 12pt;\">Power over Ethernet (PoE) enabled (requires separate PoE HAT) </span></li><li><span style=\"font-size: 12pt;\" data-mce-style=\"font-size: 12pt;\">Operating temperature: 0 – 50 degrees C ambient </span></li></ul><p><span style=\"font-size: 12pt;\" data-mce-style=\"font-size: 12pt;\"><strong><span style=\"color: #ff0000;\" data-mce-style=\"color: #ff0000;\">Các lưu ý để tránh các hư hỏng thường gặp:</span></strong></span></p><ul><li><span style=\"font-size: 12pt; color: #000000;\" data-mce-style=\"font-size: 12pt; color: #000000;\"><strong></strong>Nguồn sử dụng cho Raspberry Pi 4 Model B phải là loại chất lượng tốt với điện áp cung cấp 5VDC, dòng điện từ 3A trở lên, trường hợp nguồn không đủ dòng sẽ dẫn tới hiện tượng sụt áp, cháy máy.</span></li><li><span style=\"font-size: 12pt;\" data-mce-style=\"font-size: 12pt;\"><span>Các chân GPIO của Raspberry Pi (40 chân cắm Header) nếu giao tiếp điện áp trên (lớn hơn) 3.3V, chân cấp nguồn 3.3V và 5V nếu chạm với GND (Mass) sẽ làm chập nguồn cháy máy ngay lập tức, nếu không có nhu cầu xin Quý Khách vui lòng không sử dụng và nên mua thêm vỏ bảo vệ để tránh chập chạm.</span></span></li><li><span style=\"font-size: 12pt;\" data-mce-style=\"font-size: 12pt;\">Trường hợp Quý Khách cần sử dụng các chân GPIO của Raspberry Pi để giao tiếp với các mạch có mức điện áp giao tiếp lớn hơn 3.3V hoặc sử dụng với mạch điều khiển động cơ thì cần phải mua thêm&nbsp;<a href=\"http://hshop.vn/search?type=product&amp;q=chuyen%20muc%20tin%20hieu\" style=\"font-size: 12pt;\" data-mce-href=\"http://hshop.vn/search?type=product&amp;q=chuyen%20muc%20tin%20hieu\" data-mce-style=\"font-size: 12pt;\">mạch chuyển mức tín hiệu</a>&nbsp;hoặc có thể sử dụng&nbsp;<a href=\"https://hshop.vn/products/grovepi\" data-mce-href=\"https://hshop.vn/products/grovepi\">Mạch Raspberry Pi Grove Shield GrovePi+</a> để giao tiếp với các <a href=\"https://hshop.vn/collections/grove-system\" data-mce-href=\"https://hshop.vn/collections/grove-system\">module có chuẩn kết nối Grove.</a></span></li></ul><p><img src=\"https://file.hstatic.net/1000069225/file/may_tinh_raspberry_pi_4_model_b__made_in_uk__bcc4b31699464c8d9ecdf31975a92a07.jpg\" alt=\"Máy tính Raspberry Pi 4 Model B (Made in UK)\" data-mce-src=\"https://file.hstatic.net/1000069225/file/may_tinh_raspberry_pi_4_model_b__made_in_uk__bcc4b31699464c8d9ecdf31975a92a07.jpg\"></p><p><span style=\"font-size: 12pt;\" data-mce-style=\"font-size: 12pt;\"><strong>Lưu ý Quý Khách có thể mua thêm bộ <a href=\"https://hshop.vn/products/bo-3-tan-nhiet-raspberry-pi-4-heatsink-co-san-keo-tan-nhiet\" data-mce-href=\"https://hshop.vn/products/bo-3-tan-nhiet-raspberry-pi-4-heatsink-co-san-keo-tan-nhiet\">3 tản nhiệt cho CPU, chip Ethernet và chip RAM&nbsp;</a>,&nbsp;<a href=\"https://hshop.vn/products/cap-chuyen-micro-hdmi-to-hdmi-cable-1-5m\" data-mce-href=\"https://hshop.vn/products/cap-chuyen-micro-hdmi-to-hdmi-cable-1-5m\">Cáp Chuyển Micro HDMI To HDMI Cable 1.5m</a> để sử dụng với máy.</strong></span></p><p><img src=\"https://file.hstatic.net/1000069225/file/3_tan_nhiet_va_cap_micro_hdmi_to_hdmi_f7726ce0a48c45ce9868ec3e99345324_e56ec86b066447a9a76351ba019d8553_master.jpg\" data-mce-src=\"https://file.hstatic.net/1000069225/file/3_tan_nhiet_va_cap_micro_hdmi_to_hdmi_f7726ce0a48c45ce9868ec3e99345324_e56ec86b066447a9a76351ba019d8553_master.jpg\"></p><p><span style=\"font-size: 12pt;\" data-mce-style=\"font-size: 12pt;\">Giấy chứng nhận CO (Certificate of Origin / Giấy chứng nhận xuất xứ) và CQ (Certificate of Quality / Giấy chứng nhận chất lượng) từ nhà Sản xuất <a href=\"https://hshop.vn/collections/raspberry-pi\" data-mce-href=\"https://hshop.vn/collections/raspberry-pi\">Raspberry Pi</a> RS Components (Made in UK) cấp cho Hshop.vn:</span></p><p><img src=\"https://file.hstatic.net/1000069225/file/raspberry_pi_cocq_e8593be3be314e28afa7f87a1cd14d20.jpg\" alt=\"Raspberry Pi COCQ\" data-mce-src=\"https://file.hstatic.net/1000069225/file/raspberry_pi_cocq_e8593be3be314e28afa7f87a1cd14d20.jpg\"></p>","featured_image":"https://product.hstatic.net/1000069225/product/may_tinh_raspberry_pi_4_model_b__made_in_uk__1_01e6070a263440fe9ff3a4af62297563.jpg","handle":"may-tinh-raspberry-pi-4-model-b-made-in-uk","id":1021203001,"images":["https://product.hstatic.net/1000069225/product/may_tinh_raspberry_pi_4_model_b__made_in_uk__1_01e6070a263440fe9ff3a4af62297563.jpg"],"options":["Tiêu đề"],"price":136000000.0,"price_max":238000000.0,"price_min":136000000.0,"price_varies":true,"tags":["raspberry pi","pi 4","mini computer raspberry pi","Raspberry Pi 4 Model B 8GB RAM","may tinh raspberry pi","Raspberry Pi 4 Model B 2GB RAM","Máy tính Raspberry Pi 4 Model B (Made in UK)","mini computer","raspberry pi 4 sbc","raspberry pi 4","may tinh nhung","raspberry pi 4 model b","Raspberry Pi 4 Model B 4GB RAM","raspberry pi made in uk"],"template_suffix":null,"title":"Máy tính Raspberry Pi 4 Model B (Made in UK)","type":"Default","url":"/products/may-tinh-raspberry-pi-4-model-b-made-in-uk","pagetitle":"Máy tính Raspberry Pi 4 Model B (Made in UK)","metadescription":"Máy tính Raspberry Pi 4 Model B (Made in UK) là phiên bản Raspberry Pi mới nhất hiện nayvới những cải tiến vượt trội so với phiên bản cũ: CPU mạnh hơn, tùy chọn Ram 1GB/2GB/4GB, dual-display Micro HDMI 4K,..., là sự lựa chọn phù hợp cho các ứng dụng: IoT, Robot, Smart Home, Media Centre, AI","variants":[{"id":1042810743,"barcode":"HS000972","available":true,"price":136000000.0,"sku":"Raspberry Pi 4 Model B 2GB RAM","option1":"2GB RAM","option2":"","option3":"","options":["2GB RAM"],"inventory_quantity":99977,"old_inventory_quantity":99977,"title":"2GB RAM","weight":0.0,"compare_at_price":0.0,"inventory_management":"haravan","inventory_policy":"deny","selected":false,"url":null,"featured_image":null},{"id":1042810752,"barcode":"HS000973","available":true,"price":178000000.0,"sku":"Raspberry Pi 4 Model B 4GB RAM","option1":"4GB RAM","option2":"","option3":"","options":["4GB RAM"],"inventory_quantity":99949,"old_inventory_quantity":99949,"title":"4GB RAM","weight":0.0,"compare_at_price":0.0,"inventory_management":"haravan","inventory_policy":"deny","selected":false,"url":null,"featured_image":null},{"id":1057738075,"barcode":null,"available":true,"price":238000000.0,"sku":"Raspberry Pi 4 Model B 8GB RAM","option1":"8GB RAM","option2":"","option3":"","options":["8GB RAM"],"inventory_quantity":99995,"old_inventory_quantity":99995,"title":"8GB RAM","weight":0.0,"compare_at_price":0.0,"inventory_management":"haravan","inventory_policy":"continue","selected":false,"url":null,"featured_image":null}],"vendor":"Import","published_at":"2019-08-20T15:34:55.049Z","created_at":"2019-08-20T06:51:25.522Z","not_allow_promotion":false}, onVariantSelected: selectCallback });--}}

{{--                        $('.single-option-selector:eq(0)').val("2GB RAM").trigger('change');--}}
{{--                        $('.selector-wrapper select').each(function(){--}}
{{--                            $(this).wrap( '<span class="custom-dropdown custom-dropdown--white"></span>');--}}
{{--                            $(this).addClass("custom-dropdown__select custom-dropdown__select--white");--}}
{{--                        });--}}
{{--                    });--}}
{{--                    $(document).ready(function(){--}}
{{--                        $('.product-thumb img').click(function(){--}}
{{--                            $('.product-thumb').removeClass('active');--}}
{{--                            $(this).parents('.product-thumb').addClass('active');--}}
{{--                        });--}}
{{--                        $('.product-thumb:first').addClass('active');--}}
{{--                    })--}}

{{--                </script>--}}


                <style type="text/css">
                    .bis-btnregister {
                        position: relative;
                        display: inline-block;
                        padding: 5px 8px;
                        border-style: solid;
                        cursor: pointer;
                        font-size: 14px;
                        font-weight: bold;
                        width: 165px;
                        height: 30px;
                        border-width: 1px;
                        border-radius: 3px;
                        border-color: #0aaa2a;
                        color: #fff;
                        margin-top: 15px;
                        background-color: #1dc545;
                    }

                    .bis-btnregister span {
                        position: absolute;
                        left: 50%;
                        top: 50%;
                        transform: translate(-50%, -50%);
                        width: 100%;
                        text-align: center;
                        display: block;
                        color: inherit !important;
                    }
                </style>
            </div>
            <div class="Clear"></div>
        </div>
    </div>
  @endsection
@section('footer')
    <link rel="stylesheet" href="js/sweetalert2.min.css">
    <script src="js/sweetalert2.min.js"></script>
    <script>
        $(document).ready(function () {
            /* 1. Visualizing things on Hover - See next part for action on click */
            $('#stars li').on('mouseover', function () {
                var onStar = parseInt($(this).data('value'), 10); // The star currently mouse on

                // Now highlight all the stars that's not after the current hovered star
                $(this).parent().children('li.star').each(function (e) {
                    if (e < onStar) {
                        $(this).addClass('hover');
                    } else {
                        $(this).removeClass('hover');
                    }
                });
            }).on('mouseout', function () {
                $(this).parent().children('li.star').each(function (e) {
                    $(this).removeClass('hover');
                });
            });
            /* 2. Action to perform on click */
            $('#stars li').on('click', function () {
                var onStar = parseInt($(this).data('value'), 10); // The star currently selected
                // console.log(onStar);
                var stars = $(this).parent().children('li.star');
                //alert(stars.length);
                for (i = 0; i < stars.length; i++) {
                    $(stars[i]).removeClass('selected');
                }
                for (i = 0; i < onStar; i++) {
                    $(stars[i]).addClass('selected');
                }
                // JUST RESPONSE (Not needed)
                var ratingValue = parseInt($('#stars li.selected').last().data('value'), 10);
                responseMessage(ratingValue);
            });
            // validate form
            $('.Cart').on('click', function () {
                var idPro = $(this).data('id');
               var soluong = $('.quantity-input').val();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type:'POST',
                    url:'{{url('ajax/addCart')}}',
                    data:
                        {
                            idPro:idPro,
                            soluong:soluong,
                        },
                    success:function (data) {
                        if(data)
                        {
                            Swal.fire({
                                icon: 'success',
                                // title: 'Thank you!',
                                text: 'Thêm vào giỏ hàng thành công!',
                            })
                        }
                        else
                        {
                            Swal.fire({
                                icon: 'error',
                                // title: 'Thank you!',
                                text: 'Bắt buộc phải đăng nhập!',
                            })
                            setTimeout(
                                function () {
                                    window.location.replace("{{url('login')}}");

                                }, 1500);
                        }
                    },
                });

            });
        });
        function responseMessage(msg) {
            $("#staring").val(msg);
            $(".button_rateting_c").html('<button class="btn btn-primary button_rateting" type="submit" name="button_danhgiasao" value="danh_gia_sao">Gửi</button>')
        }
    </script>




@endsection
{{--@section('footer')--}}
{{--    <script>--}}
{{--        jQuery(document).ready(function () {--}}
{{--            $("#addCart").on('click', function () {--}}
{{--                 var idCategory = $(this).data('id');--}}
{{--                console.log(idCategory);--}}
{{--        $.ajaxSetup({--}}
{{--            headers: {--}}
{{--                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')--}}
{{--            }--}}
{{--        });--}}
{{--        $.ajax({--}}
{{--            type:'POST',--}}
{{--            url:'{{url('ajax/getproduct')}}',--}}
{{--            data:--}}
{{--                {--}}
{{--                    idCategory:idCategory,--}}
{{--                },--}}
{{--            success:function (data) {--}}
{{--                $('.content-product-list').html(data);--}}
{{--            },--}}
{{--        });--}}
{{--        });--}}

{{--    });--}}
{{--    </script>--}}
{{--    @endsection--}}
