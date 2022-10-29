<?php
	include '../includes/config.php';
	$category_id = $_REQUEST['category_id'];
    $currentdate = date('Y-m-d');
  

	$query = "UPDATE category SET status = 'Disable' , modified_date='$currentdate'  WHERE category_id = '$category_id'";
	
	$result = $conn->query($query);
	if($result === TRUE){
		echo "<script type = \"text/javascript\">
											alert(\"Status Updated\");
												window.location = (\"category.php\")
											</script>";
	?>
		<meta content="4; request.php" http-equiv="refresh" />
	<!-- <?php
	
	}
	?> -->