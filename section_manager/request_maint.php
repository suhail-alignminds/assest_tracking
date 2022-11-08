<?php
	include '../includes/config.php';
	$asset_id = $_REQUEST['asset_id'];
    $currentdate = date('Y-m-d');
  

	$query = "UPDATE assets SET status = 'Maintenance' , modify_date='$currentdate'  WHERE asset_id = '$asset_id'";
	
	$result = $conn->query($query);
	if($result === TRUE){
		echo "<script type = \"text/javascript\">
											alert(\"Status Updated\");
												window.location = (\"maintanance.php\")
											</script>";
	?>
		<meta content="4; request.php" http-equiv="refresh" />
	<!-- <?php
	
	}
	?> -->