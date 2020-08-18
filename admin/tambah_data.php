<!doctype html>
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <link rel="icon" type="image/png" href="http://localhost/multi_user/image/SuperM1.jpg"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="http://localhost/multi_user/assets_login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="http://localhost/multi_user/assets_login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="http://localhost/multi_user/assets_login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="http://localhost/multi_user/assets_login/vendor/animate/animate.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="http://localhost/multi_user/assets_login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="http://localhost/multi_user/assets_login/vendor/select2/select2.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="http://localhost/multi_user/assets_login/css/util.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/multi_user/assets_login/css/main.css">
<!--
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin | SuperM</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="http://localhost/multi_user/image/SuperM1.jpg">

    <link rel="stylesheet" href="http://localhost/multi_user/assets_admin/css/normalize.css">
    <link rel="stylesheet" href="http://localhost/multi_user/assets_admin/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/multi_user/assets_admin/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://localhost/multi_user/assets_admin/css/themify-icons.css">
    <link rel="stylesheet" href="http://localhost/multi_user/assets_admin/css/flag-icon.min.css">
    <link rel="stylesheet" href="http://localhost/multi_user/assets_admin/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="http://localhost/Aplikasi-Sistem-Informasi-SMA-Mekar-Arum-master/assets_admin/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="http://localhost/multi_user/assets_admin/scss/style.css">
    <link href="http://localhost/multi_user/css/assets_admin/lib/vector-map/jqvmap.min.css" rel="stylesheet">

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
                        <a href="http://localhost/multi_user/admin/profil"> <i class="menu-icon fa fa-user"></i>Profil </a>
                    </li>
                    </li>
                    <li class>
                        <a href="data.php"> <i class="menu-icon fa fa-table"></i>Data</a>
                    </li>
                    <li>
                        <a href="http://localhost/multi_user/logout.php"> <i class="menu-icon fa fa-sign-out"></i>Logout </a>
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
                        <a href="http://localhost/multi_user/logout.php">Logout
                        </a>
                    </div>

                </div>
            </div>
        </header><!-- /header -->
        <!-- Header-->

        <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100 p-l-50 p-r-50 p-t-77 p-b-30">
                <form class="login100-form validate-form" action="tambah_aksi.php" method="post">

                    <span class="login100-form-title p-b-49">
                        <img src ="http://localhost/multi_user/image/tambah.jpg" height='70px'>
                    <p>Tambah Data</p>
                    </span>
                    <br/>
                    <div class="wrap-input100 validate-input m-b-16" data-validate = "Nama is required">
                        <input class="input100" type="text" name="nama" placeholder="Nama">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <span class="lnr lnr-user"></span>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-16" data-validate = "Username is required">
                        <input class="input100" type ="text"name="username" placeholder="Username">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100"><span class="focus-input100"></span>
                        <span class="symbol-input100">
                        <span class="lnr lnr-user"></span>
                        </span>
                    </div>
                    <div class="wrap-input100 validate-input m-b-16">
                        <div class="wrap-input100 validate-input m-b-16" data-validate = "Username is required">
                            <div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
                        <input class="input100" type="password" name="password" placeholder="Password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <span class="lnr lnr-lock"></span>
                        </span>
                    </div>
                    
                    <div class="wrap-input100 validate-input m-b-16">
                  <label for="sel1">Level:</label>
                  <select class="input100" name="level">
                      <option>-</option>
                    <option>admin</option>
                     <option>guru</option>
                    <option>siswa</option>
                   </select>
                 </div>
                    <div class="container-login100-form-btn p-t-25">
                        <button class="login100-form-btn" type="submit" value="Tambah" onClick="return confirm('User berhasil ditambahkan')">
                            Tambah
                        </button>
                    </div>
                </form>

    <!-- Right Panel -->

    <script src="http://localhost/multi_user/assets_admin/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="http://localhost/multi_user/https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="http://localhost/multi_user/assets_admin/js/plugins.js"></script>
    <script src="http://localhost/multi_user/cassets_admin/js/main.js"></script>


    <script src="http://localhost/multi_user/assets_admin/js/lib/chart-js/Chart.bundle.js"></script>
    <script src="http://localhost/multi_user/assets_admin/js/dashboard.js"></script>
    <script src="http://localhost/multi_user/assets_admin/js/widgets.js"></script>
    <script src="http://localhost/multi_user/assets_admin/js/lib/vector-map/jquery.vmap.js"></script>
    <script src="http://localhost/multi_user/assets_admin/js/lib/vector-map/jquery.vmap.min.js"></script>
    <script src="http://localhost/multi_user/assets_admin/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
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
