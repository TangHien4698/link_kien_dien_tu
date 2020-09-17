@extends('client.layout')
@section('content')
        <div id="Wrapper">
            <div id="layout-page-register" class="container" style="width: 68%">

		<h1 class="title-register">Đăng ký</h1>

                <div class="userbox">
                    <form accept-charset='UTF-8' action='{{url('accessregister')}}' id='create_customer' method='post'>
                        {{ csrf_field() }}
                        <input name='form_type' type='hidden' value='create_customer'>
                        <input name='utf8' type='hidden' value='✓'>
                        <div class="inline" style="width: 100%;display: inline-flex;">
                            <div id="first_name" class="input-group" style="width: 50%;margin-right: 15px;">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input required type="text" value="" name="name" placeholder="Họ tên" id="first_name" class="text form-control" size="30" />
                            </div>
                            <div id="last_name" class="input-group" style="width: 50%">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input required type="number" value="" name="phone" placeholder="Số điện thoại" id="last_name" class="text form-control" size="30" />
                            </div>
                        </div>
                        <div class="inline" style="width: 100%;display: inline-flex;">
                            <div id="email" class="input-group" style="width: 50%;margin-right: 15px;">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input required type="email" value="" name="email" placeholder="email" id="email" class="text form-control" size="30" />
                            </div>
                            <div id="email" class="input-group" style="width: 50%;margin-right: 15px;">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input required type="email" value="" name="confirm-email" placeholder="confirm email" id="email" class="text form-control" size="30" />
                            </div>

                        </div>
                        <div class="inline" style="width: 100%;display: inline-flex;">
                            <div id="email" class="input-group" style="width: 100%;margin-right: 15px;">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input required type="text" value="" name="address" placeholder="address" id="email" class="text form-control" size="30" />
                            </div>
                        </div>
                        <div class="inline" style="width: 100%;display: inline-flex;">
                            <div id="email" class="input-group" style="width: 50%;margin-right: 15px;">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input required type="text" value="" name="username" placeholder="user" id="email" class="text form-control" size="30" />
                            </div>
                            <div id="password" class="input-group" style="width: 50%">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input required type="password" value="" name="password" placeholder="Mật khẩu" id="password" class="text form-control" size="30" />
                            </div>
                        </div>
                        <div class="action_bottom">
                            <input class="btn" type="submit" value="Đăng ký" />
                        </div>
                        <div class="req_pass">
                            <a class="come-back" href="/account/login">Quay về</a>
                        </div>
                        <input id='1339b416b316476dbc2ad9f265c6d182' name='g-recaptcha-response' type='hidden'><script src='https://www.google.com/recaptcha/api.js?render=6LdD18MUAAAAAHqKl3Avv8W-tREL6LangePxQLM-'></script><script>grecaptcha.ready(function() {grecaptcha.execute('6LdD18MUAAAAAHqKl3Avv8W-tREL6LangePxQLM-', {action: 'submit'}).then(function(token) {document.getElementById('1339b416b316476dbc2ad9f265c6d182').value = token;});});</script>
                    </form>
                                            @if (count($errors)>0)
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <li class="alert alert-danger alert-dismissible">{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        <span class="sr-only">Close</span>
                                                    </button>
                                            @endif
                </div>
            </div><!-- #register -->
            <!-- #customer-register -->
        </div>
        <div class="Clear"></div>
@endsection
