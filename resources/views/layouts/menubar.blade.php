<body class="az-body az-dashboard-eight">

    <div class="az-header az-header-primary">
        <div class="container">
            <div class="az-header-left">
                <a href="index.html" class="az-logo">az<span>i</span>a</a>
                <a href="" id="azNavShow" class="az-header-menu-icon d-lg-none"><span></span></a>
            </div><!-- az-header-left -->
            <!--<div class="az-header-center">
        <input type="search" class="form-control" placeholder="Search for anything...">
        <button class="btn"><i class="fas fa-search"></i></button>
      </div> -->
            <!-- az-header-center -->
            <div class="az-header-right">
                <div class="dropdown az-profile-menu">
                    <a href="" class="az-img-user"><img src="https://via.placeholder.com/500x500" alt=""></a>
                    <div class="dropdown-menu">
                        <div class="az-dropdown-header d-sm-none">
                            <a href="" class="az-header-arrow"><i class="icon ion-md-arrow-back"></i></a>
                        </div>
                        <div class="az-header-profile">
                            <div class="az-img-user">
                                <img src="https://via.placeholder.com/500x500" alt="">
                            </div><!-- az-img-user -->
                            {{ session()->get('nama')}}
                        </div><!-- az-header-profile -->

                        <a href="#" class="dropdown-item"><i class="typcn typcn-user-outline"></i> My Profile</a>
                        <a href="#" class="dropdown-item"><i class="typcn typcn-edit"></i> Edit Profile</a>
                        <a href="{{url('/logout')}}" class="dropdown-item"><i class="typcn typcn-power-outline"></i> Sign Out</a>
                    </div><!-- dropdown-menu -->
                </div>
            </div><!-- az-header-right -->
        </div><!-- container -->
    </div><!-- az-header -->

    <div class="az-navbar az-navbar-two az-navbar-dashboard-eight">
        <div class="container">
            <div><a href="index.html" class="az-logo">az<span>i</span>a</a></div>
            <div class="az-navbar-search">
                <input type="search" class="form-control" placeholder="Search for schedules and events...">
                <button class="btn"><i class="fas fa-search "></i></button>
            </div><!-- az-navbar-search -->
            <ul class="nav">
                <li class="nav-label">Main Menu</li>
                <li class="nav-item active">
                    <a href="index.html" class="nav-link with-sub"><i class="typcn typcn-clipboard"></i>Dashboard</a>
                    <nav class="nav-sub">
                        <a href="#" class="nav-sub-link">Page #1</a>
                        <a href="#" class="nav-sub-link">Page #2</a>
                        <a href="#" class="nav-sub-link">Page #3</a>
                    </nav>
                </li><!-- nav-item -->
                <li class="nav-item">
                    <a href="" class="nav-link with-sub"><i class="typcn typcn-document"></i>Admin</a>
                    <nav class="nav-sub">
                        <a href="#" class="nav-sub-link">Page #1</a>
                        <a href="#" class="nav-sub-link">Page #2</a>
                        <a href="#" class="nav-sub-link">Page #3</a>
                    </nav>
                </li>
            </ul><!-- nav -->
        </div><!-- container -->
    </div><!-- az-navbar -->