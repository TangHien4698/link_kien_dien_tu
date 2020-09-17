{{--@php--}}
{{--    dd($listProductPagion->links());--}}
{{--@endphp--}}
@extends('client.layout')
@section('content')
        <div id="Wrapper">
            <div id="collection">

                <!-- Begin collection info -->
                <!-- Content-->
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
                <div id="main-content-left" class="left col-sm-3 col-xs-12">
                    <div class="DefaultModule cate-menu">
                        <div class="defaultTitle cate-menu-title">
                            <span>Single Board Computer</span>
                        </div>
                        <div class="defaultContent cate-menu-content">
                            <ul>
                                @foreach($listCategory as $value)

                                <li class="level0">
                                    <p style="    color: #014590;display: block;font-size: 13px;font-weight: bold;padding: 7px 0 7px 9px;">
					                    <span class="cat" data-id="{{$value->id}}">
						                    {{$value->name}}
                                        </span>
                                    </p>
                                </li>
                                @endforeach

                            </ul>
                        </div>

                    </div>

                    <script>
                        $.fn.extend({
                            Select: function() {
                                return $(this).addClass('open');
                            },
                            Unselect: function() {
                                return $(this).removeClass('open');
                            },
                            MyApplication: {
                                Ready: function() {
                                    $('li.level0').click(
                                        function() {
                                            $(this).hasClass('open')?$(this).Unselect() : $(this).Select();
                                        }
                                    );
                                }
                            }
                        });

                        $(document).ready(
                            function() {
                                $.fn.MyApplication.Ready();
                            }
                        );
                    </script>


                    <div class="newsLastest DefaultModule CustomNews-1802162">
                        <div class="defaultTitle newsLastest-Title">
                            <span>Blogs</span>
                        </div>
                        <div class="defaultContent newsLastest-content">


                            <div class="newsLastest_Item">
                                <div class="newsLastest_Image col-sm-5">
                                    <a href="/blogs/bai-viet-hshop/hshop-vn-la-dai-ly-uy-quyen-chinh-thuc-cua-waveshare-tai-viet-nam"><img src=//file.hstatic.net/1000069225/article/waveshare_logo_cf8b36da83db45efa3e70c7a0100782c_small.jpg></a>
                                </div>
                                <div class="newsLastest_Title col-sm-7">
                                    <a href="/blogs/bai-viet-hshop/hshop-vn-la-dai-ly-uy-quyen-chinh-thuc-cua-waveshare-tai-viet-nam"><span>
					Hshop.vn là đại lý ủy quyền chính thức của Waveshare tại Việt Nam</span></a>
                                </div>
                                <div class="Clear"></div>
                            </div>

                            <div class="newsLastest_Item">
                                <div class="newsLastest_Image col-sm-5">
                                    <a href="/blogs/bai-viet-hshop/thong-bao-thu-hoi-san-pham-mach-dieu-khien-dong-ngat-tai-khong-tiep-xuc-ban-ngay-21-04-2020"><img src=//file.hstatic.net/1000069225/article/20200422_175233_2f4e01fe317348f2a8ae25ec18861245_small.jpg></a>
                                </div>
                                <div class="newsLastest_Title col-sm-7">
                                    <a href="/blogs/bai-viet-hshop/thong-bao-thu-hoi-san-pham-mach-dieu-khien-dong-ngat-tai-khong-tiep-xuc-ban-ngay-21-04-2020"><span>
					Thông báo thu hồi sản phẩm "Mạch Điều Khiển Đóng Ngắt Tải Không Tiếp Xúc" bán ngày 21/04/2020</span></a>
                                </div>
                                <div class="Clear"></div>
                            </div>

                            <div class="newsLastest_Item">
                                <div class="newsLastest_Image col-sm-5">
                                    <a href="/blogs/bai-viet-hshop/thong-bao-han-che-giao-dich-truc-tiep-tai-cac-cua-hang-truc-thuoc-hshop-vn"><img src=//file.hstatic.net/1000069225/article/covid_19_ac23466ab54b44b09fde9dec87afa1f8_small.jpg></a>
                                </div>
                                <div class="newsLastest_Title col-sm-7">
                                    <a href="/blogs/bai-viet-hshop/thong-bao-han-che-giao-dich-truc-tiep-tai-cac-cua-hang-truc-thuoc-hshop-vn"><span>
					Thông báo hạn chế và rút ngắn việc giao dịch trực tiếp tại các cửa hàng trực thuộc Hshop.vn</span></a>
                                </div>
                                <div class="Clear"></div>
                            </div>

                            <div class="newsLastest_Item">
                                <div class="newsLastest_Image col-sm-5">
                                    <a href="/blogs/bai-viet-hshop/cung-la-a-nhung-that-ra-lai-la-b-cach-phan-biet-mot-so-san-pham-kem-chat-luong"><img src=//file.hstatic.net/1000069225/article/arduino_promini_so_sanh_a46c92c5863849f49f1f99e0b9d2cb84_small.jpg></a>
                                </div>
                                <div class="newsLastest_Title col-sm-7">
                                    <a href="/blogs/bai-viet-hshop/cung-la-a-nhung-that-ra-lai-la-b-cach-phan-biet-mot-so-san-pham-kem-chat-luong"><span>
					"Cùng là ...., nhưng thật ra ....", cách phân biệt một số sản phẩm kém chất lượng</span></a>
                                </div>
                                <div class="Clear"></div>
                            </div>



                        </div>
                    </div>



                </div>
                <div class="main-right col-md-9 col-sm-9 col-xs-12">
                    <div class="">
                        <div class="main-content-collection">

                            <div class="breadcrumb">
                                <ul>
                                    <li><a href="/" target="_self">Trang chủ</a></li>
                                    <li><a href="/collections" target="_self">Danh mục</a></li>
                                </ul>
                            </div>

                            <div class="des-collection"><p><img src="https://file.hstatic.net/1000069225/file/banner_arduino_distributor_de3109e366b144ff83ccf1e26dbb9dc6.jpg" alt="Banner Arduino Distributor" data-mce-src="https://file.hstatic.net/1000069225/file/banner_arduino_distributor_de3109e366b144ff83ccf1e26dbb9dc6.jpg" style="display: block; margin-left: auto; margin-right: auto;" data-mce-style="display: block; margin-left: auto; margin-right: auto;"></p><p>Nhóm các sản phẩm bo mạch Arduino: Arduino Uno, Arduino Mega 2560, Arduino Nano, Arduino Due, Arduino Pro Mini,..., đặc biệt có thêm hai phiên bản <a data-mce-href="https://hshop.vn/products/vietduino-uno" href="https://hshop.vn/products/vietduino-uno">Vietduino Uno</a> và <a data-mce-href="https://hshop.vn/products/vietduino-mega-2560-aruduino-mega-2560-compatible" href="https://hshop.vn/products/vietduino-mega-2560-aruduino-mega-2560-compatible">Vietduino Mega 2560</a> với nhiều cải tiến vượt trội, các bạn cũng có thể mua thêm <a data-mce-href="https://hshop.vn/collections/arduino-shield" href="https://hshop.vn/collections/arduino-shield">Arduino Shield</a>&nbsp;và&nbsp;<a data-mce-href="https://hshop.vn/collections/arduino-other" href="https://hshop.vn/collections/arduino-other">Phụ kiện cho Arduino</a>.<br></p><p style="text-align: center;" data-mce-style="text-align: center;"><a data-mce-href="https://hshop.vn/blogs/bai-viet-hshop/hshop-vn-chinh-thuc-la-dai-ly-uy-quyen-cua-arduino-cc-tai-viet-nam" href="https://hshop.vn/blogs/bai-viet-hshop/hshop-vn-chinh-thuc-la-dai-ly-uy-quyen-cua-arduino-cc-tai-viet-nam"><span style="color: rgb(255, 0, 0);" data-mce-style="color: #ff0000;"><strong>Hshop.vn chính thức là đại lý ủy quyền của Arduino.cc tại Việt Nam</strong></span></a></p></div>

                            <span class="pull-right">

						<div class="browse-tags">
							<span>Sắp xếp theo:</span>
							<span  class="custom-dropdown custom-dropdown--white">
								<select class="sort-by custom-dropdown__select custom-dropdown__select--white" id="orderby">
									<option value="created_at-DESC">Mới nhất</option>
                                    <option value="price-ASC">Giá: Tăng dần</option>
									<option value="price-DESC">Giá: Giảm dần</option>
									<option value="name-ASC">Tên: A-Z</option>
									<option value="name-DESC">Tên: Z-A</option>

								</select>
							</span>
						</div>
					</span>
                        </div>
                        <div class="main-product-list">
                            <div class="content-product-list">
                                @foreach($listProduct as $value)
                                <div class="box-product-first col-md-3-2 col-sm-6 col-xs-12">
                                    <a href="{{url('/products/'.$value["pro_rewrite"])}}" style="height:max-content;width:max-content;text-decoration:none">
                                        <div id="ProductImage" class="ProductImage">
                                            <img alt="{{$value["name"]}}" title="{{$value["name"]}}"
                                                 src="{{url('/img/'.$value["image"])}}" class="img-responsive"/>
                                        </div>
                                        <div class="ProductDetails">
                                            <strong>{{$value["name"]}}</strong>
                                        </div>
                                        <div class="ProductPrice">
                                            <div class="retail-price disable">
                                                <span class="price-label"></span><span class="price"><strike class="RetailPriceValue">
					</strike>
					</span>
                                            </div>
                                            <div class="special-price">
                                                <span class="price-label"></span><span class="price"><em>
					{{number_format($value["price"])}}₫</em>
					</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="main-pagination">
                            <div class="text-center">

                                <div class="pagination">
                                    {{ $listProductPagion->links() }}
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
        </script>
    </div>
    <div class="Clear"></div>
</div>
</div>
@endsection
@section('footer')
    <script>
        jQuery(document).ready(function () {
            $(".cat").on('click', function () {
                var idCategory = $(this).data('id');
                console.log(idCategory);
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type:'POST',
                    url:'{{url('ajax/getproduct')}}',
                    data:
                        {
                            idCategory:idCategory,
                        },
                    success:function (data) {
                        $('.content-product-list').html(data);
                    },
                });
            });
            // oder
            // filter by price
            jQuery("#orderby").change(function(){
                var pathname = window.location.pathname;
                category = pathname.slice(1);
                var orderby = $("#orderby").val();
                 console.log(pathname);
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url:"{{url('ajax/orderby')}}",
                    type:'POST',
                    data:{
                        type: orderby,
                        category:category
                    },
                    success:function (data) {
                        $('.content-product-list').html(data);
                    },
                    error:function (e) {
                        console.log(e.message);
                    },
                });
            });
        });
    </script>
    @endsection
