<style>
    .brand-image{
        opacity: .8;
    }
</style>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ URL('/admin') }}" class="brand-link">
        <img src="{{ asset($settings->icon) }}" alt="MAALMS icon" class="brand-image img-circle elevation-3">
        <span class="brand-text font-weight-light">{{ $settings->short_name }}</span>
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
                <li class="nav-item {{ Request::routeIs('admin.role')||Request::routeIs('admin.role.edit') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ Request::routeIs('admin.role')||Request::routeIs('admin.role.edit') ? 'active' : '' }}">
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
                <li class="nav-item  {{ Request::routeIs('admin.user')||Request::routeIs('admin.user.edit') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ Request::routeIs('admin.user')||Request::routeIs('admin.user.edit') ? 'active' : '' }}">
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
                <li class="nav-item  {{ Request::routeIs('admin.banner')||Request::routeIs('admin.banner.edit') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ Request::routeIs('admin.banner')||Request::routeIs('admin.banner.edit') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            {{ __('Banner Manage') }}
                            <i class="fas fa-angle-left right"></i>

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
                    <li class="nav-item {{ Request::routeIs('admin.blog')||Request::routeIs('admin.blog.edit') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ Request::routeIs('admin.blog')||Request::routeIs('admin.blog.edit') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-blog"></i>
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

                <li class="nav-item {{ Request::routeIs('admin.course.category')||Request::routeIs('admin.course.category.edit')||Request::routeIs('admin.course')||Request::routeIs('admin.course.edit') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ Request::routeIs('admin.course.category')||Request::routeIs('admin.course.category.edit')||Request::routeIs('admin.course')||Request::routeIs('admin.course.edit') ? 'active' : '' }}">
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

                <li class="nav-item {{ Request::routeIs('admin.instructor')||Request::routeIs('admin.instructor.edit') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ Request::routeIs('admin.instructor')||Request::routeIs('admin.instructor.edit') ? 'active' : '' }}">
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
                <li class="nav-item {{ Request::routeIs('admin.feedback')||Request::routeIs('admin.feedback.edit') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ Request::routeIs('admin.feedback')||Request::routeIs('admin.feedback.edit') ? 'active' : '' }}">
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
                    <li class="nav-item {{ Request::routeIs('admin.gallery')||Request::routeIs('admin.gallery.edit') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ Request::routeIs('admin.gallery')||Request::routeIs('admin.gallery.edit') ? 'active' : '' }}">
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
                <li class="nav-item {{ Request::routeIs('admin.siteimage')||Request::routeIs('admin.siteimage.edit')||Request::routeIs('admin.settings.index') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ Request::routeIs('admin.siteimage')||Request::routeIs('admin.siteimage.edit')||Request::routeIs('admin.settings.index') ? 'active' : '' }}">
                        <i class="nav-icon fas fas fa-fw fa-cog"></i>

                        <p>
                            {{ __('Settings') }}
                            <i class="fas fa-angle-left right"></i>

                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.settings.index') }}" class="nav-link {{ Request::routeIs('admin.settings.index') || Request::routeIs('admin.siteimage') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{ __('Site Settings') }}</p>
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
