<?php
include 'db.php';


if($_SERVER["REQUEST_METHOD"] == "POST"){
  

    $m_id = $_POST["m_id"];


    $sql = "SELECT * FROM members  WHERE members.id = '$m_id' ";
    $result = mysqli_query($conn, $sql);
    $record=mysqli_fetch_assoc($result);
    $fine= $record["fine"];

    if($record["fine"] > 0){
        echo("your fine is $fine rs.");
    }
    else{
        echo 'NO fine!!';
    }
}

?>

<html>
    <div class="container">
		<h1>PAY FINE</h1>
		<form action = "/acxiom/pay_fine.php" method = "POST">
			<label for="member name">Member Name:</label>
			<input type="text" id="full_name" placeholder = "full name" name="full_name" required></input>

            <label for="member id">member id:</label>
			<input type="text" id="member id" placeholder = "member id" name="m_id" required></input>

			<input type="submit" value="calculate fine"class="btn btn-primary">
		</form>
		<a href="owner.php">Login Instead</a>
	</div></html>