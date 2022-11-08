<?php



use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;





   session_start();
   require('../includes/config.php');
      if (!empty($_POST))
	  {
			$email=$_POST['email'];
			$currentdate = date('Y-m-d H:i:A');
		
			$q="select * from users where email='$email' AND user_role ='section_manager' and status='Active' ";
			$res=mysqli_query($conn,$q)or die("wrong query");
			$row=mysqli_fetch_assoc($res);
			if(!empty($row))
			{
				if($_POST['password']!=$row['password'])
				{
					header("Location:section_login.php?pd=1");
					
					
				}
               
			
				else
				{
					$_SESSION=array();
					$_SESSION['email']=$row['email'];
                    $_SESSION['id']=$row['id'];
					$email=$row['email'];
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

  
    $mail->setFrom('assesttracking@gmail.com', 'Assest Tracking System');

    $mail->addAddress($email);             


    $mail->isHTML(true);                                 
    $mail->Subject = 'New Login Detected | Section Manager';
    $mail->Body    = " New Login has been detected on <b> $currentdate </b>
				
                                ";
    $mail->AltBody = 'you will recieve ';

    $mail->send();
    
    } 




					header("Location:section_dashboard.php");
				}
			}	
			
	 
	       else 
	       {
	      header("Location:section_login.php?usr=1");
	      }
	  }	  
?>	  