<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0" name="viewport" />
    <meta name="viewport" content="width=device-width" />
    <title>Movith Managements Control | @yield('title')</title>
    <link rel="stylesheet" href="dashboard/assets/css/siqtheme.css" />
    <script src="https://kit.fontawesome.com/bf3b9c3659.js" crossorigin="anonymous"></script>
    </script>
    <link rel="stylesheet" href="dashboard/assets/css/custom.css" />
    <link rel="stylesheet" href="dashboard/assets/css/plus.css">
    <link rel="apple-touch-icon" sizes="76x76" href="dashboard/assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" sizes="96x96" href="dashboard/assets/img/favicon.png" />

    <!-- Tambahan -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tail.select@0.5.15/css/bootstrap4/tail.select-default.css">

    {{-- Datatables --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
</head>

<body class="theme-dark">
    <div class="grid-wrapper sidebar-bg bg1">
        @include('dashboard.header')
        @include('dashboard.sidebar')
        <div class="main">
            @yield('content')
        </div>
        <div class="footer">
            <?php $y = date('Y') ?>
            <p class="text-center mt-3">Copyright © {{$y}} Movith Managements Control. All rights reserved.</p>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>


    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js">
    </script>
    <script type="text/javascript" charset="utf8"
        src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js">
    </script>

    <script src="dashboard/assets/scripts/movith.js"></script>
    <!-- Tambahan -->
    <script src="https://cdn.jsdelivr.net/npm/tail.select@0.5.15/js/tail.select.min.js"></script>

    <script src="dashboard/assets/scripts/tb_datatables.js"></script>
    <script src="dashboard/assets/scripts/siqtheme.js"></script>
    <script src="dashboard/assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>
    <script src="dashboard/assets/scripts/pages/fm_control.js"></script>
    <script src="dashboard/assets/scripts/pages/dashboard1.js"></script>


</body>

</html>
