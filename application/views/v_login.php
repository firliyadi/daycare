<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Login</title>

    <link href="<?php echo base_url()?>assets/inspinia/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/inspinia/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="<?php echo base_url()?>assets/inspinia/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/inspinia/css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">DC</h1>

            </div>
            <h3>Welcome to ALADIN9 DAYCARE</h3>
            <p>Merupakan web info dan servis daycare di indonesia.
                <!--Continually expanded and constantly improved Inspinia Admin Them (IN+)-->
            </p>
            <p>Silahkan Login.</p>
            <form class="m-t" role="form" action="index.html">
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Username" required="">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" required="">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

                <a href="#"><small>Forgot password?</small></a>
                <p class="text-muted text-center"><small>Do not have an account?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="register.html">Create an account</a>
            </form>
            <p class="m-t"> <small>Created by ALADIN9 DAYCARE &copy; <?php echo date("Y") ?></small> </p>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="<?php echo base_url()?>assets/inspinia/js/jquery-3.1.1.min.js"></script>
    <script src="<?php echo base_url()?>assets/inspinia/js/bootstrap.min.js"></script>

</body>

</html>
