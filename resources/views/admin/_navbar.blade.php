<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
                <i class="fas fa-th-large"></i>
            </a>
        </li>

{{--infomation--}}
        <li class="nav-item dropdown user user-menu">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
                <img src="{{asset('/img/admin.png')}}" class="user-image" alt="User Image">
                <span class="hidden-xs">admin</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <div class="dropdown-divider"></div>
                <div class="d-flex bd-highlight">
                    <div class="p-2 bd-highlight">
                        <a href="{{ route('admin.changePass') }}" class="btn btn-default">{{__('labels.L-changePass')}}</a>
                    </div>
                    <div class="ml-auto p-2 bd-highlight">
                            <a href="{{ route('admin.logout') }}" class="btn btn-default">{{__('labels.L-logout')}}</a>
                    </div>
                    <form id="logout" action="#" method="POST" style="display: none;">
                    </form>
                </div>
            </div>
        </li>
    </ul>
</nav>
