<?php 
include('../koneksi.php'); 
?>

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

       <?php
        //jika sudah mendapatkan parameter GET id dari URL
        if(isset($_GET['id'])){
            //membuat variabel $id untuk menyimpan id dari GET id di URL
            $id = $_GET['id'];
            
            //query ke database SELECT tabel mahasiswa berdasarkan id = $id
            $select = mysqli_query($koneksi, "SELECT * FROM user WHERE id='$id'") or die(mysqli_error($koneksi));
            
            //jika hasil query = 0 maka muncul pesan error
            if(mysqli_num_rows($select) == 0){
                echo '<div class="alert alert-warning">ID tidak ada dalam database.</div>';
                exit();
            //jika hasil query > 0
            }else{
                //membuat variabel $data dan menyimpan data row dari query
                $data = mysqli_fetch_assoc($select);
            }
        }
        ?>
        
        <?php
        //jika tombol simpan di tekan/klik
        if(isset($_POST['submit'])){
            $nama           = $_POST['nama'];
            $username       = $_POST['username'];
            $Password       = $_POST['Password'];
            $level          = $_POST['level'];
            
            $sql = mysqli_query($koneksi, "UPDATE user SET nama='$nama', username='$username', Password='$Password', level='$level' WHERE id='$id'") or die(mysqli_error($koneksi));
            
            if($sql){
                echo '<script>alert("Berhasil menyimpan data."); document.location="edit.php?id='.$id.'";</script>';
            }else{
                echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>';
            }
        }
        ?>
        
        <form name="update"action="edit.php" method="post">
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Id</label>
                <div class="col-sm-10">
                    <input type="text" name="id" class="form-control" size="4" value="<?php echo $data['id']; ?>" readonly required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" name="nama" class="form-control" size="4" value="<?php echo $data['nama']; ?>"required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Username</label>
                <div class="col-sm-10">
                    <input type="text" name="username" class="form-control" value="<?php echo $data['username']; ?>" required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="text" name="Password" class="form-control" value="<?php echo $data['Password']; ?>" required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Level</label>
                <div class="col-sm-10">
                    <select name="level" class="form-control" required>
                        <option value="">PILIH level</option>
                        <option value="admin" <?php if($data['level'] == 'admin'){ echo 'selected'; } ?>>Admin</option>
                        <option value="guru" <?php if($data['level'] == 'guru'){ echo 'selected'; } ?>>Guru</option>
                        <option value="siswa" <?php if($data['level'] == 'siswa'){ echo 'selected'; } ?>>Siswa</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">&nbsp;</label>
                <div class="col-sm-10">
                    <input type="submit" name="submit" class="btn btn-primary" value="SIMPAN">
                    <a href="data.php" class="btn btn-warning">KEMBALI</a>
                </div>
            </div>
        </form>
        
    </div>

    <!-- Right Panel -->
