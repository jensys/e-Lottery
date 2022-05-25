<?php
session_start();

/*header("Location: game.php?name=".urlencode($_POST['who']));*/

$txt1=filter_input(INPUT_POST, 'fname');
$txt2=filter_input(INPUT_POST, 'lname');
$txt3=filter_input(INPUT_POST, 'email');
$txt4=filter_input(INPUT_POST, 'mob');
$txt5=filter_input(INPUT_POST, 'address');
$txt6=filter_input(INPUT_POST, 'type');
$txt7=filter_input(INPUT_POST, 'pass');
$txt8=filter_input(INPUT_POST, 'confPass');

if (!empty($txt1)){
    if (!empty($txt2)){
        if (!empty($txt3)){ 
            if (!empty($txt4)){
                if (!empty($txt5)){
					if (!empty($txt6)){
						if (!empty($txt7)){
							if (!empty($txt8)){
								if ($txt8 == $txt7){
                    				$host="localhost";  
                    				$dbusername = "root";
                    				$dbpassword = "";
                    				$dbname = "raj";

                    				$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);


                    				if (mysqli_connect_error()) {
		                				die('Connect error('. mysqli_connect_error().')'. mysqli_connect_error());
	                				}
                    				else{

	                    				$checkUser = "SELECT * from users where email='$txt3'";
	                    				$result=mysqli_query($conn, $checkUser);
	                    				$count = mysqli_num_rows($result);
	                    				if($count > 0){
			                    			echo"User exist";
	                    				}


                        				else{
	                        				$sql="INSERT INTO `users`(`firstname`,lastname,`email`,mobile,`address`,`u_type`,`password`)
	                        				values('$txt1','$txt2','$txt3','$txt4','$txt5','$txt6','$txt7')";
	                        				if ($conn->query($sql)) {
		                        				echo "New record is inserted successfully";	
	                        				}
	                        				else{
		                        				echo "Error: ".$sql."<br>".$conn->error;
	                        				}


	                        				
											if ($txt6 == 2){
												header("Location: furtherDetailsService.php?err=".urlencode($txt1));
												$_SESSION['name']=$txt1;
											}
											else{
												header("Location: index.php?err=".urlencode("Submission Successful"));
											}
											
                        				}
                    				}
								}
								else{
									header("Location: index.php?err=".urlencode("Passwords Not Matching"));
								}
							}
							else{
								header("Location: index.php?err=".urlencode("Confirm password should not be empty"));
							}
						}
						else{
							header("Location: index.php?err=".urlencode("Password should not be empty"));
						}
        	        }
            	    else{
						header("Location: index.php?err=".urlencode("User Type should not be empty"));
                	}	
            	}
            	else{
					header("Location: index.php?err=".urlencode("Address should not be empty"));
            	}
        	}	
        	else{
				header("Location: index.php?err=".urlencode("Mobile Number should not be empty"));
        	}
    	}
    	else{
			header("Location: index.php?err=".urlencode("Email should not be empty"));
    	}
	}
	else{
		header("Location: index.php?err=".urlencode("Last Name should not be empty"));
	}
}
else{
	header("Location: index.php?err=".urlencode("First Name should not be empty"));
}


?>