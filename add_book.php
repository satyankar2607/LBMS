<?php
include("db.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){
  

  $b_name = $_POST["b_name"];
  $procurement_date = $_POST["procurement_date"]; 
  $b_author = $_POST["b_author"]; 

echo $procurement_date;

  
$sql = "INSERT INTO `books` (`id`, `b_name`, `b_author`, `procurement_date`) VALUES ('', '$b_name', '$b_author', '$procurement_date')";
$result = mysqli_query($conn, $sql);

  if($result){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success!</strong> Your entry has been submitted successfully!
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">×</span>
    </button>
</div>';
  }
}

?>

<?php
include("add_books.html")


?>

