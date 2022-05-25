<?php
session_start();
if (null != filter_input(INPUT_POST,'service')){
    $val1 = filter_input(INPUT_POST,'service');
    $val2 = filter_input(INPUT_POST,'cost');
    $conn=mysqli_connect("localhost", "root", "", "raj");
    if (mysqli_connect_error()) {
        die('Connect error('. mysqli_connect_error().')'. mysqli_connect_error());
    }
    else{

        $checkUser = "SELECT * from services where `Name`='$val1' and `Approved` = 1;";
        $result=mysqli_query($conn, $checkUser);
        $count = mysqli_num_rows($result);
        if($count > 0){
            echo"Service already exist";
        }


        else{
            $sql="INSERT INTO `services`(`Name`,`Cost Criteria`,`Approved`)
            values('$val1','$val2',1)";
            if ($conn->query($sql)) {
                //echo $val1 . ":" . $val2;
                header("Location: addlServiceAdmin.php?");	
            }
            else{
                echo "Error: ".$sql."<br>".$conn->error;
            }
        }
    }


                   
}                      
?>