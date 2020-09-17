
@extends('client.layout')
@section('content')
        <div id="Wrapper">
            <div id="layout-page-account" class="clearfix">
	<span class="header-contact header-page clearfix">
		<h1 class="title-customers">Hóa đơn đã mua</h1>
	</span>

                <div id="customer_user">
                    <table width="100%">
                        <thead>
                        <tr>
                            <th><span>Họ và tên</span></th>
                            <th><span>Số điện thoại</span></th>
                            <th><span>Địa chỉ</span></th>
                            <th><span>Tổng tiền</span></th>
                            <th><span>Trạng thái</span></th>
                            <th><span>Thời gian</span></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($hoadon as $value)
                        <tr>
                            <td><span>{{$value->receiver_name}}</span></td>
                            <td><span>{{$value->receiver_phone_number}}</span></td>
                            <td><span>{{$value->receiver_address}}</span></td>
                            <td><span>

                                {{number_format($value->total_money)}}

						</span>
                            </td>
                            <td><span>@php if($value->state == 0) echo"Đã thanh toán";else echo "Chưa thanh toán" @endphp</span></td>
                            <td><span> {{$value->created_at}}</span></td>
                        </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
        <div class="Clear"></div>
    </div>
</div>
        @endsection
