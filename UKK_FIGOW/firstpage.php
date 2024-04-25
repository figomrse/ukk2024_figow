</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Landing</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <style>
        .header {
            position: fixed;
            top: 0;
            left: 0;
            width: 20px 100px;
            background-color: #106EFD;
        }
    </style>
</head>

<body>
<nav class="navbar navbar-expand-lg bg-primary">
        <div class="container">
            <a class="navbar-brand fs-4 text-white" href="index.php">Website gallery foto</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas-body" id="navbarNavAltMarkup">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item mx-2">
                            <a class="text-white nav-link active">‎</a>
                        </li>
                        <div class="d-flex justify-content-center align-items-center gap-3">
                        <li class="nav-item mx-2">
                            <a class="text-white text-decoration-none px-3 py-1 rounded-4" style="background-color:#C5FF95" href="login.php">Login</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="text-white text-decoration-none px-3 py-1 rounded-4" style="background-color:#C5FF95" href="register.php">Register</a>
                        </li>
                        </div>
                </ul>

            </div>
        </div>
    </nav>


    <footer class="d-flex justify-content-center border-top mt-3 bg-light fixed-bottom">
        <p>Figo</p>
    </footer>

    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>