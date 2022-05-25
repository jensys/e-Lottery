<?php
session_start();
$val3 = $_SESSION['service_name'];
if (null != filter_input(INPUT_POST,'service')){
    $val1 = filter_input(INPUT_POST,'service');
    $val2 = filter_input(INPUT_POST,'cost');
    $conn=mysqli_connect("localhost", "root", "", "raj");
    if (mysqli_connect_error()) {
        die('Connect error('. mysqli_connect_error().')'. mysqli_connect_error());
    }
    else{

        
            $sql="UPDATE `services` SET `Name` = '$val1' , `Cost Criteria` = '$val2' WHERE `Name` = '$val3';";
            if ($conn->query($sql)) {
                //echo $val1 . ":" . $val2;
                header("Location: updateService.php?");	
            }
            else{
                echo "Error: ".$sql."<br>".$conn->error;
            }
        
    }


                   
}                      
?>