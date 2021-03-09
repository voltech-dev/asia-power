<!-- Header -->
<div class="header">
    
    <!-- Logo -->
    <div class="header-left">
        <a href="index-2.html" class="logo">
            <img src="{{asset('/img/logo.png')}}" alt="Logo">
        </a>
        <a href="index-2.html" class="logo logo-small">
            <img src="{{asset('/img/logo-small.png')}}" alt="Logo" width="30" height="30">
        </a>
    </div>
    <!-- /Logo -->
    
    <!-- Sidebar Toggle -->
    <a href="javascript:void(0);" id="toggle_btn">
        <i class="fas fa-bars"></i>
    </a>
    <!-- /Sidebar Toggle -->
    
    <!-- Search -->
    <div class="top-nav-search">
        <form>
            <input type="text" class="form-control" placeholder="Search here">
            <button class="btn" type="submit"><i class="fas fa-search"></i></button>
        </form>
    </div>
    <!-- /Search -->
    
    <!-- Mobile Menu Toggle -->
    <a class="mobile_btn" id="mobile_btn">
        <i class="fas fa-bars"></i>
    </a>
    <!-- /Mobile Menu Toggle -->
    
    <!-- Header Menu -->
    <ul class="nav user-menu">
    
     
        
       
        
        <!-- User Menu -->
        <li class="nav-item dropdown has-arrow main-drop">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                <span class="user-img">
                    <img src="assets/img/profiles/avatar-01.jpg" alt="">
                    <span class="status online"></span>
                </span>
                <span>Admin</span>
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="profile.html"><i data-feather="user" class="mr-1"></i> Profile</a>
                <a class="dropdown-item" href="settings.html"><i data-feather="settings" class="mr-1"></i> Settings</a>
                <a class="dropdown-item" href="login.html"><i data-feather="log-out" class="mr-1"></i> Logout</a>
            </div>
        </li>
        <!-- /User Menu -->
        
    </ul>
    <!-- /Header Menu -->
    
</div>
<!-- /Header -->