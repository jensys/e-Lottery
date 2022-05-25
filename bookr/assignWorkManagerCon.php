<?php
session_start();
$val3 = $_SESSION['work_id'];
if (null != filter_input(INPUT_POST,'type')){
    $val1 = filter_input(INPUT_POST,'type');
    $conn=mysqli_connect("localhost", "root", "", "raj");
    if (mysqli_connect_error()) {
        die('Connect error('. mysqli_connect_error().')'. mysqli_connect_error());
    }
    else{

        
            $sql="UPDATE `works` SET `s_p_id` = '$val1' WHERE `work_id` = '$val3';";
            if ($conn->query($sql)) {
                //echo $val1 . ":" . $val2;
                header("Location: assignWorkManager.php?");	
            }
            else{
                echo "Error: ".$sql."<br>".$conn->error;
            }
        
    }


                   
}  
session_destroy();                    
?>