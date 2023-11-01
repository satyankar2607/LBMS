<?php 
include 'db.php';
$id = $_GET['id'];

    $sql = "SELECT * FROM members  WHERE members.id = '$id' ";
    $result = mysqli_query($conn, $sql);
    $record=mysqli_fetch_assoc($result);
    $fine= $record["fine"];

    if($record["fine"] > 0){
        echo("your fine is $fine rs.");
    }
    else{
        echo 'NO fine!!';
    }
?>