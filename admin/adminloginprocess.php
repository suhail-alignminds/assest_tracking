<?php
   session_start();
   require('../includes/config.php');
      if (!empty($_POST))
	  {
			$uname=$_POST['username'];
			$q="select * from admin where username='$uname'";
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
					$_SESSION['username']=$row['username'];
					header("Location:admin_index.php");
				}
			}	
			
	 
	       else 
	       {
	      header("Location:adminlogin.php?usr=1");
	      }
	  }	  
?>	  