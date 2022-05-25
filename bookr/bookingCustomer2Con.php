<?php


    session_start();

    $booking_date = $_SESSION['date'];
    $user_id = $_SESSION['users_id'];
    $event_type=filter_input(INPUT_POST, 'type');

    $host="localhost";  
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "raj";

    $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);


    if (mysqli_connect_error()) {
		die('Connect error('. mysqli_connect_error().')'. mysqli_connect_error());
	}

    else{
	    $sql="INSERT INTO `booking`(`date`,`users_id`,`event_type`)
	    values('$booking_date','$user_id','$event_type')";
		//$service = $_GET['service'];

	    if ($conn->query($sql)) {
            // header("Location: customerHome.php?err=".urlencode("New record is inserted successfully"));	
	    }
	    else{
		    echo "Error: ".$sql."<br>".$conn->error;
	    }
    }	

    $sql6=mysqli_query($conn,"SELECT `booking_id` FROM `booking` WHERE `date`='$booking_date'");
    $fetch2=mysqli_fetch_array($sql6);

    if(isset($_POST['submit'])){

        if(!empty($_POST['service'])) {
    
            foreach($_POST['service'] as $value){
                $sql5=mysqli_query($conn,"SELECT `Service_id` FROM `services` WHERE `Name`='$value'");
                $fetch=mysqli_fetch_array($sql5);
                $sql9 = $fetch['Service_id'];
                $sql10 = $fetch2['booking_id'];
                $sql7="INSERT INTO `works`(`Service_id`,`booking_id`) values('$sql9','$sql10')";
                if ($conn->query($sql7)) {
			
                    header("Location: customerHome.php?id=".urlencode("$user_id"));
                            
                }
                else{
                    echo "Error: ".$sql7."<br>".$conn->error;
                }
                echo "$value";
            }
    
        }
    
    }
?>