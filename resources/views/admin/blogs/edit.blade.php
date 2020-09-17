@extends('admin.layout')
@section('main_content')

    <link rel="stylesheet" href="{{asset('/css/product.css')}}" type="text/css">
    <div class="container">
        <form action="{{route('admin.blogs.update', $blog->id)}}"  method="post" enctype="multipart/form-data" id="form-group">
            @csrf()
            {{method_field('PUT')}}

            @if(session()->has('message'))
                <div class="alert {{session('val_alert')}} " role="alert">
                    {{session('message')}}
                </div>
            @endif
            <div class="row">
                <div class="col-md-5">
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
                                    <img id="showImage" class="show-avatar" src="/{{$blog->image}}" alt="avatar">
                                </div>
                                <div id="button">
                                    <i id="btn_chooseImg" class="fas fa-camera "></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-7">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input value="{{ old('title') ?? $blog->title}}"
                               type="text" class="form-control @error('title') is-invalid @enderror"
                               name="title"
                               autocomplete="title">

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="content">Content</label>
                        <textarea value="{{old('content')}}" class="form-control @error('content') is-invalid @enderror"
                                  id="exampleFormControlTextarea1" rows="3" name="content">{{$blog->content}}</textarea>
                        @error('content')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="date">Post at</label>
                        <input value="{{ date('Y-m-d') ?? $bog->date }}"
                               type="date" class="form-control  @error('date')
                            is-invalid @enderror" name="date">

                        @error('date')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group text-center m-0 p-0 pt-5 pb-5">
                        <button type="submit" class="btn btn-success">{{__('labels.btn-edit')}}</button>
                        <a href="{{route('admin.blogs.index')}}" class="btn btn-secondary">{{ __('labels.btn-back') }}</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script src="{{asset('js/blog.js')}}" defer></script>
@endsection
