<?php
	include '../includes/config.php';
	$id = $_REQUEST['id'];
    $currentdate = date('Y-m-d');
  

	$query = "UPDATE users SET status = 'Active' , modified_date='$currentdate'  WHERE id = '$id'";
	
	$result = $conn->query($query);
	if($result === TRUE){
		echo "<script type = \"text/javascript\">
											alert(\"Status Updated\");
												window.location = (\"section_manager.php\")
											</script>";
	?>
		<meta content="4; request.php" http-equiv="refresh" />
	<!-- <?php
	
	}
	?> -->