<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

	<title>Login</title>
</head>
<body>
	<div class="container">

		<div class="row">
			<div class="col-md-4 offset-md-4">

				<div class="card mt-5">
					<div class="card-title text-center">
						<h1>Login Kasir</h1>
					</div>
					<div class="card-body">
						<form action="process.php" method="post">
							<div class="form-group">
								<label for="username">Username</label>
								<input type="text" name="username" class="form-control" id="username" aria-describedby="username" placeholder="username">

							</div>
							<div class="form-group">
								<label for="password">Password</label>
								<input type="password" name="password" class="form-control" id="password" placeholder="Password">
							</div>

							<button type="submit" class="btn btn-primary">Submit</button>
						</form>

					</div>
				</div>
			</div>

		</div>

	</div>
</body>
<?php

    include "koneksi.php";
    if (isset($_POST["submit"])) {
        session_start ();
        $_SESSION["username"]=$_POST["username"];
        $_SESSION["password"]=$_POST["password"];

        $username=$_SESSION["username"];
        $password=$_SESSION["password"];
        $login=mysqli_query ($koneksi,"SELECT*FROM admin where 
        username='$username' AND password='$password'");
        $cek=mysqli_num_rows($login);
        
        if ($cek==1) {
            header('location:dashboard.php');
        }else {
            echo "<div class='alert alert-danger'> Anda bukan admin! </div>";
        }
    }
    ?>