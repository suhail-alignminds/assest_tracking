
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
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Add New Asset</h1>
                    
                   
                    <div class="card mb-4">
                            <div class="card-body">
                                <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary"  data-toggle="modal" data-target="#exampleModalCenter">
                    <i class="fa-solid fa-add"></i> Add  Asset
                    </button>
                    <a href="qrcode.php"  class="btn btn-success"><i class="fa fa-barcode" aria-hidden="true"></i> Generate QR Code </a>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Add Asset</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                        <form  class="row g-3" method='POST' enctype="multipart/form-data" >
                                        
                        <div class="col-md-6">
                        <label for="inputBookNameY" class="form-label">Asset Name</label>
                         <input type="text" class="form-control" id="inputBookNameY" name="asset_name" placeholder="Enter Asset Name">
                       </div>
                       <div class="col-md-6">
                         <label for="inputPassword4Y" class="form-label">Description</label>
                         <input type="text" class="form-control" id="inputPassword4Y" name="description" placeholder="Ente Description Number">
                         
                       </div>
                       <div class="col-6">
                       <label class="form-label ml-1" for="inlineFormSelectPrefe">Choose Section</label>
                            <select class="form-select ml-1" id="inlineFormSelectPrefe" name="section_id">
                                <option selected >Choose Section </option>
                                <?php
                                   include '../includes/config.php';
                                $sql= "SELECT * FROM sections";
                                $qsql = mysqli_query($conn,$sql);
                                    while($rs=mysqli_fetch_array($qsql))
                                    {
                                        echo "<option value='$rs[section_id]' selected>$rs[section_id] -$rs[section_name] </option>";
                                        
                                    }?>
                                    
                            </select>
                            </div>
                            <div class="col-6">
                       <label class="form-label ml-1" for="inlineFormSelectPrefe">Choose Category</label>
                            <select class="form-select ml-1" id="inlineFormSelectPrefe" name="category_id">
                                <option selected >Choose Section </option>
                                <?php
                                   include '../includes/config.php';
                                $sql= "SELECT * FROM category";
                                $qsql = mysqli_query($conn,$sql);
                                    while($rs=mysqli_fetch_array($qsql))
                                    {
                                        echo "<option value='$rs[category_id]' selected>$rs[category_id] -$rs[category_name] </option>";
                                        
                                    }?>
                                    
                            </select>
                            </div>

                            <div class="col-12">
                       <label class="form-label ml-1" for="inlineFormSelectPrefe">Choose Vendor</label>
                            <select class="form-select ml-1" id="inlineFormSelectPrefe" name="vendor_id">
                                <option selected >Choose Section </option>
                                <?php
                                   include '../includes/config.php';
                                $sql= "SELECT * FROM vendor ";
                                $qsql = mysqli_query($conn,$sql);
                                    while($rs=mysqli_fetch_array($qsql))
                                    {
                                        echo "<option value='$rs[vendor_id]' selected>$rs[vendor_id] -$rs[vendor_name] </option>";
                                        
                                    }?>
                                    
                            </select>
                            </div>
                            <div class="col-md-6">
                         <label for="inputPassword4Y" class="form-label">Created By</label>
                         <input type="text" class="form-control" id="inputPassword4Y" name="created_by" placeholder="Created By">
                         
                       

                       </div>
                            <div class="col-md-6">
                         <label for="inputPassword4Y" class="form-label">Asset Ref Num</label>
                         <input type="text" class="form-control" id="inputPassword4Y" name="asset_ref_num" placeholder="Asset Ref Num">
                         
                       </div>
                            
                      <div>
                      <input type="submit" class="btn btn-success mr-5" name="submit" ></div>
                     
                       
                        
                      <?php
                     if(isset($_POST["submit"]))
                     {
                       
                       
                         include '../includes/config.php';
                         {
                         
                             $asset_name = $_POST['asset_name'];
                             $description = $_POST['description'];
                             $section_id =$_POST['section_id'];
                             $category_id =$_POST['category_id'];
                             $vendor_id =$_POST['vendor_id'];
                             $created_by =$_POST['created_by'];
                             $asset_ref_num =$_POST['asset_ref_num'];

                             $currentdate = date('Y-m-d');
                         
                            $sql="insert into assets(asset_name,description,created_date,section_id,category_id,vendor_id,created_by,asset_ref_num,status) VALUES ('$asset_name','$description',' $currentdate','$section_id','$category_id','$vendor_id','$created_by','$asset_ref_num','Active')";
                            if(mysqli_query($conn,$sql))
                            {
                           echo "<script type = \"text/javascript\">
                                         alert(\"Succesfully Added\");
                                         window.location = (\"add_asset.php\")
                                         
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
                    
                    </div>
                    </div>
                    </div>
                    </div>
                    

                    <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                 Details
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                               
                                    <thead>
                                        <tr>
                                            <th> ID</th>
                                            <th>Asset  Name</th>
                                            <th>Description</th>
                                            <th>Created Date</th>
                                            <th>Modified Date</th>
                                            <th>Created By</th>
                                            <th>Ref Num</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                           
                                          
                                           
                                        </tr>
                                    </thead>
                                   
                                    
                                    <tbody>
                <?php 
                                          include '../includes/config.php';
                                  
                                          $sql ="SELECT * FROM assets  ";
                                          
                                           
                                          $qsql = mysqli_query($conn,$sql);
                                          while($rs = mysqli_fetch_array($qsql))
                                          
                                     {
                                        
                                          echo "<tr>
                      
                                          <td>&nbsp;$rs[asset_id]</td>	 
                                          <td>&nbsp;$rs[asset_name]</td>
                                          <td>&nbsp;$rs[description]</td>
                                          <td>&nbsp;$rs[created_date]</td> 
                                          <td>&nbsp;$rs[modify_date]</td> 
                                          <td>&nbsp;$rs[created_by]</td> 	
                                          <td>&nbsp;$rs[asset_ref_num]</td> 		 
                                        
                                    		 ";
                                          ?>
                                          <?php
                                       
                                          if($rs['status'] == 'Active')
                                          {
                                            echo "
                                            <td>
                                            $rs[status] <span class='dot-green'></span>
                                           
                                            </td>";
                                          }	 
                                          else
                                          {
                                            echo "
                                            <td>
                                            $rs[status] <span class='dot-red'></span>
                                            
                                            </td>
                                            ";
                                          }  
                                        
                                              
                                                ?>
                                                <?php

                                                 if($rs['status'] == 'Active')
                                                 {
                                                   echo "
                                                   <td>
                                                   <a href='disable_asset.php?asset_id=$rs[asset_id]' class='btn btn-outline-warning btn-sm'>  </i> Disable</a> &nbsp;&nbsp;
                                                   <a href='del_asset.php?asset_id=$rs[asset_id]' class='btn btn-danger btn-sm'>  <i class='fa fa-close'></i> Delete</a>
                                                   <a href='qrcode.php?asset_id=$rs[asset_id]' class='btn btn-success btn-sm'><i class='fa fa-barcode' aria-hidden='true'></i> Generate QR </a> </td>
                                                  
                                                   </td>";
                                                 }	 
                                                 else
                                                 {
                                                   echo "
                                                   <td>
                                                   <a href='active_asset.php?asset_id=$rs[asset_id]' class='btn btn-outline-success btn-sm'>  </i> Active</a> &nbsp;&nbsp;
                                                   <a href='del_asset.php?asset_id=$rs[asset_id]' class='btn btn-danger btn-sm'>  <i class='fa fa-close'></i> Delete</a> 
</td>
                                                 
                                                   ";
                                                 }  
                                                 echo "
                                             

                                       
                                     
                                         	</tr>"; 
                                         
                                        
                                              
                                     
                                         
				}
				?>      </tbody>
















                </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->


        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="./index.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="../assets/demo/chart-area-demo.js"></script>
        <script src="../assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="../js/datatables-simple-demo.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../js/demo/chart-area-demo.js"></script>
    <script src="../js/demo/chart-pie-demo.js"></script>

</body>

</html>