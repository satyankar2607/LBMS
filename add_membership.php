<?php
include("db.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){
  

  $email = $_POST["email"];
  $start_date = $_POST["start_date"]; 
  $duration = $_POST["duration"]; 

 
    $querry = "SELECT * FROM users_master where '$email' = users_master.email ";
    $result = mysqli_query($conn, $querry);
    $record=mysqli_fetch_assoc($result);
    $id=  $record['id'];
   
    $end_date = $start_date;
//   date_add($end_date,date_interval_create_from_date_string("40 days"));

if($result){
  
  $sql = "INSERT INTO `members` (`id`, `start_date`) VALUES ('$id', '$start_date')";
  $result = mysqli_query($conn, $sql);
}
}
?>

<?php
include("add_member.html")


?>

