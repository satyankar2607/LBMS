<?php
include("db.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){
  

  $email = $_POST["email"];
  $start_date = $_POST["start_date"]; 
  $full_name = $_POST["full_name"]; 
  $email = $_POST["email"];
 
  $querry = "SELECT * FROM users_master where '$email' = users_master.email ";
  $result = mysqli_query($conn, $querry);
  $record=mysqli_fetch_assoc($result);
  $id=  $record["id"];
  if($id == ""){
    echo('student not registered!!');
  }
 

if($id != ""){
  
  // $sql = "INSERT INTO `members` (`id`, `full_name`,'email','start_date') VALUES ('$id', '$full_name','$email','$start_date')";
  $sql = "INSERT INTO `members` (`id`, `full_name`, `email`, `start_date`) VALUES ('$id', '$full_name', '$email', '$start_date')";

  $result = mysqli_query($conn, $sql);
  
}
else{
  echo('student not registered!!');
}
}

?>

<?php
include("add_member.html")


?>

