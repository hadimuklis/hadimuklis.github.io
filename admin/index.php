<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .alert{
    background: #e44e4e;
    color: white;
    padding: 10px;
    text-align: center;
    border:1px solid #b32929;
}
    </style>
    <title>Login | SuperM Daring</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="http://localhost/multi_user/image/favicon.ico"/>
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
<!--===============================================================================================-->
</head>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100 p-l-50 p-r-50 p-t-77 p-b-30">
                <form class="login100-form validate-form" action="proses_login.php" method="post">
<body>
    <?php 
    if(isset($_GET['pesan'])){
        if($_GET['pesan']=="gagal"){
            echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
        }
    }
    ?>
                    <span class="login100-form-title p-b-49">
                        <img src ="http://localhost/multi_user/image/SuperM1.jpg" height='70px'>
                        <h3>Aplikasi Daring<h3>
                    <p>Silahkan login dengan username dan password yang telah anda miliki.</p>
                    </span>
                    <br/>
                    <div class="wrap-input100 validate-input m-b-16" data-validate = "Username is required">
                        <input class="input100" type="text" name="username" placeholder="Username">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <span class="lnr lnr-user"></span>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
                        <input class="input100" type="password" name="password" placeholder="Password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <span class="lnr lnr-lock"></span>
                        </span>
                    </div>
                    <input type="hidden" value="" name="latitude" size="10" id="latitude" readonly>
                        <input type="hidden" value="" name="longitude" size="10" id="longitude" readonly>
                        <div class="wrap-input100 validate-input" data-validate="Password is required">
                                <center><img class="img img-responsive" src="captcha.php" alt="gambar" style="width: 80%;"/></center>
                                <input name="nilaiCaptcha" class="input100" placeholder="Masukan Kode Pengaman" required>

                        </div>
                    <div class="container-login100-form-btn p-t-25">
                        <button class="login100-form-btn" type="submit">
                            Login
                        </button>
                    </div>
                </form>
                <div class="txt1 text-center p-t-54 p-b-20">
                        <span>
                            v1.01 Diklis 2020
                            <p>WeAreTheFuture<p>
                        </span>
                    </div>
                </div>
            </div>
        </div>
            </div>
        </div>

    </div>
    
    

    
<!--===============================================================================================-->  
    <script src="https://localhost/multi_user/assets_login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="http://localhost/multi_user/assets_login/vendor/bootstrap/js/popper.js"></script>
    <script src="http://localhost/multi_user/assets_login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="http://localhost/multi_user/assets_login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
    <script src="http://localhost/multi_user/assets_login/js/main.js"></script>

</body>
</html>