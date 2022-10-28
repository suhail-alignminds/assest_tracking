<?php
	include '../includes/config.php';
	$id= $_REQUEST['id'];
		$query = "DELETE FROM sections WHERE id= '$id'";
	$result = $conn->query($query);
	if($result === TRUE){
		echo "<script type = \"text/javascript\">
					alert(\" Successfully Removed \");
					window.location = (\"add_section.php\")
				</script>";
	}
?>
