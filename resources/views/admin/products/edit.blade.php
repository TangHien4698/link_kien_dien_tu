@extends('admin.layout')
@section('main_content')

<link rel="stylesheet" href="{{asset('/css/product.css')}}" type="text/css">

<script>
    var categories = {!! json_encode($categories) !!};
    var currentCategory = {!! json_encode($product->category)!!};
</script>

<div class="container">

    <form action="{{route('admin.products.update', $product->id)}}"  method="post" enctype="multipart/form-data" id="form-group">
        @csrf()
        {{method_field('PUT')}}

        @if(session()->has('message'))
        <div class="alert {{session('val_alert')}} " role="alert">
            {{session('message')}}
        </div>
        @endif
        <div class="row">
            <div class="col-md-4">
                <div class="form-group offset-md-3">
                    <div class="row" style="display: inline-grid;">
                        <label for="img">{{__('labels.L-image')}}</label>
                        <input value="{{old('image')}}" type="file"
                        class="@error('image') is-invalid @enderror border-0 bg-light pl-0"
                        name="image" id="image" hidden>

                        @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                        <div class="mt-3 choose-avatar">
                            <div id="btnimage">
                                <img id="showImage" class="show-avatar" src="/{{$product->image}}" alt="avatar">
                            </div>
                            <div id="button">
                                <i id="btn_chooseImg" class="fas fa-camera "></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <div class="form-group">
                    <label for="name">{{__('labels.L-name')}}</label>
                    <input value="{{ old('name')  ?? $product->name}}"
                    type="text" class="form-control @error('name') is-invalid @enderror"
                    name="name"
                    autocomplete="name">

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="name">Product rewrite</label>
                    <input value="{{ old('pro_rewrite') ?? $product->pro_rewrite }}"
                           type="text" class="form-control @error('name') is-invalid @enderror"
                           name="pro_rewrite"
                           autocomplete="pro_rewrite">

                    @error('pro_rewrite')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="category">{{__('labels.L-category')}}</label>
                    <select id="-category" name="category_id" class="form-control js-example-basic-multiple edit_category @error('category') is-invalid @enderror" >
                        <option value=""></option>
                    </select>

                    @error('category')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="price">{{__('labels.L-price')}}</label>
                    <div class="input-group mb-3">
                        <input value="{{ old('price') ?? $product->price}}"
                        type="text" class="form-control @error('price') is-invalid @enderror"
                        name="price"
                        autocomplete="price">
                        <div class="input-group-append">
                            <span class="input-group-text">VNĐ</span>
                        </div>
                    </div>

                    @error('price')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="price">Amount</label>
                    <div class="input-group mb-3">
                        <input value="{{ old('price') ?? $product->amount}}"
                               type="number" class="form-control @error('amount') is-invalid @enderror"
                               name="amount"
                               autocomplete="amount">
                    </div>

                    @error('amount')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>


                <div class="form-group">
                    <label for="specifications">{{__('labels.L-spec')}}</label>
                    <input value="{{ old('specifications') ?? $product->specifications}}"
                    type="text" class="form-control @error('specifications') is-invalid @enderror"
                    name="specifications"
                    autocomplete="specifications">

                    @error('specifications')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="specifications">Product good</label>

                    <select name="pro_price_good" class="mdb-select md-form form-control">
                        <option value="0" {{$product->pro_price_good == 0 ? 'selected': ''}}></option>
                        <option value="1" {{$product->pro_price_good == 1 ? 'selected': ''}}>Yes</option>
                        <option value="2" {{$product->pro_price_good == 2 ? 'selected': ''}}>No</option>
                    </select>

                    @error('specifications')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="des">{{__('labels.L-desc')}}</label>
                    <textarea value="{{old('description') }}" class="form-control @error('description') is-invalid @enderror" id="exampleFormControlTextarea1" rows="3" name="description">{{$product->description}}
                    </textarea>

                    @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>


                <div class="form-group text-center m-0 p-0 pt-5 pb-5">
                    <button type="submit" class="btn btn-success">{{__('labels.btn-update')}}</button>
                    <a href="{{route('admin.products.index')}}" class="btn btn-secondary">{{ __('labels.btn-back') }}</a>

                </div>
            </div>
        </div>
    </form>
</div>
<script src="{{asset('js/editProduct.js')}}" defer></script>

@endsection
