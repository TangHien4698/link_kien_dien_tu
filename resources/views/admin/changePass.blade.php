@extends('admin.layout')
@section('main_content')

<div class="section profile">
    <div class="container">
        @if(session()->has('message'))
        <div class="alert {{session('val_alert')}} " role="alert">
            {{session('message')}}
        </div>
        @endif


        <form action="{{route('admin.updatePass',$admin['id'])}}"  method="post" class="row">

            @csrf()
            {{ method_field('POST') }}

            <div class="container">
              <input type="hidden" name="id" value="{{$admin->id}}">

            <div class="form-group">
                <label for="cpass">{{__('labels.L-password')}}</label>
                <input
                type="password" class="form-control @error('old_password') is-invalid @enderror" name="old_password" placeholder="{{__('labels.L-enterPassword')}}"
              >

                @error('old_password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

             <div class="form-group">
                <label for="npass">{{__('labels.L-newPassword')}}</label>
                <input
                type="password" class="form-control @error('password') is-invalid @enderror" name="password"
               placeholder="{{__('labels.L-enterNewPassword')}}">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

             <div class="form-group">
                <label for="cfpass">{{__('labels.L-cfPassword')}}</label>
                <input
                type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation"
                placeholder="{{__('labels.L-enterCfPassword')}}">

                @error('password_confirmation')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group text-center m-0 p-0 pt-5 pb-5">
             <button type="submit" class="btn btn-primary">{{__('labels.btn-update')}}</button>
             <a href="{{route('admin.index')}}" class="btn btn-secondary">{{ __('labels.btn-back') }}</a>
         </div>
     </div>

 </form>

</div>
</div>

<script>
    setTimeout(function(){
        $("div.alert").remove();
    }, 3000 );
</script>

@endsection
