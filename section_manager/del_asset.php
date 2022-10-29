<?php
	include '../includes/config.php';
	$asset_id= $_REQUEST['asset_id'];
		$query = "DELETE FROM assets WHERE asset_id= '$asset_id'";

        
	$result = $conn->query($query);
	if($result === TRUE){
		echo "<script type = \"text/javascript\">
					alert(\" Successfully Removed \");
					window.location = (\"add_asset.php\")
				</script>";
	}
?>
