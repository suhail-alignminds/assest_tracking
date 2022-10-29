<?php
	include '../includes/config.php';
	$id = $_REQUEST['section_id'];
    $currentdate = date('Y-m-d');
  

	$query = "UPDATE sections SET status = 'Active', modified_date='$currentdate' WHERE id = '$section_id'";
	
	$result = $conn->query($query);
	if($result === TRUE){
		echo "<script type = \"text/javascript\">
											alert(\"Status Updated\");
												window.location = (\"add_section.php\")
											</script>";
	?>
		<meta content="4; request.php" http-equiv="refresh" />
	<!-- <?php
	
	}
	?> -->