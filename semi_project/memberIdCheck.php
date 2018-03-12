<?php
 
    $conn = mysqli_connect("localhost","root","","kimc159");
 
    $memberId = $_POST['memberId'];
 
    $sql = "SELECT * FROM user WHERE user_id = '{$memberId}'";
 
    $res = mysqli_query($conn, $sql);
 
    if($res->num_rows >= 1){
        echo json_encode(array('res'=>'bad'));
    }else{
        echo json_encode(array('res'=>'good'));
    }
 
?>