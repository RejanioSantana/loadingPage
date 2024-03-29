<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>AW</title>

    <link href="assets/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/admin/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="assets/admin/css/animate.css" rel="stylesheet">
    <link href="assets/admin/css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>
                <h1 class="logo-name">AW</h1>
            </div>
            <h3>Painel administrativo</h3>
            <p>Faça o login.</p>
            <form class="m-t" role="form" action="/admin" method="post">
                <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="Username" required="">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password" required="">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>
            </form>
        </div>
    </div>

    <script src="assets/admin/js/jquery-2.1.1.js"></script>
    <script src="assets/admin/js/bootstrap.min.js"></script>

</body>
</html>
