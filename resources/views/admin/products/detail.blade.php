@extends('admin.layout')
@section('main_content')
<link rel="stylesheet" href="{{asset('css/product.css')}}">
<div class="container-fluide m-3">
    <button id="btn_info" data-title="Awesome Button" class="btn btn-info mb-3">{{__('labels.btn-info')}}</button>

    <span  class="tooltiptext">{{__('messages.btn-hover')}}</span>

    <form id="form_info" data-val="1" >
        <div class="m-3 p-3">
            <div class="row">
                <div class="form-group col-md-8">
                    <label for="name">{{__('labels.L-name')}}</label>
                    <input value="{{$product->name}}" type="text" class="form-control " readonly>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-3">
                    <label for="category">{{__('labels.L-category')}}</label>
                    <input value="{{$product->category ? $product->category->name : ""}}" type="text" class="form-control " readonly>
                </div>

                <div class="form-group col-md-3">
                    <label for="price">{{__('labels.L-price')}}</label>
                    <input value="{{$product->price}}" type="text" class="form-control " readonly>
                </div>

                <div class="form-group col-md-3">
                    <label for="price">Amount</label>
                    <input value="{{$product->amount}}" type="text" class="form-control " readonly>
                </div>

            </div>

            <div class="form-group">
                <label for="specifications">{{__('labels.L-spec')}}</label>
                <textarea class="form-control" rows="3" readonly="true">{!! $product->specifications !!}
                </textarea>
            </div>

            <div class="form-group">
                <label for="desc">{{__('labels.L-desc')}}</label>
               <textarea class="form-control" rows="3" readonly="true">{!! $product->description !!}
                </textarea>
            </div>
        </div>
    </form>
</div>

<hr class="mb-3">

<div class="form-group text-center m-0 p-0 pt-1 pb-1">
    <a href="{{route('admin.products.index')}}" class="btn btn-secondary">{{ __('labels.btn-back') }}</a>
</div>
<script>
    $(document).ready(function(){
        $('#btn_info').on('click', function(){

            if ($('#form_info').data('val') == 1 ) {
                $('#form_info').show();
                $('#form_info').data('val', 0);
            } else {
                $('#form_info').hide();
                $('#form_info').data('val', 1);
            }
        });
    });
</script>
@endsection
