<?php
include 'db.php';


if($_SERVER["REQUEST_METHOD"] == "POST"){
  

    $b_name = $_POST["b_name"];


    $sql = "SELECT * FROM books  WHERE books.b_name = '$b_name' ";
    $result = mysqli_query($conn, $sql);
    $record=mysqli_fetch_assoc($result);

    if($record["present"] == 'yes'){
        echo ' Book is present!!';
    }
    else{
        echo ' Book is not present!!';
    }
}

?>

<html>
    <div class="container">
		<h1>SEarch book</h1>
		<form action = "/acxiom/search.php" method = "POST">
			<label for="Book name">Book Name:</label>
			<input type="text" id="b_name" placeholder = "book name" name="b_name" required></input>
	
			<input type="submit" value="search"class="btn btn-primary">
		</form>
		<a href="owner.php">Login Instead</a>
	</div></html>