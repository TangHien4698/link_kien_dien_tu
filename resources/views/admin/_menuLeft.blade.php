@php $route = Route::currentRouteName(); @endphp

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{  route('admin.index') }}" class="brand-link">
        <img src="{{asset('/img/logo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3">
        <span class="brand-text font-weight-light">Manager</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

{{--                <li class="nav-item has-treeview">--}}
{{--                    <a href="{{route('admin.index')  }}" class="nav-link ">--}}
{{--                        <i class="nav-icon fas fa-tachometer-alt"></i>--}}
{{--                        <p>--}}
{{--                            Dashboard--}}
{{--                            --}}{{-- <i class="right fas fa-angle-left"></i> --}}
{{--                        </p>--}}
{{--                    </a>--}}
{{--                </li>--}}

                <li class="nav-item">
                    <a href="{{ route('admin.products.index') }}" class="nav-link @if(strpos($route, 'admin.products') !== false) active @endif">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            {{__('labels.L-listProduct')}}
                        </p>
                    </a>
                </li>

                <!-- manager group -->
                <li class="nav-item">
                    <a href="{{route('admin.categories.index')}}" class="nav-link @if(strpos($route, 'admin.categories') !== false) active @endif">
                    <i class="nav-icon fa fa-list-alt"></i>
                        <p>
                            {{__('labels.L-listCategory')}}
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('admin.users.index')}}" class="nav-link @if(strpos($route, 'admin.users') !== false) active @endif">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            {{__('labels.L-listUser')}}
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('admin.feedbacks.index')}}" class="nav-link @if(strpos($route, 'admin.feedbacks') !== false) active @endif">
{{--                        <i class="nav-icon fas fa-users"></i>--}}
                        <i class="nav-icon fas fa-comments"></i>
                        <p>
                            {{__('labels.L-listFeedback')}}
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('admin.orders.index')}}" class="nav-link @if(strpos($route, 'admin.orders') !== false) active @endif">
                        <i class="nav-icon fas fa-shopping-cart"></i>
                        <p>
                            {{__('labels.L-listOrder')}}
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('admin.blogs.index')}}" class="nav-link @if(strpos($route, 'admin.blogs') !== false) active @endif">
                        <i class="nav-icon fas fa-blog"></i>
                        <p>
                            {{__('labels.L-listBlogs')}}
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
