<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <!-- Favicons -->
    <link rel="icon" href="assets/assets/img/favicon.png">

    <title>Login - PT. Dobha Putra Salim</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/extends-bootstrap.css?1594309346">
    <!-- Fonts CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <!-- BEGIN: Icons CSS-->
    <link rel="stylesheet" href="assets/assets/feathericons/feathericons.min.css">
    <link rel="stylesheet" href="assets/assets/boxicons/css/boxicons.min.css">
    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" href="assets/assets/css/login.css?1594309346">
</head>

<body>

    <div class="login-container">
        <div class="login-wrapper bg-white">
            <div class="text-center">
                <img src="assets/assets/img/favicon.png" width="250" alt="" />
            </div>
            <div class="mt-5">
                <h4 class="mb-0 orange-1">Login</h4>
                <p class="mt-0"><small>Welcome back, please login into your account</small></p>
            </div>
            <div class="form-login-wrapper">
                <form class="form-login" action="" name="" method="post">
                    <div class="form-group mb-2">
                        <label class="text-small mb-1">Username</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white border-none"><i class="icon-user"></i></span>
                            </div>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <label class="text-small mb-1">Password</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white border-none"><i class="icon-lock"></i></span>
                            </div>
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="current-password">
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="remember">
                            <label class="form-check-label text-small" for="remember">Remember me</label>
                        </div>
                        <div class="">
                            <a href="#" class="orange-1 text-small">Forgot Password?</a>
                        </div>
                    </div>
                    <div class="form-group">
                        <!-- <button href="dashboard.html" class="btn btn-block btn-shadhow btn-warning text-white relative btn-login">Login <i class='bx bx-right-arrow-alt'></i></button> -->
                        <button href="{{ __('Login') }}" type="submit"
                            class="btn btn-block btn-shadhow btn-warning text-white relative btn-login">Login <i
                                class='bx bx-right-arrow-alt'></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>
