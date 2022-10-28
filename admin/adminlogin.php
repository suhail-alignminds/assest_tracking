
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="../css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
<body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="../index.html">Asset Tracking </a>
            <!-- Sidebar Toggle-->
          
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
              
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Login as Session Manager</a></li>
                       
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Home</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
<form action="adminloginprocess.php" method='POST' enctype="multipart/form-data" >
  <div class="main">
    <p class="header1">Asset Tracking. </p>
  <h4 class="header2">ADMIN LOGIN</h4>
  <h3 class="header3">Sign in to start your session</h3>
    <form class="form1">
      <input class="un" type="text" name="username"   placeholder="Username">
      <input class="pass" type="password" name="password"  placeholder="Password">
       <input class="submit" type="submit" name="login" value="Login"><br><br>
      <div>
      <?php
	session_start();
if(isset($_GET['usr']))
	{

        echo '<center><font color="red" size="4">Incorrect User Name...</font></center>';
			echo '<br><br>';
	}
	if(isset($_GET['pd']))
	{

        echo '<center><font color="red" size="4">Incorrect password...</font></center>';
			echo '<br><br>';
	}
 
?>  
</div>
</form>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="../assets/demo/chart-area-demo.js"></script>
        <script src="../assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="../js/datatables-simple-demo.js"></script>
</html>
 






