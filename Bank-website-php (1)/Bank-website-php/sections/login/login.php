
<?php
require "../_DBConnect.php";
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * from login where username = '$username';";
    $result = mysqli_query($conn,$sql);

    $num = mysqli_num_rows($result);
    if($num == 1 ){
        while($row = mysqli_fetch_assoc($result)) {
            if ($password == $row['password']) {
                $login = true;
                $acc = $row['acc_no'];

                session_start();

                $_SESSION['loggedIn'] = true;
                $_SESSION['username'] = $username;
                $_SESSION['acc_no'] = $row['acc_no'];
                header("location: dashboard.php");


            }
        }
    }else {
        $showError = "Invalid Credentials";
    }


}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.82.0">
    <title>Log in</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">

    <!-- Bootstrap core CSS -->
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
</head>
<body class="text-center">
<?php
if($login) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success!</strong> Your are now logged in.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
if($showError != false) {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error! </strong>Invalid credentials.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
?>

<main class="form-signin">
    <form action  = "login.php" method="post">

        <h1 class="h3 mb-3 fw-normal">Log in to continue</h1>

        <div class="form-floating">
            <input type="text" class="form-control" id="floatingInput" name = "username" placeholder="name@example.com">
            <label for="username" id = "username" name = "username">username</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" name = "password" placeholder="Password">
            <label for="password"  >password</label>
        </div>


        <button class="w-100 btn btn-lg btn-primary" type="submit">Log in</button>
        <p class="mt-5 mb-3 text-muted"><a href="adminLogin.php" class = "my-3 fw-bold line-dark" >Administrator login</a></p>

        <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
    </form>


</main>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body>
</html>

