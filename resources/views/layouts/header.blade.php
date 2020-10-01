<header id="header" class="header">
    <div class="top-left">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ url('/') }}"><img style="width:40px" src="{{ asset('image/logo/yayasan_soposurung_logo.png') }}" alt="Logo"> Yayasan TB Soposurung</a>
            <!-- <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a> -->
        </div>
    </div>
    <div class="top-right">
        <div class="header-menu">
            <div class="user-area dropdown float-right">
                <a href="/" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img style="width:40px" src="{{ asset('image/logo/yayasan_soposurung_logo.png') }}" alt="Yasop">&nbsp;Admin
                </a>
                <div class="user-menu dropdown-menu">
                    <a class="nav-link" href="{{ url('/logout') }}"><i class="fa fa-power-off"></i>Logout</a>
                </div>
            </div>
        </div>
    </div>
</header><!-- /header -->
