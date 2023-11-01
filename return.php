<?php
include 'db.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){
  

    $b_name = $_POST["b_name"];
	$m_id = $_POST["m_id"];
	$returning_date = $_POST["returning_date"];
	
    
	
    $sql = "SELECT * FROM books  WHERE books.b_name = '$b_name' ";
    $result = mysqli_query($conn, $sql);
	$record=mysqli_fetch_assoc($result);
  	$b_id=  $record["id"];

    $sql3 = "UPDATE books set  present = 'yes' WHERE id = '$b_id' ";
  	$result = mysqli_query($conn, $sql3);
	
	
	if($result)
	{
		echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success!</strong> Your book has been returned successfully!
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">×</span>
    </button>
	</div>';
	}

    $sql2 = "SELECT * FROM books_issued  WHERE b_id = '$b_id' ";
    $result = mysqli_query($conn, $sql2);
	$record=mysqli_fetch_assoc($result);
  	$return_date=  $record["return_date"];

    // $earlier = new DateTime("2010-07-06");
    // $later = new DateTime("2010-07-09");
    $returning_date = new DateTime($returning_date);
    $return_date = new DateTime($return_date);

    $abs_diff = $returning_date->diff($return_date)->format("%a");
    $abs_diff = $abs_diff - 15;
    
    if($abs_diff > 0){
        echo("You have to pay fine!!");
        echo("Book overdued by $abs_diff days");

        $fine = $abs_diff * 50; 
        $sql5 = "UPDATE members set  fine = $fine WHERE id = '$m_id' ";
  	    $result = mysqli_query($conn, $sql5);
    }
    else{
        echo("NO FINE!!!");
    }
  
    
	$sql4 = "DELETE from books_issued WHERE b_id = '$b_id' ";
  	$result = mysqli_query($conn, $sql4);
    
}

?>

<html>
    <div class="container">
		<h1>RETURN book</h1>
		<form action = "/acxiom/return.php" method = "POST">
			Book name:
			<input type="text" placeholder = "book name" name="b_name" required></input><br><br>
			member id:
			<input type="text" placeholder = "member id" name="m_id" required></input><br><br>
			return date:
			<input type="date" placeholder = "returning date" name="returning_date" required>
			<br><br>
			<input type="submit" value="Confirm return"class="btn btn-primary">
		</form>
		<a href="owner.php">Login Instead</a>
        <br><br>
        <a href="issue.php">ISSUE book</a>
        <a href="pay_fine.php">PAY FINE</a>

	</div></html>