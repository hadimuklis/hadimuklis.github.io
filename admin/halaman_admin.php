
<!doctype html>
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin | SuperM</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="http://localhost/multi_user/image/SuperM1.jpg">

    <link rel="stylesheet" href="http://localhost/multi_user/assets_admin/css/normalize.css">
    <link rel="stylesheet" href="http://localhost/multi_user
    /assets_admin/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/multi_user/assets_admin/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://localhost/multi_user/assets_admin/css/themify-icons.css">
    <link rel="stylesheet" href="http://localhost/multi_user/assets_admin/css/flag-icon.min.css">
    <link rel="stylesheet" href="http://localhost/multi_user/assets_admin/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="http://localhost/Aplikasi-Sistem-Informasi-SMA-Mekar-Arum-master/assets_admin/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="http://localhost/multi_user/assets_admin/scss/style.css">
    <link href="http://localhost/multi_user/assets_admin/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="http://localhost/Aplikasi-Sistem-Informasi-SMA-Mekar-Arum-master/https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src="http://localhost/multi_user
                    /image/logo.png" alt="Logo" width="50"></a>
                <a class="navbar-brand hidden" href="./"><img src="http://localhost/multi_user/image/SuperM1.jpg" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="http://localhost/multi_user/admin/halaman_admin.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <li>
                        <a href="http://localhost/multi_user/admin/profil.php"> <i class="menu-icon fa fa-user"></i>Profil </a>
                    </li>
                    <li>
                        <a href="http://localhost/multi_user/admin/data.php"> <i class="menu-icon fa fa-calendar"></i>Data</a>
                    </li>

                    <li>
                        <a href="logout.php"> <i class="menu-icon fa fa-sign-out"></i>Logout </a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <header id="header" class="header">
            <div class="header-menu">
                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="logout.php">Logout
                        </a>
                    </div>

                </div>
            </div>
        </header><!-- /header -->
        <!-- Header-->

        <div class="content mt-12">
        	<div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title mb-3">Administrator</strong>
                    </div>
                    <div class="card-body">
                        <div class="mx-auto d-block">
                            <img class="rounded-circle mx-auto d-block" src="http://localhost/multi_user/image/SuperM1.jpg" alt="Card image cap" width="150" height="150">
                            <h5 class="text-sm-center mt-2 mb-1">Selamat Datang</h5>
                            <div class="location text-sm-center"> Di SMK SuperM
                            </div>
                            <div class="location text-sm-center"> We Are The Future</div>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="http://localhost/multi_user/assets_admin/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="http://localhost/multi_user/https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="http://localhost/multi_user
    /assets_admin/js/plugins.js"></script>
    <script src="http://localhost/multi_user/assets_admin/js/main.js"></script>


    <script src="http://localhost/multi_user/assets_admin/js/lib/chart-js/Chart.bundle.js"></script>
    <script src="http://localhost/multi_user/assets_admin/js/dashboard.js"></script>
    <script src="http://localhost/multi_user/assets_admin/js/widgets.js"></script>
    <script src="http://localhost/multi_user/assets_admin/js/lib/vector-map/jquery.vmap.js"></script>
    <script src="http://localhost/multi_user/assets_admin/js/lib/vector-map/jquery.vmap.min.js"></script>
    <script src="http://localhost/multi_user
    /assets_admin/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="http://localhost/multi_user/assets_admin/js/lib/vector-map/country/jquery.vmap.world.js"></script>
    <script>
        ( function ( $ ) {
            "use strict";

            jQuery( '#vmap' ).vectorMap( {
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: [ '#1de9b6', '#03a9f5' ],
                normalizeFunction: 'polynomial'
            } );
        } )( jQuery );
    </script>

</body>
</html>
