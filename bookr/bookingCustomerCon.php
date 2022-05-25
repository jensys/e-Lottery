<?php

session_start();

$conn=mysqli_connect("localhost", "root", "", "raj");

    if(!$conn){
        die("Error: Failed to connect to database!");
    }


    $date = $_POST['date'];
    $_SESSION['date']=$date;

    if ( !isset($_POST['date']) && strlen($_POST['date']) < 1  )
        header("Location: bookingCustomer.php?err=".urlencode("Please enter a date"));


    $query = mysqli_query($conn, "SELECT * FROM `booking` where `date` = '$date'");
    $count=mysqli_num_rows($query);
    if($count > 0)
        header("Location: bookingCustomer.php?err=".urlencode("The selected date is already booked"));
    else{
        header("Location: bookingCustomer2.php?val=".urlencode("$date"));
    }


?>