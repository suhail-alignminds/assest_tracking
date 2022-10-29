<?php

include '../includes/config.php';
$vendor_id= $_REQUEST['vendor_id'];
$sql ="SELECT * FROM vendor where vendor_id='$vendor_id'";
$qsql = mysqli_query($conn,$sql);
while($rs = mysqli_fetch_array($qsql))

{

    ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>
    <link href="../assets/img/logo.png "rel="icon"> 


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="../css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
       
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
       <link href=' https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css'/>
       <link hred='https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css' />
   
   

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">


    <style>

    .dot-red {
  height: 7px;
  width: 7px;
  background-color: red;
  border-radius: 50%;
  display: inline-block;
        
}

.dot-green {
  height: 7px;
  width: 7px;
  background-color: green;
  border-radius: 50%;
  display: inline-block;

}
</style>
</head>




<?php include('section_header.php'); ?>
<div class="container-fluid">

<!-- Page Heading -->


<div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Vendor Update
        </div>

          
                     <form  class="row g-4 my-4 " method='POST' enctype="multipart/form-data" >
                       
  <div class="col-md-8 mt-4 ml-4">
    <label for="inputBookNameY" class="form-label">Vendor Name</label>
    <input type="text" class="form-control" id="inputBookNameY" name="vendor_name" value="<?php echo $rs['vendor_name']?>"placeholder="Enter Student Name">
  </div>
  



<div class="col-md-4 mt-4 ml-4">
    <label for="inputAddress" class="form-label">Mobile </label>
    <input type="text" class="form-control" id="inputAddress" value="<?php echo $rs['mobile']?>" name="mobile" placeholder="Mobile Number">
  </div>
  <div class="col-md-4">
    <label for="inputAddress2" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputAddress2"  value="<?php echo $rs['email']?> " name="email" placeholder="Email">
    <br>
    <input type="submit" class="btn btn-success mt-5" name="submit" >
    <br>
  </div>


 
 



  


<?php
if(isset($_POST["submit"]))
{
	
  
    include '../includes/config.php';
    {
		
        $vendor_name = $_POST['vendor_name'];
        $currentdate = date('Y-m-d');
    	$mobile = $_POST['mobile'];
    	$email = $_POST['email'];
  
		
		$sql = "UPDATE vendor set vendor_name='$vendor_name',mobile='$mobile',email='$email',modified_date='$currentdate' where vendor_id='$vendor_id'";
		if(mysqli_query($conn,$sql))
        {
			echo "<script type = \"text/javascript\">
										alert(\"Update Succesfully \");
                                        window.location = (\"vendor.php\")
									
										
										</script>";
		 
		}  
	else
	{
		echo mysqli_error($conn);
	}
}
mysqli_close($conn);
}
?>
</div>
</div>
</form>
                </main>
                
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="../assets/demo/chart-area-demo.js"></script>
        <script src="../assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="../js/datatables-simple-demo.js"></script>
    </body>
</html>

<?php

}
?>