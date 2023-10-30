<?php
include("db.php");

$id = $_GET['id'];

$querry = "Select * from members where id = '$id' ";
$result = mysqli_query($conn, $querry);


$record=mysqli_fetch_assoc($result);

if($_SERVER["REQUEST_METHOD"] == "POST"){
  
  $id = $_POST["id"];
  $start_date = $_POST["start_date"]; 
  $duration = $_POST["duration"];
  $membership = $_POST["membership"];

  if ($membership == "remove"){
    $sql = "DELETE FROM members WHERE id = '$id' ";
     $result = mysqli_query($conn, $sql);
  }
  else{
  $sql = "UPDATE members set  start_date = '$start_date' WHERE id = '$id' ";
  $result = mysqli_query($conn, $sql);
  }
  header("Location:display_members.php");

}
?>

<?php
include("update_members.php")
?>