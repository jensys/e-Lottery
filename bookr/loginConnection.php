<?php
	session_start();


	$conn=mysqli_connect("localhost", "root", "", "raj");
 
	if(!$conn){
		die("Error: Failed to connect to database!");
	}

 
		$email = $_POST['idLogin'];
		$password = $_POST['passLogin'];
 
		
		$query = mysqli_query($conn, "SELECT * FROM `users` WHERE `email`='$email' && `password`='$password'");
		$fetch=mysqli_fetch_array($query);
		$count=mysqli_num_rows($query);
 
		if($count > 0){
			$_SESSION['users_id']=$fetch['users_id'];
            if($fetch['u_type'] == 1)
                header("Location: customerHome.php?id=".urlencode($fetch['users_id']));

            else if($fetch['u_type'] == 2)
                header("Location: serviceProviderHome.php?id=".urlencode($fetch['users_id']));

            else{
                header("Location: adminHome.php?id=".urlencode($fetch['users_id']));
            }
	  
	        $_SESSION['user']=$fetch['firstname'];
	  
		}else{
			$failure = "Invalid username or password";
            header("Location: index.php?id=".urlencode($failure));
		}
?>