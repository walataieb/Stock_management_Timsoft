@php
    use Carbon\Carbon;
@endphp
<nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
        </li>
    </ul>

    <!-- Right navbar links -->
    @if(count(config('panel.available_languages', [])) > 1)
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                {{ strtoupper(app()->getLocale()) }}
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                @foreach(config('panel.available_languages') as $langLocale => $langName)
                <a class="dropdown-item" href="{{ url()->current() }}?change_language={{ $langLocale }}">{{ strtoupper($langLocale) }} ({{ $langName }})</a>
                @endforeach
            </div>
        </li>
    </ul>

    @endif
    <ul class="navbar-nav ml-auto">
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
                <i class="far fa-bell"></i>
                @if(auth()->user()->notifications->count())
                <span class="badge badge-warning navbar-badge">{{ auth()->user()->unreadNotifications->count() }}</span>
                @endif
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <span class="dropdown-item float-left">{{ auth()->user()->unreadNotifications->count() }} Notifications
                <a href="{{ route('client.markRead') }}"><span class="float-right text-muted text-sm">Mark all as read</span></a>
                </span>
                
                <div class="dropdown-divider"></div>
                @foreach (auth()->user()->unreadNotifications as $notification)
                <!-- <a href="#" class="dropdown-item">
                    <i class="fas fa-envelope mr-2"></i> {{ $notification->data['type'] }}
                    <span class="float-right text-muted text-sm">{{ \Carbon\Carbon::parse($notification->updated_at)->diffForhumans() }}</span>
                </a> -->
                <a href="{{ route('client.notification', $notification->id) }}" class="dropdown-item" style="background-color: #edf2fa">
                    <!-- Message Start -->
                    <div class="media">
                    
                    <span style="color: {{ $notification->data['color'] }}"><i class="fas fa-envelope mr-3"  ></i></span>
                    <!-- <img src="../../dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle"> -->
                    <div class="media-body">
                        <h3 class="dropdown-item-title">
                        {{ $notification->data['type'] }}
                        <!-- <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span> -->
                        </h3>
                        <p class="text-sm">{{ $notification->data['title'] }}</p>
                        <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> {{ \Carbon\Carbon::parse($notification->updated_at)->diffForhumans() }}</p>
                    </div>
                    </div>
                    <!-- Message End -->
                </a>
                <div class="dropdown-divider"></div>
                @endforeach
                @foreach (auth()->user()->readNotifications as $notification)
                <a href="#" class="dropdown-item">
                    <!-- Message Start -->
                    <div class="media">
                    
                    <span style="color: {{ $notification->data['color'] }}"><i class="fas fa-envelope mr-3"  ></i></span>
                    <div class="media-body">
                        <h3 class="dropdown-item-title">
                        {{ $notification->data['type'] }}
                        </h3>
                        <p class="text-sm">{{ $notification->data['title'] }}</p>
                        <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> {{ \Carbon\Carbon::parse($notification->created_at)->diffForhumans() }}</p>
                    </div>
                    </div>
                    <!-- Message End -->
                </a>
                <div class="dropdown-divider"></div>
                @endforeach

                
                <a href="#" class="dropdown-item dropdown-footer">{{ trans('global.see_all_notifications') }}</a>
            </div>
        </li>
    </ul>
</nav>