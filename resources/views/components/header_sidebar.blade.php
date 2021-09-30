<div class="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <nav class="navbar navbar-expand-lg navbar-light px-0 justify-content-between">
                    <a class="navbar-brand" href="{{ url('dashboard') }}">
                        <img class="avatarfoto" src="{{Storage::url(setting()->logo)}}" alt="">
                    </a>


                    <div class="dashboard_log my-2">
                        <div class="d-flex align-items-center">
                            
                            <div class="profile_log dropdown">
                                <div class="user" data-toggle="dropdown">
                                    @if (Auth::user()->foto)
                                    <div class="avatar" style="background-image: url('{{Storage::url(Auth::user()->foto)}}');"></div>
                                    @else
                                    <div class="avatar" style="background: #cacaca;"></div>
                                    @endif
                                    <span class="name">{{Auth::user()->name}}</span>
                                    <span class="arrow"><i class="la la-angle-down"></i></span>
                                </div>
                                <div class="dropdown-menu dropdown-menu-right">
                                    {{-- <a href="accounts.html" class="dropdown-item">
                                        <i class="la la-user"></i> Account
                                    </a>
                                    <a href="history.html" class="dropdown-item">
                                        <i class="la la-book"></i> History
                                    </a>
                                    <a href="settings.html" class="dropdown-item">
                                        <i class="la la-cog"></i> Setting
                                    </a>
                                    <a href="lock.html" class="dropdown-item">
                                        <i class="la la-lock"></i> Lock
                                    </a> --}}
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <a href="#" class="dropdown-item logout" onclick="
                                                    this.closest('form').submit();">
                                            <i class="la la-sign-out"></i> Logout

                                            
                                        </a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="sidebar">
    <div class="menu">
        <ul>
            <li>
                <a href="{{ url('dashboard') }}" data-toggle="tooltip" data-placement="right" title="Dashboard">
                    <span><i class="la la-igloo"></i></span>
                </a>
            </li>
            @if (Auth::user()->estado == 'activo')
            <li><a href="{{ url('conversor') }}" data-toggle="tooltip" data-placement="right" title="Exchange">
                    <span><i class="la la-exchange-alt"></i></span>
                </a>
            </li>
            <li><a href="{{ url('my-portfolio') }}" data-toggle="tooltip" data-placement="right" title="Mi portafolio">
                    <span><i class="la la-user"></i></span>
                </a>
            </li>
            @endif
            <li><a href="{{ url('settings') }}" data-toggle="tooltip" data-placement="right" title="Setting">
                    <span><i class="la la-tools"></i></span>
                </a>
            </li>
        </ul>
    </div>
</div>