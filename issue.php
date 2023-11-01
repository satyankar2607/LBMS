<?php
include 'db.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){
  

    $b_name = $_POST["b_name"];
	$m_id = $_POST["m_id"];
	$issue_date = $_POST["issue_date"];
	$return_date = $_POST["return_date"];
	
    $sql = "SELECT * FROM books  WHERE books.b_name = '$b_name' ";
    $result = mysqli_query($conn, $sql);
	$record=mysqli_fetch_assoc($result);
  	$b_id=  $record["id"];
	
	$sql2 = "INSERT INTO `books_issued` (`b_id`, `issue_date`, `return_date`, `m_id`) VALUES ('$b_id', '$issue_date', '$return_date', '$m_id')";

	$result = mysqli_query($conn, $sql2);
	if($result)
	{
		echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success!</strong> Your entry has been submitted successfully!
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">×</span>
    </button>
	</div>';
	}
    
	$sql3 = "UPDATE books set  present = 'no' WHERE id = '$b_id' ";
  	$result = mysqli_query($conn, $sql3);
    
}

?>

<html>
    <div class="container">
		<h1>ISSUE book</h1>
		<form action = "/acxiom/issue.php" method = "POST">
			Book name:
			<input type="text" placeholder = "book name" name="b_name" required></input><br><br>
			member id:
			<input type="text" placeholder = "member id" name="m_id" required></input><br><br>
			issue date:
			<input type="date" placeholder = "issue date" name="issue_date" required>
			return date:
			<input type="date" placeholder = "return date" name="return_date" required>(max 15 dys)
			<br><br>
			<input type="submit" value="Confirm issue"class="btn btn-primary">
		</form>
		<a href="owner.php">Login Instead</a><br><br>
		<a href="return.php">return book</a>
	</div></html>