<?php
	include '../includes/config.php';
	$vendor_id= $_REQUEST['vendor_id'];
		$query = "DELETE FROM vendor WHERE vendor_id= '$vendor_id'";

        
	$result = $conn->query($query);
	if($result === TRUE){
		echo "<script type = \"text/javascript\">
					alert(\" Successfully Removed \");
					window.location = (\"vendor.php\")
				</script>";
	}
?>
