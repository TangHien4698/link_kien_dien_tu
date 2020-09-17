@extends('client.layout')
@section('content')
    <div id="Wrapper">
        <div id="main-slider-mobile">
            <div id="slider_img_mobile">

                <div class="swiper-container">
                    <div class="swiper-wrapper">


                        <div class="swiper-slide"><a href="https://hshop.vn/collections/raspberry-pi"><img
                                    src="//theme.hstatic.net/1000069225/1000590042/14/slideshow_1.png?v=152"
                                    style="width: 100%; height: auto;"/></a></div>


                        <div class="swiper-slide"><a
                                href="https://hshop.vn/blogs/tin-tuc-hshopvn/hshop-vn-la-dai-ly-uy-quyen-chinh-thuc-cua-waveshare-tai-viet-nam"><img
                                    src="//theme.hstatic.net/1000069225/1000590042/14/slideshow_2.png?v=152"
                                    style="width: 100%; height: auto;"/></a></div>


                        <div class="swiper-slide"><a
                                href="https://hshop.vn/blogs/bai-viet-hshop/hshop-vn-chinh-thuc-la-dai-ly-uy-quyen-cua-arduino-cc-tai-viet-nam"><img
                                    src="//theme.hstatic.net/1000069225/1000590042/14/slideshow_3.png?v=152"
                                    style="width: 100%; height: auto;"/></a></div>


                        <div class="swiper-slide"><a
                                href="https://hshop.vn/blogs/bai-viet-hshop/hshop-vn-chinh-thuc-la-dai-ly-uy-quyen-cua-seeed-studio-tai-viet-nam"><img
                                    src="//theme.hstatic.net/1000069225/1000590042/14/slideshow_4.png?v=152"
                                    style="width: 100%; height: auto;"/></a></div>


                    </div>
                    <!-- Add Pagination -->

                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>


            </div>
        </div><!--end #main-slider-->

        <div id="main-content-left" class="left col-sm-3 col-xs-12">

            <div id="cate-menu" class="DefaultModule cate-menu">
                <div class="defaultTitle cate-menu-title">
                    <span>IoT - Internet of Things</span>
                </div>
                <div class="defaultContent cate-menu-content">
                    <ul>

                        @foreach($listCategory as $value)
                            <li class="level0">
                                <a href="{{$value->cat_rewrite}}">
					            <span>
						            {{$value->name}}
                                </span>
                                </a>
                            </li>
                        @endforeach()
                    </ul>
                </div>
            </div>
            <script>
                $.fn.extend({
                    Select: function () {
                        return $(this).addClass('open');
                    },
                    Unselect: function () {
                        return $(this).removeClass('open');
                    },
                    MyApplication: {
                        Ready: function () {
                            $('li.level0').click(
                                function () {
                                    $(this).hasClass('open') ? $(this).Unselect() : $(this).Select();
                                }
                            );
                        }
                    }
                });

                $(document).ready(
                    function () {
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
                            <a href="/blogs/bai-viet-hshop/hshop-vn-la-dai-ly-uy-quyen-chinh-thuc-cua-waveshare-tai-viet-nam"><img
                                    src=//file.hstatic.net/1000069225/article/waveshare_logo_cf8b36da83db45efa3e70c7a0100782c_small.jpg></a>
                        </div>
                        <div class="newsLastest_Title col-sm-7">
                            <a href="/blogs/bai-viet-hshop/hshop-vn-la-dai-ly-uy-quyen-chinh-thuc-cua-waveshare-tai-viet-nam"><span>
					Hshop.vn là đại lý ủy quyền chính thức của Waveshare tại Việt Nam</span></a>
                        </div>
                        <div class="Clear"></div>
                    </div>

                    <div class="newsLastest_Item">
                        <div class="newsLastest_Image col-sm-5">
                            <a href="/blogs/bai-viet-hshop/thong-bao-thu-hoi-san-pham-mach-dieu-khien-dong-ngat-tai-khong-tiep-xuc-ban-ngay-21-04-2020"><img
                                    src=//file.hstatic.net/1000069225/article/20200422_175233_2f4e01fe317348f2a8ae25ec18861245_small.jpg></a>
                        </div>
                        <div class="newsLastest_Title col-sm-7">
                            <a href="/blogs/bai-viet-hshop/thong-bao-thu-hoi-san-pham-mach-dieu-khien-dong-ngat-tai-khong-tiep-xuc-ban-ngay-21-04-2020"><span>
					Thông báo thu hồi sản phẩm "Mạch Điều Khiển Đóng Ngắt Tải Không Tiếp Xúc" bán ngày 21/04/2020</span></a>
                        </div>
                        <div class="Clear"></div>
                    </div>

                    <div class="newsLastest_Item">
                        <div class="newsLastest_Image col-sm-5">
                            <a href="/blogs/bai-viet-hshop/thong-bao-han-che-giao-dich-truc-tiep-tai-cac-cua-hang-truc-thuoc-hshop-vn"><img
                                    src=//file.hstatic.net/1000069225/article/covid_19_ac23466ab54b44b09fde9dec87afa1f8_small.jpg></a>
                        </div>
                        <div class="newsLastest_Title col-sm-7">
                            <a href="/blogs/bai-viet-hshop/thong-bao-han-che-giao-dich-truc-tiep-tai-cac-cua-hang-truc-thuoc-hshop-vn"><span>
					Thông báo hạn chế và rút ngắn việc giao dịch trực tiếp tại các cửa hàng trực thuộc Hshop.vn</span></a>
                        </div>
                        <div class="Clear"></div>
                    </div>

                    <div class="newsLastest_Item">
                        <div class="newsLastest_Image col-sm-5">
                            <a href="/blogs/bai-viet-hshop/cung-la-a-nhung-that-ra-lai-la-b-cach-phan-biet-mot-so-san-pham-kem-chat-luong"><img
                                    src=//file.hstatic.net/1000069225/article/arduino_promini_so_sanh_a46c92c5863849f49f1f99e0b9d2cb84_small.jpg></a>
                        </div>
                        <div class="newsLastest_Title col-sm-7">
                            <a href="/blogs/bai-viet-hshop/cung-la-a-nhung-that-ra-lai-la-b-cach-phan-biet-mot-so-san-pham-kem-chat-luong"><span>
					"Cùng là ...., nhưng thật ra ....", cách phân biệt một số sản phẩm kém chất lượng</span></a>
                        </div>
                        <div class="Clear"></div>
                    </div>


                </div>
            </div>


            <div class="use_banner_sidebar_left_home">
                <a href="https://3dmeo.com/" target="_blank">
                    <img src='//theme.hstatic.net/1000069225/1000590042/14/banner_sidebar_left_home.png?v=152'
                         class="img-responsive"/>
                </a>
            </div>


        </div>
        <div class="main-right col-md-9 col-sm-9 col-xs-12">


            <div id="main-slider">

                <div class="swiper-container">
                    <div class="swiper-wrapper">


                        <div class="swiper-slide"><a href="https://hshop.vn/collections/raspberry-pi"><img
                                    src="//theme.hstatic.net/1000069225/1000590042/14/slideshow_1.png?v=152"
                                    style="width: 100%; height: auto" loading="eager"/></a></div>


                        <div class="swiper-slide"><a
                                href="https://hshop.vn/blogs/tin-tuc-hshopvn/hshop-vn-la-dai-ly-uy-quyen-chinh-thuc-cua-waveshare-tai-viet-nam"><img
                                    src="//theme.hstatic.net/1000069225/1000590042/14/slideshow_2.png?v=152"
                                    style="width: 100%; height: auto" loading="eager"/></a></div>


                        <div class="swiper-slide"><a
                                href="https://hshop.vn/blogs/bai-viet-hshop/hshop-vn-chinh-thuc-la-dai-ly-uy-quyen-cua-arduino-cc-tai-viet-nam"><img
                                    src="//theme.hstatic.net/1000069225/1000590042/14/slideshow_3.png?v=152"
                                    style="width: 100%; height: auto" loading="eager"/></a></div>


                        <div class="swiper-slide"><a
                                href="https://hshop.vn/blogs/bai-viet-hshop/hshop-vn-chinh-thuc-la-dai-ly-uy-quyen-cua-seeed-studio-tai-viet-nam"><img
                                    src="//theme.hstatic.net/1000069225/1000590042/14/slideshow_4.png?v=152"
                                    style="width: 100%; height: auto" loading="eager"/></a></div>


                    </div>
                    <!-- Add Pagination -->

                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>


            </div><!--end #main-slider-->

            <script>
                var swiper = new Swiper('.swiper-container', {
                    pagination: {
                        el: '.swiper-pagination',
                        type: 'fraction',
                    },
                    autoplay: {
                        delay: 5000,
                    },
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                    },
                });
            </script>
            <div id="HomeFeaturedProductsSlider8" class="Block FeaturedProducts DefaultModule">
                <div class="defaultTitle TitleContent">
                    <a href="/collections/gia-sieu-hot"><span>Sản phẩm giá siêu tốt</span></a>
                </div>
                <div class="defaultContent BlockContent featured_product_slider">
                    <div class="swiper-container swiper-container-new">
                        <div class="swiper-wrapper">
                            @foreach($listProductPriceGood as $value)
                            <div class="swiper-slide">
                                <div class="box-product-first col-md-3-2 col-sm-6 col-xs-12">
                                    <a href="{{url('/products/'.$value->pro_rewrite)}}"
                                       style="height:max-content;width:max-content;text-decoration:none">
                                        <div id="ProductImage" class="ProductImage">
                                            <img alt="Mạch Raspberry Pi Grove Shield GrovePi+"
                                                 title="Mạch Raspberry Pi Grove Shield GrovePi+"
                                                 src="{{url('/img/'.$value->image)}}"
                                                 class="img-responsive"/>
                                        </div>


                                        <div class="ProductDetails">
                                            <strong>{{$value->name}}</strong>
                                        </div>
                                        <div class="ProductPrice">
                                            <div class="retail-price disable">
                                                <span class="price-label"></span><span class="price"><strike
                                                        class="RetailPriceValue">
					</strike>
					</span>
                                            </div>
                                            <div class="special-price">
                                                <span class="price-label"></span><span class="price"><em>
					{{number_format($value->price)}}₫</em>
					</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>


                                <!--end .col-md-3 col-sm-6 col-xs-12-->    </div>
                            @endforeach()

                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination swiper-pagination-new"></div>
                    </div>


                </div>
                <div class="defaultFooter FooterContent">
                    <div></div>
                </div>
                <div class="Clear"></div>
            </div>
            <script>
                $(document).ready(function () {
                    $('.featured_slider_8').owlCarousel({
                        autoPlay: 5000,
                        items: 4,
                        itemsDesktop: [1000, 4],
                        itemsDesktopSmall: [900, 3],
                        itemsTablet: [600, 3],
                        itemsMobile: [600, 2]
                    })
                })
            </script>


            <div id="HomeFeaturedProducts" class="Block FeaturedProducts DefaultModule">
                <div class="defaultTitle TitleContent">
                    <a href="/collections/san-pham-moi-nhat-new-arrival-products"><span>Sản phẩm mới nhất</span></a>
                </div>
                <div class="defaultContent BlockContent">
                    @foreach($listProductNew as $value)

                    <div class="box-product-first col-md-3-2 col-sm-6 col-xs-12">
                        <a href="{{url('/products/'.$value->pro_rewrite)}}"
                           style="height:max-content;width:max-content;text-decoration:none">
                            <div id="ProductImage" class="ProductImage">
                                <img alt="{{$value->name}}"
                                     title="{{$value->name}}"
                                     src="{{url('/img/'.$value->image)}}"
                                     class="img-responsive"/>
                            </div>


                            <div class="ProductDetails">
                                <strong>{{$value->name}}</strong>
                            </div>
                            <div class="ProductPrice">
                                <div class="retail-price disable">
                                    <span class="price-label"></span><span class="price"><strike
                                            class="RetailPriceValue">
					</strike>
					</span>
                                </div>
                                <div class="special-price">
                                    <span class="price-label"></span><span class="price"><em>
					{{number_format($value->price)}}₫</em>
					</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
                <div class="defaultFooter FooterContent">
                    <div></div>
                </div>
                <div class="Clear"></div>
            </div>


            <script>
                $(document).ready(function () {
                    $('.featured_slider_3').owlCarousel({
                        autoPlay: 5000,
                        items: 4,
                        itemsDesktop: [1000, 4],
                        itemsDesktopSmall: [900, 3],
                        itemsTablet: [600, 3],
                        itemsMobile: false
                    })
                })
            </script>


            <script>
                $(document).ready(function () {
                    $('.featured_slider_4').owlCarousel({
                        autoPlay: 5000,
                        items: 4,
                        itemsDesktop: [1000, 4],
                        itemsDesktopSmall: [900, 3],
                        itemsTablet: [600, 3],
                        itemsMobile: false
                    })
                })
            </script>

            <script>
                $(document).ready(function () {
                    $('.featured_slider_5').owlCarousel({
                        autoPlay: 5000,
                        items: 4,
                        itemsDesktop: [1000, 4],
                        itemsDesktopSmall: [900, 3],
                        itemsTablet: [600, 3],
                        itemsMobile: false
                    })
                })
            </script>

            <script>
                $(document).ready(function () {
                    $('.featured_slider_6').owlCarousel({
                        autoPlay: 5000,
                        items: 4,
                        itemsDesktop: [1000, 4],
                        itemsDesktopSmall: [900, 3],
                        itemsTablet: [600, 3],
                        itemsMobile: false
                    })
                })
            </script>


        </div>


        <script>
            var number = window.innerWidth <= 989.5 ? (window.innerWidth <= 480 ? 2 : 3) : 4
            var swiper = new Swiper('.swiper-container-new', {
                slidesPerView: number,
                spaceBetween: 0,
                pagination: {
                    el: '.swiper-pagination-new',
                    clickable: true,
                },
                autoplay: {
                    delay: 5000,
                },
            });
        </script>

    </div>
    <div class="Clear"></div>
    </div>
    </div>
@endsection()
