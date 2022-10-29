<?php



use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

?>
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Section Manager</title>
    <link href="../assets/img/logo.png "rel="icon"> 
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="../css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../css/login.css">

    <style>
.forget{
  padding-left:20px;
  text-decoration:none;
  color:#04ac9e;

}
</style>
</head>

</head>
<body>
<body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="../index.html">Asset Tracking</a>
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

<form  method='POST' enctype="multipart/form-data" >
  <div class="main">
    <p class="header1">Asset Tracking </p>
  <h4 class="header2">Section Manager SIGNUP</h4>
  <h3 class="header3">Sign Up</h3>
    <form class="form1">
      <input class="un" type="text" name="email"   placeholder="Email">
      <input class="pass" type="password" name="password"  placeholder="Password">
       <input class="submit" type="submit" name="submit" value="submit"><br>
       <a class="forget" href="section_login.php">Already Register?</a>
      <div>
      <div>
       
   
                        <?php
if(isset($_POST["submit"]))
{
	
  
    include '../includes/config.php';
    {
		

    
		$password = $_POST['password'];
    	$email = $_POST['email'];
        $currentdate = date('Y-m-d');
        
        
        $sql = "SELECT * FROM users WHERE email='$email'";
        $res = mysqli_query($conn, $sql);

      
        if(mysqli_num_rows($res) > 0){
        // //   $email_error = "Email $email is alredy taken"; 
        //   echo "<br";
     
        //   echo  "<p  class='emailcss'>" .$email_error;
       echo ' <div class="alert alert-danger" role="alert">
         Email is already Taken
        </div>';
        }
       
        else{


		
		$sql="insert into users(email,password,created_date,user_role)VALUES('$email','$password','$currentdate','section_manager')";
		if(mysqli_query($conn,$sql))
        {

require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';


$mail = new PHPMailer(true);


 {
 
    $mail->SMTPDebug =1;                 
    $mail->isSMTP();                                           
    $mail->Host       = 'smtp.gmail.com';                     
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'suhail09442@gmail.com';                  
    $mail->Password   = 'pmujmnytmfulxcwt';                             
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
    $mail->Port       = 465;                                    

  
    $mail->setFrom('assettracking@gmail.com', 'Asset Tracking System');

    $mail->addAddress($email);             


    $mail->isHTML(true);                                 
    $mail->Subject = 'Registration Successfull';
    $mail->Body    = "Thank You  for Register as Section Manager/b>
                            
                                 <br></b><br>   
                                 You will get the confirmation mail once you are approved
                                ";
    $mail->AltBody = 'you will recieve ';

    $mail->send();
    
    } 

            
			echo "<script type = \"text/javascript\">
										alert(\"Succesfully Registered\");
                                        window.location = (\"section_login.php\")
                                        
										
										</script>";


                                        

                                        
		 
		}   
	else
	{
		echo mysqli_error($conn);
	}
}
mysqli_close($conn);
} }
?>
</div>
                       

                    </form>
                </div>
            </div>
        </div>
    </div>
   
    <!-- Jquery JS-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="../vendor/select2/select2.min.js"></script>
    <script src="../vendor/datepicker/moment.min.js"></script>
    <script src="../vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="../js/global.js"></script>

</body>

</html>
<!-- end document-->
 



