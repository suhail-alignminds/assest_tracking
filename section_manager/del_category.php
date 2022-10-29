<?php
	include '../includes/config.php';
	$category_id= $_REQUEST['category_id'];
		$query = "DELETE FROM category WHERE category_id= '$category_id'";

        
	$result = $conn->query($query);
	if($result === TRUE){
		echo "<script type = \"text/javascript\">
					alert(\" Successfully Removed \");
					window.location = (\"category.php\")
				</script>";
	}
?>
