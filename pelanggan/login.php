<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Givenchy Sign In</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" 
	integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="../img/Givenchypol.png" />
    <style>
    body {
		margin-top: 20px;
		background: #f6f9fc;
	}
	.account-block {
		padding: 0;
		background-image: url('../img/givenchylog.jpg');
		background-repeat: no-repeat;
		background-size: cover;
		height: 100%;
		position: relative;
	}
	.account-block .overlay {
		-webkit-box-flex: 1;
		-ms-flex: 1;
		flex: 1;
		position: absolute;
		top: 0;
		bottom: 0;
		left: 0;
		right: 0;
		background-color: rgba(0, 0, 0, 0.4);
	}
	.account-block .account-testimonial {
		text-align: center;
		color: #fff;
		position: absolute;
		margin: 0 auto;
		padding: 0 1.75rem;
		bottom: 3rem;
		left: 0;
		right: 0;
	}
	.text-theme {
		color: #F675A8 !important;
	}
	.btn-theme {
		background-color: #F675A8;
		border-color: #F675A8;
		color: #fff;
	}
	a{
		color:#F675A8;
	}
	a:hover{
		color:#F675A8;
	}
    </style>
</head>
<body>
<div id="main-wrapper" class="container">
    <div class="row justify-content-center">
        <div class="col-xl-10">
            <div class="card border-0">
                <div class="card-body p-0"> <!-- pinggiran box shg foto menempel -->
                    <div class="row no-gutters">
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="mb-5 mt-5">
                                    <h2 class="h2 font-weight-bold text-theme">Customer Login</h2>
                                </div>
                                <h6 class="h5 mb-0">Welcome to Givenchy Beauty Official Store</h6>
                                <p class="text-muted mt-2 mb-5">Please Enter Your Username and Email to Access Your Account.</p>
                                <form action="proses_login.php" method="post">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Username</label>
                                        <input type="username" name="username" class="form-control" id="exampleInputEmail1" />
                                    </div>
                                    <div class="form-group mb-5 mt-0">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" />
                                    </div>
                                    <button type="submit" class="btn btn-theme mb-5">Sign In</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6 d-none d-lg-inline-block">
                            <div class="account-block rounded-right">
                                <div class="overlay rounded-right"></div>
                                <div class="account-testimonial">
                                    <h4 class="text-white mb-2">Be the first to know about new collections and everything Givenchy.</h4>
                                    <!-- <p class="lead text-white">"Best investment i made for a long time. Can only recommend it for other users."</p> -->
                                    <p>Paris</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end card-body -->
            </div>
            <!-- end card -->
            <p class="text-muted text-center mt-3 mb-0">Don't have an account? <a href="register.php">Sign Up</a></p>
            <!-- end row -->
        </div>
        <!-- end col -->
    </div>
    <!-- Row -->
</div>
	</body>
</html>