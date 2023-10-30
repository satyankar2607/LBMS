<?php
include 'db.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){
  

    $b_name = $_POST["b_name"];
    echo $b_name;


    $sql = "SELECT * FROM books  WHERE books.b_name = '$b_name' ";
    $result = mysqli_query($conn, $sql);
    
    if($result){
        echo ' Book is present!!';
    }
}

?>

<html>
    <div class="container">
		<h1>SEarch book</h1>
		<form action = "/acxiom/search.php" method = "POST">
			<label for="Book name">Book Name:</label>
			<input type="text" id="b_name" placeholder = "book name" name="b_name" required></input>
            <label for="issue">issue date:</label>
			<input type="date" placeholder = "issue date" name="issue_date" required>
			<label for="password">Password:</label>
			<input type="password" id="password" placeholder = "PASSWORD" name="pass" required>
			<input type="submit" value="search"class="btn btn-primary">
		</form>
		<a href="owner.php">Login Instead</a>
	</div></html>