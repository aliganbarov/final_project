<?php use Http\Controllers\Auth\AuthController; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FinalProject</title>
    <!-- Bootstrap -->
    {{-- <link href="assets/css/bootstrap.min.css" rel="stylesheet"> --}}
    <!-- <script src="https://use.fontawesome.com/5d33201c90.js"></script> -->
    <!-- Bootstrap -->
    <link href="/assets/css/bootstrap.css" rel="stylesheet">
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom stylesheet -->
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/font-awesome.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- <link rel="stylesheet" type="text/css" href="assets/sass/partials/_footer.css"> -->
    <link rel="stylesheet" type="text/css" href="/assets/css/font-awesome.min.css">
    
    <script src="/assets/js/jquery-1.12.4.js"></script>
        <script src="//cdn.ckeditor.com/4.5.11/standard/ckeditor.js"></script>
    @yield('header')
</head>
<body>
    <section id="header">
        <div class="logo">
            <h1>Behance</h1>
        </div>
        <div class="navigation">
            <ul>
                @if (Auth::user())
                    <li class="menuListItem"><a href="/activity" class="menuItem">Activity</a></li>
                @endif
                <li class="menuListItem"><a href="/discover" class="menuItem">Discover</a></li>
                
                @if (Auth::user())
                    <li class="menuListItem"><a href="/profile" class="menuItem">Profile</a></li>
                    <li class="addWork text-center"><a href="/add">
                    <i class="fa fa-cloud-upload" aria-hidden="true"></i> Add Work
                </a></li>
                @endif
            </ul>
        </div>
        
        
        <div class="rightBar">
            @if (Auth::user())
                <div class="search">
                    <a href="#" class="searchIcon"><i class="fa fa-search" aria-hidden="true"></i></a>
                    <div class="searchExpanded">
                        <form method="post" action="">
                            <i class="fa fa-search" aria-hidden="true"></i>
                            <input type="text" name="search" placeholder="Search..." class="searchBar">
                        </form>
                    </div>
                </div>
                <div class="profileLogo">
                    <img src="https://a3.behance.net/img/profile/no-image-115.jpg?cb=181952656" class="avatar">
                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                    <div class="profileMenu">
                    <ul>
                        <li><a href="/profile">My Profile</a></li>
                        <li><a href="#">Statistics</a></li>
                        <li><a href="#">Work Experience</a></li>
                        <li><a href="/settings">Account Settings</a></li>
                        <li><a href="#">Help</a></li>
                        <li><a href="/logout">Log Out</a></li>
                    </ul>
                </div>
                </div>
            @else 
                <div class="login">
                    <a href="/login">Log in</a>
                    <a href="/register">Register</a>
                </div>
            @endif
        </div><!-- end .rightBar -->
        
    </section>

    <section id="collapseMenu" class="hide">
        <div class="icon">
            <a href="#"><i class="fa fa-bars" aria-hidden="true"></i></a>
             <div class="searchExpanded">
                    <form method="post" action="">
                        <i class="fa fa-search" aria-hidden="true"></i>
                        <input type="text" name="search" placeholder="Search..." class="searchBar">
                    </form>
                </div>
        </div>

        <div class="logo">
            <a href="#"><h1>Behance</h1></a>
        </div>

        <div class="search">
            <a href="#" class="searchIconSmall"><i class="fa fa-search" aria-hidden="true"></i></a>
            <div class="searchExpandedSmall">
                <form method="post" action="">
                    <i class="fa fa-search" aria-hidden="true"></i>
                    <input type="text" name="search" placeholder="Search..." class="searchBarSmall">
                </form>
            </div>
        </div>

        <div class="sidebar">
            <ul>
                <a href="/activity"><li class="active">Activity</li></a>
                <a href="/discover"><li>Discover</li></a>
                <a href="/profile"><li>Profile</li></a>
                <a href="/settings"><li>Account Settings</li></a>
                <a href="#"><li>Help</li></a>
                <a href="/logout"><li>Log Out</li></a>
            </ul>
        </div>
    </section>

    @yield('content')
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="/assets/js/jquery-1.12.4.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/assets/js/main.js"></script>
    <script src="/assets/js/ali.js"></script>
    <script src="/assets/js/settings.js"></script>
    <script src="/assets/js/upload.js"></script>
    <script src="/assets/js/add.js"></script>
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>

    @yield('footer')
    
</body>

</html>