<?php
	include '../includes/config.php';
	$section_id= $_REQUEST['section_id'];
		$query = "DELETE FROM sections WHERE section_id= '$section_id'";

        
	$result = $conn->query($query);
	if($result === TRUE){
		echo "<script type = \"text/javascript\">
					alert(\" Successfully Removed \");
					window.location = (\"add_section.php\")
				</script>";
	}
?>
