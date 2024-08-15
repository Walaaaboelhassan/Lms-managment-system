<style>
    .brand-image{
        opacity: .8;
    }
</style>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ URL('/admin') }}" class="brand-link">
        <img src="{{ asset(config('app.icon')) }}" alt="MAALMS icon" class="brand-image img-circle elevation-3">
        <span class="brand-text font-weight-light">{{ __('MAAN | LMS') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                @canany(['isSuperAdmin','isAdmin'])
                <li class="nav-item {{ Request::routeIs('admin.dashboard') ? 'menu-open' : '' }}">
                    <a href="{{ route('admin.dashboard') }}" class="nav-link {{ Request::routeIs('admin.dashboard') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            {{ 'Dashboard' }}

                        </p>
                    </a>

                </li>
                @endcanany
                @can('isSuperAdmin')
                <li class="nav-item {{ Request::routeIs('admin.role') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ Request::routeIs('admin.role') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-user-lock"></i>
                        <p>
                            {{ __('Role Manage') }}
                            <i class="fas fa-angle-left right"></i>

                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.role') }}" class="nav-link {{ Request::routeIs('admin.role') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{ __(' Role List') }}</p>
                            </a>
                        </li>
                    </ul>
                </li>
                @endcan
                @canany(['isSuperAdmin','isAdmin'])
                <li class="nav-item  {{ Request::routeIs('admin.user') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ Request::routeIs('admin.user') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            {{ __('User Manage') }}
                            <i class="fas fa-angle-left right"></i>

                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.user') }}" class="nav-link {{ Request::routeIs('admin.user') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{ __(' User List') }}</p>
                            </a>
                        </li>
                    </ul>
                </li>
                @endcanany
                @canany(['isSuperAdmin','isAdmin','isInstructor'])
                <li class="nav-item {{ Request::routeIs('admin.banner') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ Request::routeIs('admin.banner') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            {{ __('Banner Manage') }}
                            <i class="fas fa-angle-left right nav-icon"></i>

                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.banner') }}" class="nav-link {{ Request::routeIs('admin.banner') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{ __(' Banner List') }}</p>
                            </a>
                        </li>

                    </ul>
                </li>
                    <li class="nav-item {{ Request::routeIs('admin.blog') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ Request::routeIs('admin.blog') ? 'active' : '' }}">
                        <i class="fas fa-blog"></i>
                        <p>
                            {{ __('Blog Manage') }}
                            <i class="fas fa-angle-left right"></i>

                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.blog') }}" class="nav-link {{ Request::routeIs('admin.blog') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{ __(' Blog List') }}</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item {{ Request::routeIs('admin.course.category')||Request::routeIs('admin.course') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ Request::routeIs('admin.course.category')||Request::routeIs('admin.course') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-laptop-code"></i>
                        <p>
                            {{ __('Course Manage') }}
                            <i class="fas fa-angle-left right"></i>

                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.course.category') }}" class="nav-link {{ Request::routeIs('admin.course.category') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{ __(' Course Category') }}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.course') }}" class="nav-link {{ Request::routeIs('admin.course') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{ __(' Course List') }}</p>
                            </a>
                        </li>

                    </ul>
                </li>
                    <li class="nav-item {{ Request::routeIs('admin.contact') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ Request::routeIs('admin.contact') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-envelope-open-text"></i>

                        <p>
                            {{ __('Contact Manage') }}
                            <i class="fas fa-angle-left right"></i>

                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.contact') }}" class="nav-link {{ Request::routeIs('admin.contact') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{ __(' Contact Info') }}</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item {{ Request::routeIs('admin.instructor') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ Request::routeIs('admin.instructor') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            {{ __('Instructor Manage') }}
                            <i class="fas fa-angle-left right"></i>

                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.instructor') }}" class="nav-link {{ Request::routeIs('admin.instructor') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{ __('Instructor List') }}</p>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item {{ Request::routeIs('admin.feedback') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ Request::routeIs('admin.feedback') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            {{ __('Feedback Manage') }}
                            <i class="fas fa-angle-left right"></i>

                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.feedback') }}" class="nav-link {{ Request::routeIs('admin.feedback') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{ __('Feedback List') }}</p>
                            </a>
                        </li>

                    </ul>
                </li>
                    <li class="nav-item {{ Request::routeIs('admin.gallery') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ Request::routeIs('admin.gallery') ? 'active' : '' }}">
                        <i class="nav-icon far fa-images"></i>
                        <p>
                            {{ __('Gallery Manage') }}
                            <i class="fas fa-angle-left right"></i>

                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.gallery') }}" class="nav-link {{ Request::routeIs('admin.gallery') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{ __('Gallery List') }}</p>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item {{ Request::routeIs('admin.siteimage') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ Request::routeIs('admin.siteimage') ? 'active' : '' }}">
                        <i class="nav-icon fas fas fa-fw fa-cog"></i>

                        <p>
                            {{ __('Settings') }}
                            <i class="fas fa-angle-left right"></i>

                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.siteimage') }}" class="nav-link {{ Request::routeIs('admin.siteimage') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{ __('Site Images') }}</p>
                            </a>
                        </li>

                    </ul>
                </li>
                @endcanany
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
