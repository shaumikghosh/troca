<!-- partial:partials/_header.html -->
<nav class="t-header">
    <div class="t-header-brand-wrapper"><a href="{{ route('dashboard') }}"><img class="logo"
                src="{{ asset('public/admin') }}/assets/images/logo.svg" alt=""> <img class="logo-mini"
                src="{{ asset('public/admin') }}/assets/images/logo_mini.svg" alt=""> </a><button
            class="t-header-toggler t-header-desk-toggler d-none d-lg-block"><svg class="logo" viewBox="0 0 200 200">
                <path class="top" d="
                M 40, 80
                C 40, 80 120, 80 140, 80
                C180, 80 180, 20  90, 80
                C 60,100  30,120  30,120
              "></path>
                <path class="middle" d="
                M 40,100
                L140,100
              "></path>
                <path class="bottom" d="
                M 40,120
                C 40,120 120,120 140,120
                C180,120 180,180  90,120
                C 60,100  30, 80  30, 80
              "></path>
            </svg></button></div>
    <div class="t-header-content-wrapper">
        <div class="t-header-content"><button class="t-header-toggler t-header-mobile-toggler d-block d-lg-none"><i
                    class="mdi mdi-menu"></i></button>
            <form action="#" class="t-header-search-box">
                <div class="input-group"><input type="text" class="form-control" id="inlineFormInputGroup"
                        placeholder="Search" autocomplete="off"> <button class="btn btn-primary" type="submit"><i
                            class="mdi mdi-arrow-right-thick"></i></button></div>
            </form>
            <ul class="nav ml-auto">
                <li class="nav-item dropdown"><a class="nav-link" href="#" id="notificationDropdown"
                        data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-bell-outline mdi-1x"></i></a>
                    <div class="dropdown-menu navbar-dropdown dropdown-menu-right"
                        aria-labelledby="notificationDropdown">
                        <div class="dropdown-header">
                            <h6 class="dropdown-title">Notifications</h6>
                            <p class="dropdown-title-text">You have 4 unread notification</p>
                        </div>
                        <div class="dropdown-body">
                            <div class="dropdown-list">
                                <div class="icon-wrapper rounded-circle bg-inverse-primary text-primary"><i
                                        class="mdi mdi-alert"></i></div>
                                <div class="content-wrapper"><small class="name">Storage Full</small> <small
                                        class="content-text">Server storage almost full</small></div>
                            </div>
                            <div class="dropdown-list">
                                <div class="icon-wrapper rounded-circle bg-inverse-success text-success"><i
                                        class="mdi mdi-cloud-upload"></i></div>
                                <div class="content-wrapper"><small class="name">Upload Completed</small> <small
                                        class="content-text">3 Files uploded successfully</small></div>
                            </div>
                            <div class="dropdown-list">
                                <div class="icon-wrapper rounded-circle bg-inverse-warning text-warning"><i
                                        class="mdi mdi-security"></i></div>
                                <div class="content-wrapper"><small class="name">Authentication Required</small>
                                    <small class="content-text">Please verify your password to continue using cloud
                                        services</small></div>
                            </div>
                        </div>
                        <div class="dropdown-footer"><a href="#">View All</a></div>
                    </div>
                </li>
                <li class="nav-item dropdown"><a class="nav-link" href="#" id="messageDropdown" data-toggle="dropdown"
                        aria-expanded="false"><i class="mdi mdi-message-outline mdi-1x"></i>
                        <span
                            class="notification-indicator notification-indicator-primary notification-indicator-ripple"></span></a>
                    <div class="dropdown-menu navbar-dropdown dropdown-menu-right" aria-labelledby="messageDropdown">
                        <div class="dropdown-header">
                            <h6 class="dropdown-title">Messages</h6>
                            <p class="dropdown-title-text">You have 4 unread messages</p>
                        </div>
                        <div class="dropdown-body">
                            <div class="dropdown-list">
                                <div class="image-wrapper"><img class="profile-img"
                                        src="{{ asset('public/admin') }}/assets/images/profile/male/image_1.png"
                                        alt="profile image">
                                    <div class="status-indicator rounded-indicator bg-success"></div>
                                </div>
                                <div class="content-wrapper"><small class="name">Clifford Gordon</small> <small
                                        class="content-text">Lorem ipsum dolor sit amet.</small></div>
                            </div>
                            <div class="dropdown-list">
                                <div class="image-wrapper"><img class="profile-img"
                                        src="{{ asset('public/admin') }}/assets/images/profile/female/image_2.png"
                                        alt="profile image">
                                    <div class="status-indicator rounded-indicator bg-success"></div>
                                </div>
                                <div class="content-wrapper"><small class="name">Rachel Doyle</small> <small
                                        class="content-text">Lorem ipsum dolor sit amet.</small></div>
                            </div>
                            <div class="dropdown-list">
                                <div class="image-wrapper"><img class="profile-img"
                                        src="{{ asset('public/admin') }}/assets/images/profile/male/image_3.png"
                                        alt="profile image">
                                    <div class="status-indicator rounded-indicator bg-warning"></div>
                                </div>
                                <div class="content-wrapper"><small class="name">Lewis Guzman</small> <small
                                        class="content-text">Lorem ipsum dolor sit amet.</small></div>
                            </div>
                        </div>
                        <div class="dropdown-footer"><a href="#">View All</a></div>
                    </div>
                </li>
                <li class="nav-item dropdown"><a class="nav-link" href="#" id="appsDropdown" data-toggle="dropdown"
                        aria-expanded="false"><i class="mdi mdi-apps mdi-1x"></i></a>
                    <div class="dropdown-menu navbar-dropdown dropdown-menu-right" aria-labelledby="appsDropdown">
                        <div class="dropdown-header">
                            <h6 class="dropdown-title">Apps</h6>
                            <p class="dropdown-title-text mt-2">Authentication required for 3 apps</p>
                        </div>
                        <div class="dropdown-body border-top pt-0"><a class="dropdown-grid"><i
                                    class="grid-icon mdi mdi-jira mdi-2x"></i> <span class="grid-tittle">Jira</span>
                            </a><a class="dropdown-grid"><i class="grid-icon mdi mdi-trello mdi-2x"></i> <span
                                    class="grid-tittle">Trello</span> </a><a class="dropdown-grid"><i
                                    class="grid-icon mdi mdi-artstation mdi-2x"></i> <span
                                    class="grid-tittle">Artstation</span> </a><a class="dropdown-grid"><i
                                    class="grid-icon mdi mdi-bitbucket mdi-2x"></i> <span
                                    class="grid-tittle">Bitbucket</span></a></div>
                        <div class="dropdown-footer"><a href="#">View All</a></div>
                    </div>
                </li>
                <li class="nav-item"><a class="nav-link" href="{{ route('user.logout') }}" onclick="return logout()"><i class="mdi mdi-power mdi-1x" style="color: red;"></i></a>
                </li>
            </ul>
        </div>
    </div>
    <script>
        function logout () {
            if(confirm("Are you sure to logout ?") === true) {
                return true;
            }
            return false;
        }
    </script>
</nav><!-- partial -->
