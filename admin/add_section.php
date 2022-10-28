
<?php include('dashboard_header.php'); ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Add Section</h1>
                   
                    <div class="card mb-4">
                            <div class="card-body">
                                <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                    <i class="fa-solid fa-add"></i> Add  Section
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Add Section</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                        <form  class="row g-3" method='POST' enctype="multipart/form-data" >
                                        
                        <div class="col-md-12">
                        <label for="inputBookNameY" class="form-label">Section Name</label>
                         <input type="text" class="form-control" id="inputBookNameY" name="section_name" placeholder="Enter Section Name">
                       </div>
                       <div class="col-md-12">
                         <label for="inputPassword4Y" class="form-label">Section Ref Num</label>
                         <input type="text" class="form-control" id="inputPassword4Y" name="sec_ref_num" placeholder="Ente Ref Number">
                         
                       </div>
                      <div>
                      <input type="submit" class="btn btn-success mr-5" name="submit" ></div>
                     
                       
                        
                      <?php
                     if(isset($_POST["submit"]))
                     {
                       
                       
                         include '../includes/config.php';
                         {
                         
                             $section_name = $_POST['section_name'];
                             $sec_ref_num = $_POST['sec_ref_num'];
                             $currentdate = date('Y-m-d');
                         
                            $sql="insert into sections(section_name,sec_ref_num,created_date,status) VALUES ('$section_name','$sec_ref_num',' $currentdate','Active')";
                            if(mysqli_query($conn,$sql))
                            {
                           echo "<script type = \"text/javascript\">
                                         alert(\"Succesfully Added\");
                                         window.location = (\"add_section.php\")
                                         
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
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Section Table</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                        <tr>
                                            <th>Section ID</th>
                                            <th>Section Name</th>
                                            <th>Ref Num</th>
                                            <th>Created Date</th>
                                            <th>Status</th>
                                           
                                        </tr>
                                    </thead>  
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

</body>

</html>