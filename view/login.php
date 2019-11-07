<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $title;?></title>

    <!-- Custom fonts for this template-->

    <link href="<?=url("./vendor/fontawesome-free/css/all.min.css") ;?>" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="<?=url("./css/sb-admin.css") ;?>.." rel="stylesheet">

</head>

<body class="bg-dark">

<div class="container">
    <div class="card card-login mx-auto mt-5">
        <div class="card-header">Login - SISRES</div>
        <div class="card-body">
            <form action="<?=url("autenticacao");?>" method="POST">
                <div class="form-group">
                    <div class="form-label-group">
                        <input name="email" type="email" id="inputEmail" class="form-control" placeholder="E-mail" required="required" autofocus="autofocus">
                        <label for="inputEmail">E-mail</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label-group">
                        <input name="senha" type="password" id="inputPassword" class="form-control" placeholder="Senha" required="required">
                        <label for="inputPassword">Senha</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="remember-me">
                            Remember Password
                        </label>
                    </div>
                </div>
                <button  style="margin-left: 40%" class="btn btn-primary" type="submit">Login</button>

            </form>
            <!--<div class="text-center">
                <a class="d-block small mt-3" href="register.html">Register an Account</a>
                <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
            </div>-->
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="./vendor/jquery/jquery.min.js"></script>
<script src="./vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="./vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>
