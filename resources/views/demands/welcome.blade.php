<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="©Bintang Tobing" />
    <meta name="description" content="@yield('description')">
    <link rel="shortcut icon"
        href="https://res.cloudinary.com/sarjanamalam/image/upload/v1586767431/movith/based/icon_stawjx.png"
        alt="icon movith">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Movith - @yield('title')</title>
    <link href="css/plugins.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">

    <link rel="stylesheet" href="https://vjs.zencdn.net/7.8.3/video-js.css">
    <script src="https://vjs.zencdn.net/7.8.3/video.js"></script>
 
</head>
<script>
    function startTime() {
        var today = new Date();
        var h = today.getHours();
        var m = today.getMinutes();
        var s = today.getSeconds();
        m = checkTime(m);
        s = checkTime(s);
        document.getElementById('time').innerHTML =
            h + ":" + m + ":" + s;
        var t = setTimeout(startTime, 500);
    }

    function checkTime(i) {
        if (i < 10) {
            i = "0" + i
        }; // add zero in front of numbers < 10
        return i;
    }

</script>

<body class="ondemand" onload="startTime()">
    <div class="body-inner">

        <div class="body-inner">

            <header id="header" data-transparent="true" class="dark header-logo-center">
                <div class="header-inner">
                    <div class="container">

                        <div id="logo">
                            <a href="/">
                                <span class="logo-default"><img
                                        src="https://res.cloudinary.com/sarjanamalam/image/upload/v1587356460/movith/based/letter-logo-white_elebz7.png"
                                        alt=""></span>
                                <span class="logo-dark"><img
                                        src="https://res.cloudinary.com/sarjanamalam/image/upload/v1587356460/movith/based/letter-logo-white_elebz7.png"
                                        alt=""></span>
                            </a>
                        </div>
                        <div id="mainMenu-trigger">
                            <a class="lines-button x"><span class="lines"></span></a>
                        </div>

                        <div id="mainMenu" class="menu-sub-title">
                            <div class="container">
                                <nav>
                                    <ul>
                                        <?php
                                            $day = date('l - d M Y')
                                        ?>
                                        <li><a><span id="time"></span><span class="menu-sub-title">{{$day}}</span></a>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li class="dropdown"> <a href="#">{{session()->get('nama')}}<span
                                                    class="menu-sub-title"><span style="color:#17ba91;"><i
                                                            class="fas fa-circle"></i></span>
                                                    Online</span></a>
                                            <ul class="dropdown-menu">
                                                <?php $tokens =  bin2hex(openssl_random_pseudo_bytes(64));?>
                                                <li><a href="#"><i class="icon-settings"></i> User Settings</a>
                                                <li><a href="/logout/{{session()->get('id')}}/{{$tokens}}"><i
                                                            class="icon-log-out"></i> Logout</a>
                                            </ul>
                                </nav>
                            </div>
                        </div>

                    </div>
                </div>
            </header>
            @yield('content')
        </div>

        <script src=" js/jquery.js"> </script>
        <script src="js/plugins.js"></script>

        <script src="js/functions.js"></script>
</body>

</html>
