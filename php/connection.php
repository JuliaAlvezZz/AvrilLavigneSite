<?php
	function DBConnect(){
		$con=@mysqli_connect(DB_HOSTNAME,DB_USERNAME,DB_PASSWORD,DB_DATABASE) or die(mysqli_connect_error($con));
		
		return $con;		
	}
	
	function DBClose($con){
		@mysqli_close($con) or die(mysqli_error($con));
	}
?>