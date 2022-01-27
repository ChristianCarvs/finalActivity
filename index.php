<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="description" content="Final Activity - ITS100 WEB DEV">
	<meta name="author" content="Christian Franc Carvajal">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" href="style.css">
	
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	
	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
	
<title>Login</title>
</head>

<body>
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-sm-center h-100">
				<div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
					<div class="text-center my-5">
						<img class="image001" src="aa.gif" alt="logo" width="200">
					</div>
					<div class="card shadow-lg">
						<div class="card-body p-5">
							<h1 class="fs-4 card-title fw-bold mb-4 center_h1">LOGIN</h1>
							
							<?php
                                if(isset($_POST['submit'])) {
	                                $user = $_POST['username'];
                                	$pass = $_POST['password'];
                                	if($user == "admin" && $pass == "123") {
		                                //header("Location: home.php");
		                                echo "<script> location.href='home.php'; </script>";
                                        exit;
                                	}
	                                else
	                                {
	                                    echo("Incorrect Username and Password!");
	                                }
                                }
                            ?>
							<form method="POST" action="">
								<div class="txtb">
									<input type="text" class="form-control" name="username" required autofocus>
									<span data-placeholder="Username"></span>
									<div class="invalid-feedback">Username is required</div>
								</div>
								
								<div class="txtb">
									<input type="password" class="form-control" name="password" required>
									<span data-placeholder="Password"></span>
								    <div class="invalid-feedback">Password is required</div>
								</div>
								
								<input id="submit" type="submit" name="submit" value="Login" class="btn btn-primary ms-auto logbtn">
							</form>
						</div>
						<div class="card-footer py-3 border-0">
							
							<div class="text-center">Default Login: <a class="text-dark">admin:123</a>
							</div>
						</div>
					</div>
					
					<div class="text-center mt-5 text-muted">
						Copyright &copy; 2022
					</div>
				</div>
			</div>
		</div>
	</section>

	<script type="text/javascript">
		$(".txtb input").on("focus", function(){
			$(this).addClass("focus");
		});
		
		$(".txtb input").on("blur", function(){
			if($(this).val == "")
				$(this).removeClass("focus");
		});
	</script>
</body>
</html>