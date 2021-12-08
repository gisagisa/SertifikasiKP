<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN AS ADMIN</title>
    <link rel="stylesheet" href="/css/style-sidebar.css" >
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel&display=swap" rel="stylesheet">

</head>

<body>
    <?php

    //Cek status yang dikirimkan file action
    // if (isset($_GET['status'])) {
    //     if ($_GET['status'] == "failed") {
    //         echo '<script>
    // alert("Login gagal, silahkan login dengan email dan password yang benar");
    // </script>';
    //     }
    // }
    ?>
    <div class="login-dark">
        @yield('logregContent')
    </div>
    <script type="text/javascript" src="../assets/js/login_reg_script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>