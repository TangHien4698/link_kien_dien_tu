@extends('admin.layout')
@section('main_content')
    @if(session()->has('message'))
        <div class="alert {{session('val_alert')}} " role="alert">
            {{session('message')}}
        </div>
    @endif

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h4>Order Detail</h4>
                </div>
            </div>
        </div>
    </section>

    <section class="container">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-body">
                    <div class="form-group">
                        <label for="verification">{{__('labels.L-verification')}}</label>
                        <input type="text" class="form-control" value="{{$data->Verification}}" readonly>
                    </div>

                    <div class="form-group">
                        <label for="verification">{{__('labels.L-receiverName')}}</label>
                        <input type="text" class="form-control" value="{{$data->receiver_name}}" readonly>
                    </div>

                    <div class="form-group">
                        <label for="verification">{{__('labels.L-receiverPhone')}}</label>
                        <input type="text" class="form-control" value="{{$data->receiver_phone_number}}" readonly>
                    </div>

                    <div class="form-group">
                        <label for="verification">{{__('labels.L-receiverAddress')}}</label>
                        <input type="text" class="form-control" value="{{$data->receiver_address}}" readonly>
                    </div>
                    <hr class="bg-danger" style="margin-top: 30px; margin-bottom: 20px;">
                    <table class="table table-bordered">
                        <caption>List product detail</caption>
                        <thead>
                        <tr>
                            <th scope="col">Product Id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Total</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $key => $product)
                            <tr>
                                <td>{{$product->product_id}}</td>
                                <td>{{$product->name}}</td>
                                <td>{{$product->price}}</td>
                                <td>{{$product->amount}}</td>
                                <td>{{$product->amount*$product->price}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th colspan="4" class="text-left"> Total Money:</th>
                                <th>{{$data->total_money}}</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>

                <div class="card-footer text-center">
                    <a href="{{route('admin.orders.index')}}" class="btn btn-dark">
                        {{__('labels.btn-back')}}
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
