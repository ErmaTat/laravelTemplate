<div class="header header-one">
    <a href="index.html"
        class="d-inline-flex d-sm-inline-flex align-items-center d-md-inline-flex d-lg-none align-items-center device-logo">
        <img src="assets/img/logo.png" class="img-fluid logo2" alt="Logo">
    </a>
    <div class="main-logo d-inline float-start d-lg-flex align-items-center d-none d-sm-none d-md-none">
        <div class="logo-white">
            <a href="index.html">
                <img src="assets/img/logo-full-white.png" class="img-fluid logo-blue" alt="Logo">
            </a>
            <a href="index.html">
                <img src="assets/img/logo-small-white.png" class="img-fluid logo-small" alt="Logo">
            </a>
        </div>
        <div class="logo-color">
            <a href="index.html">
                <img src="assets/img/logo.png" class="img-fluid logo-blue" alt="Logo">
            </a>
            <a href="index.html">
                <img src="assets/img/logo-small.png" class="img-fluid logo-small" alt="Logo">
            </a>
        </div>
    </div>

    <a href="javascript:void(0);" id="toggle_btn">
        <span class="toggle-bars">
            <span class="bar-icons"></span>
            <span class="bar-icons"></span>
            <span class="bar-icons"></span>
            <span class="bar-icons"></span>
        </span>
    </a>


    <div class="top-nav-search">
        <form>
            <input type="text" class="form-control" placeholder="Search here">
            <button class="btn" type="submit"><img src="{{ asset('backend/assets/img/icons/search.svg') }}"
                    alt="img"></button>
        </form>
    </div>


    <a class="mobile_btn" id="mobile_btn">
        <i class="fas fa-bars"></i>
    </a>

   
    <ul class="nav nav-tabs user-menu">
       
        <li class="nav-item  has-arrow dropdown-heads ">
            <div class="position-relative d-flex h-10 rounded-xl w-52 border-2 p-0.5 sm:w-[16.5rem] border-input bg-layer3">
                <div class="position-relative mr-1 d-flex  align-items-center ml-1.5 flex-auto">
                    {{-- <img
                        class="mr-1.5 flex h-6 w-6 flex-none" src="/coin/NGN.rect.png"> --}}
                        <i class="fa fa-wallet"></i>
                    <div class="font-extrabold ellipsis w-0 flex-auto">  NGN&nbsp;0.00</div><svg
                        class="icon w-4 -rotate-90 text-secondary" viewBox="0 0 32 32">
                        <path
                            d="M20.1912 6.1001L9.79119 16.5001L20.1912 26.9001L23.2088 23.8825L15.8264 16.5001L23.2088 9.1177L20.1912 6.1001Z">
                        </path>
                    </svg>
                </div>
            </div>
        </li>
    
        <li class="nav-item dropdown has-arrow flag-nav">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button">
                <img src="{{ asset('backend/assets/img/flags/us1.png') }}" alt="flag"><span>English</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <a href="javascript:void(0);" class="dropdown-item">
                    <img src="{{ asset('assets/img/flags/us.png') }}" alt="flag"><span>English</span>
                </a>
            </div>
        </li>

        <li class="nav-item  has-arrow dropdown-heads ">
            <a href="javascript:void(0);" class="toggle-switch">
                <i class="fe fe-moon"></i>
            </a>
        </li>

        <li class="nav-item dropdown  flag-nav dropdown-heads">
            <a class="nav-link" data-bs-toggle="dropdown" href="#" role="button">
                <i class="fe fe-bell"></i> <span class="badge rounded-pill"></span>
            </a>
            <div class="dropdown-menu notifications">
                <div class="topnav-dropdown-header">
                    <div class="notification-title">Notifications <a href="notifications.html">View all</a>
                    </div>
                    <a href="javascript:void(0)" class="clear-noti d-flex align-items-center">Mark all as read
                        <i class="fe fe-check-circle"></i></a>
                </div>
                <div class="noti-content">
                    <ul class="notification-list">
                        <li class="notification-message">
                            <a href="profile.html">
                                <div class="d-flex">
                                    <span class="avatar avatar-md active">
                                        <img class="avatar-img rounded-circle" alt="avatar-img"
                                            src="assets/img/profiles/avatar-02.jpg">
                                    </span>
                                    <div class="media-body">
                                        <p class="noti-details"><span class="noti-title">Lex Murphy</span>
                                            requested access to <span class="noti-title">UNIX directory tree
                                                hierarchy</span></p>
                                        <div class="notification-btn">
                                            <span class="btn btn-primary">Accept</span>
                                            <span class="btn btn-outline-primary">Reject</span>
                                        </div>
                                        <p class="noti-time"><span class="notification-time">Today at 9:42
                                                AM</span></p>
                                    </div>
                                </div>
                            </a>
                        </li>

                    </ul>
                </div>
                <div class="topnav-dropdown-footer">
                    <a href="#">Clear All</a>
                </div>
            </div>
        </li>
        <li class="nav-item  has-arrow dropdown-heads ">
            <a href="javascript:void(0);" class="win-maximize">
                <i class="fe fe-maximize"></i>
            </a>
        </li>

        <li class="nav-item dropdown">
            <a href="javascript:void(0)" class="user-link  nav-link" data-bs-toggle="dropdown">
                <span class="user-img">
                    <img src="{{ asset('backend/assets/img/profiles/avatar-07.jpg') }}" alt="img"
                        class="profilesidebar">
                    <span class="animate-circle"></span>
                </span>
                <span class="user-content">
                    <span class="user-details">Admin</span>
                    <span class="user-name">{{ Auth::user()->name }}</span>
                </span>
            </a>
            <div class="dropdown-menu menu-drop-user">
                <div class="profilemenu">
                    <div class="subscription-menu">
                        <ul>
                            <li>
                                <a class="dropdown-item" href="profile.html">Profile</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="settings.html">Settings</a>
                            </li>
                        </ul>
                    </div>
                    <div class="subscription-logout">
                        <ul>
                            <li class="pb-0">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <a class="dropdown-item" href="#"
                                        onclick="event.preventDefault(); this.closest('form').submit();">Logout</a>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </li>

    </ul>

</div>
