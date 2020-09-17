@extends('admin.layout')
@section('main_content')

    <link rel="stylesheet" href="{{asset('css/product.css')}}">

    <!-- btn create -->
    <div class="row justify-content-start m-1 mb-2 mt-2 container ml-1">
        <a href="{{ route('admin.products.create' )}}">
            <button type="button" class="btn btn-success">{{__('labels.btn-create')}}</button>
        </a>
    </div>

    <!-- message -->
    @if(session()->has('message'))
        <div class="alert {{session('val_alert')}} " role="alert">
            {{session('message')}}
        </div>
    @endif

    <!-- alert delete -->
    <div class="alert alert-success" role="alert" style="display: none;">
        {{ __('messages.4')}}
    </div>

    <div class="alert alert-danger" role="alert" style="display: none;">
        {{ __('messages.9')}}
    </div>

    <!-- list project -->
    <div class="row">
        <div class="container mt-3 mb-3 p-0">
            <div class="card">
                <div class="card-body">
                    <table id="myTable" class="table table-bordered table-striped row-border order-column" width="100%">
                        <thead>
                        <tr>
                            <th width="10" class="text-center">ID</th>
                            <th> {{ __('labels.L-name') }} </th>
                            <th> {{ __('labels.L-category') }} </th>
                            <th> {{ __('labels.L-price') }} </th>
                            <th> Amount </th>
                            <th> {{ __('labels.L-image') }} </th>
                            <th>Pro rewrite</th>
                            <th>Pro price good</th>
                            <th name="action" width="150" class="text-center">{{__('labels.btn-action')}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td class="text-center"> {{ $product->id }} </td>
                                <td class="text_flow"> {{ $product->name }} </td>
                                <td class="text_flow"> {{ $product->category? $product->category->name : ""  }} </td>
                                <td class="text_flow"> {{ $product->price }} </td>
                                <td class="text_flow"> {{ $product->amount }} </td>
                                <td class="text_flow"><img class="avatar_product" src="/{{$product->image}}"
                                                           alt="avatar"></td>
                                <td class="text_flow">{{$product->pro_rewrite == null ? '': $product->pro_rewrite}}</td>
                                <td class="text_flow">{{getProGood($product->pro_price_good)}}</td>
                                <td class="text_flow text-center">
                                    <a href="{{ route('admin.products.show', $product['id'] )}}" class="btn btn-info"
                                       title="{{__('labels.btn-info')}}">
                                        <i class="fas fa-info-circle"></i>
                                    </a>

                                    <a href="{{ route('admin.products.edit', $product['id'] )}}"
                                       title="{{__('labels.btn-edit')}}">
                                        <button type="button" class="btn btn-primary">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                    </a>

                                    <button type="button" class="btn btn-danger btn_delete" data-toggle="modal"
                                            data-target="#deleteProject" data-id="{{$product->id}}"
                                            data-name="{{$product->name}}" title="{{__('labels.btn-delete')}}">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>

                                </td>
                            </tr>
                        @endforeach
                        </tbody>

                        <tfoot>
                        <tr>
                            <th width="10" class="text-center">ID</th>
                            <th> {{ __('labels.L-name') }} </th>
                            <th> {{ __('labels.L-category') }} </th>
                            <th> {{ __('labels.L-price') }} </th>
                            <th> Amount </th>
                            <th> {{ __('labels.L-image') }} </th>
                            <th>Pro rewrite</th>
                            <th>Pro price good</th>
                            <th name="action" width="100" class="text-center">{{__('labels.btn-action')}}</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <!-- modal delete -->
    <div class="modal fade" id="deleteProject" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="id">ID</label>
                        <input type="text" id="id" class="form-control" disabled="true">
                    </div>

                    <div class="form-group">
                        <label for="id">{{__('labels.L-name')}}</label>
                        <input type="text" id="name" class="form-control" disabled="true">
                    </div>

                    <div id="messageUserInGroup" class="alert alert-danger form-group" role="alert"
                         style="display: none;">
                        <span id="messagesGroup"></span>
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal" id="click_delete">Delete</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Exit</button>
                </div>
            </div>
        </div>
    </div>


    <script>
        $(document).ready(function () {
            $('#myTable').DataTable();
        });

        setTimeout(function () {
            $("div.alert").remove();
        }, 3000);

        var urlDelete = "{{route('admin.products.delete')}}"
    </script>

    <script src="{{asset('js/deleteProduct.js')}}" defer></script>
@endsection()
