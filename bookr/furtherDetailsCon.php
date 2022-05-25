<?php
	session_start();
	$username=$_SESSION['name'];
	$conn=mysqli_connect("localhost", "root", "", "raj");
 
	if(!$conn){
		die("Error: Failed to connect to database!");
	}
	$txt1=filter_input(INPUT_POST, 'cname');
	$txt2=filter_input(INPUT_POST, 'service');
	$txt3=filter_input(INPUT_POST, 'rate');
	$txt4=filter_input(INPUT_POST, 'lic');
	$txt5=filter_input(INPUT_POST, 'fssai');

		$sql1=mysqli_query($conn,"SELECT `Service_id` FROM `services` WHERE `Name`= '$txt2'"); 
		$fetch = mysqli_fetch_array($sql1);
		$sql3 = $fetch['Service_id'];

		$sql4=mysqli_query($conn,"SELECT `users_id` FROM `users` WHERE `firstname`= '$username'"); 
		$fetch2 = mysqli_fetch_array($sql4);
		$sql5 = $fetch2['users_id'];

		
		$sql="INSERT INTO `service_providers`(`company_name`,`Service_id`,`rate_per_criteria`,`License_id`,`FSSAI_id`,`users_id`)
		values('$txt1','$sql3','$txt3','$txt4','$txt5','$sql5');";
		 
		 if ($conn->query($sql)) {
			
			header("Location: index.php");
					
		}
		else{
			echo "Error: ".$sql."<br>".$conn->error;
		}
?>