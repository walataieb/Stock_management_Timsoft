<div class="sidebar">
    <nav class="sidebar-nav">

        <ul class="nav">
            <li class="nav-item">
                <a href="{{ route("user.home") }}" class="nav-link">

                    {{ trans('global.dashboard') }}
                </a>
            </li>
            @can('user_management_access')
                <li class="nav-item nav-dropdown">
                    <a class="nav-link  nav-dropdown-toggle" href="#">

                        {{ trans('cruds.userManagement.title') }}
                    </a>
                    <ul class="nav-dropdown-items">
                        @can('permission_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.permissions.index") }}" class="nav-link {{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}">

                                    {{ trans('cruds.permission.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('role_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.roles.index") }}" class="nav-link {{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}">

                                    {{ trans('cruds.role.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('user_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.users.index") }}" class="nav-link {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}">

                                    {{ trans('cruds.user.title') }}
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @can('country_access')
                <li class="nav-item">
                    <a href="{{ route("admin.countries.index") }}" class="nav-link {{ request()->is('admin/countries') || request()->is('admin/countries/*') ? 'active' : '' }}">

                        {{ trans('cruds.colis.add') }}
                    </a>
                </li>
            @endcan
            @can('city_access')
                <li class="nav-item">
                    <a href="{{ route("admin.cities.index") }}" class="nav-link {{ request()->is('admin/cities') || request()->is('admin/cities/*') ? 'active' : '' }}">

                       {{ trans('cruds.colis.hist') }}
                    </a>
                </li>
            @endcan
            @can('trip_access')
                <li class="nav-item">
                    <a href="{{ route("admin.trips.index") }}" class="nav-link {{ request()->is('admin/trips') || request()->is('admin/trips/*') ? 'active' : '' }}">

                        {{ trans('cruds.colis.suivi') }}
                    </a>
                </li>
            @endcan
              @can('trip_access')
                <li class="nav-item">
                    <a href="{{ route("admin.trips.index") }}" class="nav-link {{ request()->is('admin/trips') || request()->is('admin/trips/*') ? 'active' : '' }}">

                        {{ trans('cruds.rapport.title_singular') }}
                    </a>
                </li>
            @endcan
            @if(file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php')))
                @can('profile_password_edit')
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('profile/password') || request()->is('profile/password/*') ? 'active' : '' }}" href="{{ route('profile.password.edit') }}">
                            <i class="fa-fw fas fa-key nav-icon">
                            </i>
                            {{ trans('global.change_password') }}
                        </a>
                    </li>
                @endcan
            @endif
        </ul>

    </nav>

</div>
