<?php
   session_start();
   require('../includes/config.php');
      if (!empty($_POST))
	  {
			$email=$_POST['email'];
			$q="select * from users where email='$email' AND user_role='admin' ";
			$res=mysqli_query($conn,$q)or die("wrong query");
			$row=mysqli_fetch_assoc($res);
			if(!empty($row))
			{
				if($_POST['password']!=$row['password'])
				{
					header("Location:adminlogin.php?pd=1");
					
					
				}
			
				else
				{
					$_SESSION=array();
					$_SESSION['email']=$row['email'];
					header("Location:dashboard.php");
				}
			}	
			
	 
	       else 
	       {
	      header("Location:adminlogin.php?usr=1");
	      }
	  }	  
?>	  