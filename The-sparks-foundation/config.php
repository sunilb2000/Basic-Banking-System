<?php
        $conn = mysqli_connect('localhost', 'root', '', 'sparksbank');

	if(!$conn){
		die("Unable to connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>
