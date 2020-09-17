@extends('client.layout')
@section('content')
        <div id="Wrapper">
            <div id="mainframe">
                <div id="wrap-cart">
                    <div id="layout-page-card">
					<span class="header-page clearfix">
						<h1 class="title-card">Giỏ hàng</h1></span>
                        <form action="" method="post" id="cartformpage">
                            <table width="100%">
                                <thead>
                                <tr>
                                    <th class="image">Sản phẩm</th>
                                    <th class="item">Tên sản phẩm</th>
                                    <th class="qty">Số lượng</th>
                                    <th class="price">Giá tiền</th>
                                    <th class="remove">Xoá</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($Cart as $value)
                                <tr>
                                    <td class="image">
                                        <div class="product_image">
                                            <a href="/products/may-tinh-raspberry-pi-4-model-b-made-in-uk">
                                                <img src="{{url('/img/'.$value->products->toArray()[0]['image'])}}" style="width: 100px;"/>
                                            </a>
                                        </div>
                                    </td>
                                    <td class="item">
                                        <a href="/products/may-tinh-raspberry-pi-4-model-b-made-in-uk">
                                            <strong>{{$value->pro_name}}</strong>
                                            <br>
                                            <strong>
                                                Mã sản phẩm:
                                            </strong>
                                            {{$value->product_id}}
                                        </a>
                                    </td>
                                    <td class="qty">
                                        <input type="number" size="4" name="soluong" min="1" id="updates_1042810743" value="{{$value->soluong}}"  class="tc item-quantity" />
                                    </td>
                                    <td class="price">{{number_format($value->products->toArray()[0]['price'])}}₫</td>
                                    <td class="remove">
                                        <p class="cart" data-id="{{$value->product_id}}"><i class="fa fa-trash"></i></p>
                                    </td>
                                </tr>
                                @endforeach
{{--                                <tr class="summary">--}}
{{--                                    <td colspan="4" style="font-weight: bold; font-size: 20px;">Tổng tiền:</td>--}}
{{--                                    Quý Khách nên tìm hiểu kỹ thông tin, chính sách <a href="https://hshop.vn/pages/chinh-sach-bao-hanh">Bảo hành</a> và <a href="https://hshop.vn/pages/doi-tra-mien-phi">Đổi trả</a> của Sản Phẩm, đơn hàng mua Online nếu Quý Khách cần trả hàng và hoàn tiền do không phù hợp với nhu cầu sẽ bị -10% giá trị Sản Phẩm, tối thiểu là 30.000VNĐ cho chi phí xử lý và đóng gói, Hshop.vn rất mong Quý Khách thông cảm!--}}
{{--                                    <td class="price">--}}
{{--										<span class="total">--}}
{{--											<strong>2,720,000₫</strong>--}}
{{--										</span>--}}
{{--                                    </td>--}}
{{--                                </tr>--}}
                                </tbody>
                            </table>

                            <div class="col-md-6 inner-left inner-right">
                                <div class="checkout-buttons clearfix">

                                    <textarea id="note" name="note" rows="8" cols="50" placeholder="Ghi chú"></textarea>
                                </div>
                            </div>

                            <div class="col-md-6 cart-buttons inner-right inner-left">
                                <div class="buttons clearfix">
                                    <a  href="{{url('giaodich')}}" id="checkout" class="button-default" name="checkout" value="" >Thanh toán</a>
                                </div>
                            </div>



                        </form>


                        <!-- End cart -->
                    </div>
                </div>
            </div>


        </div>
        <div class="Clear"></div>
    </div>
</div>
@endsection
@section('footer')
    <script>
        jQuery(document).ready(function () {
            $(".cart").on('click', function () {
                var id = $(this).data('id');
                console.log(id);
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type:'POST',
                    url:'{{url('ajax/deleteproduct')}}',
                    data:
                        {
                            idCategory:id,
                        },
                    success:function (data) {
                       if(data)
                       {
                           window.location.replace("{{url('cart')}}");
                       }
                    },
                });
            });
            //
        });
    </script>
    @endsection
