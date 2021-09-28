<?php require_once(dirname(__FILE__) . '/config.php'); 
if ( isset($_SESSION['Admin_ID']) && $_SESSION['Login_Type'] == 'admin' ) {
    header('location:' . BASE_URL . 'attendance/');
}
if ( isset($_SESSION['Admin_ID']) && $_SESSION['Login_Type'] == 'emp' ) {
    header('location:' . BASE_URL . 'profile/');
} ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <title>Login - Payroll</title>

    <link rel="stylesheet" href="<?php echo BASE_URL; ?>bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>dist/css/AdminLTE.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>dist/css/skins/_all-skins.min.css">

	 <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<style>
	.login-section-logo{
               /* padding-top: 20px !important;
                padding-bottom: 20px !important;*/
                display:block;
				border:3px solid #c4c4c4;
				box-shadow: 5px 5px yellow , 10px 10px red, 15px 15px green, 20px 20px blue;
           
            }
	</style>
</head>

<body class="hold-transition login-page" style="background-color:black;">
    <div class="login-box" style="width:450px; top:250px; border-radius:10px;">
        
        <div class="login-box-body" style="background-color:#c4c4c4; font-family:'Russo One'">
		<div class="login-logo">
			<center><img src="logo.jpg" width="95px" class="login-section-logo"></center><br>
            <a href="<?php echo BASE_URL; ?>" style="color:black; text-shadow:3px 3px yellow;">HRM System</a>
            
        </div>
            <!--<p class="login-box-msg">Please login to start your session</p>-->
            <form method="POST" role="form" data-toggle="validator" id="login-form">
                <div class="form-group has-feedback" style="border:2px solid black;">
                    <input type="text" class="form-control" id="code" name="code" placeholder="Employee Code" required />
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback" style="border:2px solid black;">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required />
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <button type="submit" class="btn btn-success btn-block " style="border:2px solid black; background-color:#5cb85c">Login</button>
				<button type="reset" class="btn btn-light btn-block " style="border:2px solid black;">Clear</button>
            </form>
			<br>
				<a href="registration/new/" class="btn btn-primary btn-block" style="background-color:#0275d8">Click here for New Registration</a>
        </div>
    </div>

    <script src="<?php echo BASE_URL; ?>plugins/jQuery/jquery-2.2.3.min.js"></script>
    <script src="<?php echo BASE_URL; ?>bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo BASE_URL; ?>plugins/bootstrap-notify/bootstrap-notify.min.js"></script>
    <script src="<?php echo BASE_URL; ?>plugins/jquery-validator/validator.min.js"></script>
    <script src="<?php echo BASE_URL; ?>plugins/bootstrap-notify/bootstrap-notify.min.js"></script>
    <script src="<?php echo BASE_URL; ?>dist/js/app.min.js"></script>
    <script type="text/javascript">var baseurl = '<?php echo BASE_URL; ?>';</script>
    <script src="<?php echo BASE_URL; ?>dist/js/script.js?rand=<?php echo rand(); ?>"></script>
</body>
</html>