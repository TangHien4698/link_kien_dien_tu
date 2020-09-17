@extends('client.layout')
@section('content')
        <div id="Wrapper">
            <div id="layout-page-login">
                <div id="customer-login">
		<span class="header-contact header-page clearfix">
			<h1 class="title-customers" id="title-login">Đăng nhập</h1>
		</span>
                    <div id="login" class="userbox">
                        <div class="accounttype">
                            <h2 class="title"></h2>
                        </div>
                        <form accept-charset='UTF-8' action='{{url('accesslogin')}}' id='customer_login' method='post'>
                            {{ csrf_field() }}
                            <input name='form_type' type='hidden' value='customer_login'>
                            <input name='utf8' type='hidden' value='✓'>


                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input required type="text" value="" name="username" id="customer_email" placeholder="Email" class="text form-control" aria-describedby="basic-addon1" />
                            </div>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input required type="password" value="" name="password" id="customer_password" placeholder="Mật khẩu" class="text form-control" size="16" />
                            </div>


                            <div class="action_bottom">
                                <input class="btn btn-signin" type="submit" value="Đăng nhập" />
                            </div>
                            <div class="req_pass">
                                <a href="#" onclick="showRecoverPasswordForm();return false;">Quên mật khẩu?</a>

                                hoặc <a href="/account/register" title="Đăng ký">Đăng ký</a>
                            </div>


                            <input id='43028dd14beb498bb6e5a9fead0a7be6' name='g-recaptcha-response' type='hidden'><script src='https://www.google.com/recaptcha/api.js?render=6LdD18MUAAAAAHqKl3Avv8W-tREL6LangePxQLM-'></script><script>grecaptcha.ready(function() {grecaptcha.execute('6LdD18MUAAAAAHqKl3Avv8W-tREL6LangePxQLM-', {action: 'submit'}).then(function(token) {document.getElementById('43028dd14beb498bb6e5a9fead0a7be6').value = token;});});</script></form>
                    </div>

                    <div id="recover-password" style="display:none;" class="userbox">
                        <div class="accounttype">
                            <h2 class="title-customers">Phục hồi mật khẩu</h2>
                        </div>

                        <form accept-charset='UTF-8' action='/account/recover' method='post'>
                            <input name='form_type' type='hidden' value='recover_customer_password'>
                            <input name='utf8' type='hidden' value='✓'>


                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input required type="email" value="" name="email" id="recover-email" placeholder="Email" class="text form-control" aria-describedby="basic-addon1" />
                            </div>

                            <div class="action_bottom">
                                <input class="btn" type="submit" value="Gửi" />
                            </div>
                            <div class="req_pass">
                                <a href="#" onclick="hideRecoverPasswordForm();return false;">Hủy</a>
                            </div>

                            <input id='c8e21ca41c2e4480a96c4998436090ad' name='g-recaptcha-response' type='hidden'><script src='https://www.google.com/recaptcha/api.js?render=6LdD18MUAAAAAHqKl3Avv8W-tREL6LangePxQLM-'></script><script>grecaptcha.ready(function() {grecaptcha.execute('6LdD18MUAAAAAHqKl3Avv8W-tREL6LangePxQLM-', {action: 'submit'}).then(function(token) {document.getElementById('c8e21ca41c2e4480a96c4998436090ad').value = token;});});</script></form>
                    </div>


                </div>
            </div>
            <script>



                function showRecoverPasswordForm() {
                    document.getElementById('recover-password').style.display = 'block';
                    document.getElementById('login').style.display='none';
                    document.getElementById('title-login').style.display='none';

                }
                function hideRecoverPasswordForm() {
                    document.getElementById('recover-password').style.display = 'none';
                    document.getElementById('login').style.display = 'block';
                    document.getElementById('title-login').style.display='block';
                }
                if (window.location.hash == '#recover') { showRecoverPasswordForm() }
            </script>

        </div>
        <div class="Clear"></div>
    @endsection

