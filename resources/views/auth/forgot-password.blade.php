<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="shortcut icon" href="img/favicon.png">
    <title>Forgot Password - Dragon City Bahrain</title>


    <link rel="stylesheet" href="fonts/open-sans/style.min.css"> <!-- common font  styles  -->
    <link rel="stylesheet" href="fonts/universe-admin/style.css"> <!-- universeadmin icon font styles -->
    <link rel="stylesheet" href="fonts/mdi/css/materialdesignicons.min.css"> <!-- meterialdesignicons -->
    <link rel="stylesheet" href="fonts/iconfont/style.css"> <!-- DEPRECATED iconmonstr -->
    <link rel="stylesheet" href="vendor/flatpickr/flatpickr.min.css">
    <!-- original flatpickr plugin (datepicker) styles -->
    <link rel="stylesheet" href="vendor/simplebar/simplebar.css"> <!-- original simplebar plugin (scrollbar) styles  -->
    <link rel="stylesheet" href="vendor/tagify/tagify.css"> <!-- styles for tags -->
    <link rel="stylesheet" href="vendor/tippyjs/tippy.css"> <!-- original tippy plugin (tooltip) styles -->
    <link rel="stylesheet" href="vendor/select2/css/select2.min.css"> <!-- original select2 plugin styles -->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css"> <!-- original bootstrap styles -->
    <link rel="stylesheet" href="css/style.min.css" id="stylesheet"> <!-- universeadmin styles -->



    <script src="js/ie.assign.fix.min.js"></script>
</head>

<body class="p-front">


    <div class="navbar navbar-light navbar-expand-lg p-front__navbar">
        <!-- is-dark -->
        <a class="navbar-brand" href="/" style="margin-left:5px;"><img src="img/full-logo-dark.png" alt="" /></a>
        <a class="navbar-brand-sm" href="/"><img src="img/logo-sm.png" alt="" /></a>


    </div>




    <div class="p-front__content">


        <div class="p-signin-a">
            @if (session('error_message'))
            <div class="alert alert-danger">
                {{ session('error_message') }}
            </div>
            @endif
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif
            <form action="/forgot-password" method="POST" class="p-signin-a__form">
                <h4 class="p-signin-a__form-heading">Reset Password</h4>
                <p class="p-signin-a__form-description">
                    Enter your email address here.
                </p>
                @if(isset($error))
                <div class="login-error-msg">
                    {{$error}}
                </div>
                @endif
                {{ csrf_field() }}
                <div class="form-group">
                    <input type="email" name="email" class="form-control form-control-lg" placeholder="Enter your email here">
                </div>
                <div class="form-group">
                    <button class="btn btn-info btn-lg btn-block btn-rounded" type="submit">Send Reset Password
                        Link</button>
                </div>
            </form>

            <div class="p-signin-a__form-link">Already have an account? <a href="/login">Login</a></div>
        </div>

    </div>



    <!-- <footer class="p-front__footer">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link active" href="#">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">FAQ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Terms of Service</a>
            </li>
        </ul>
        <span>2019 &copy; Dragon City Bahrain</span>
    </footer> -->



    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/select2/js/select2.full.min.js"></script>
    <script src="vendor/simplebar/simplebar.js"></script>
    <script src="vendor/text-avatar/jquery.textavatar.js"></script>
    <script src="vendor/tippyjs/tippy.all.min.js"></script>
    <script src="vendor/flatpickr/flatpickr.min.js"></script>
    <script src="vendor/wnumb/wNumb.js"></script>
    <script src="js/main.js"></script>



    <div class="sidebar-mobile-overlay"></div>

</body>

</html>

<style>
    .login-error-msg {
        color: red !important;
    }

</style>
