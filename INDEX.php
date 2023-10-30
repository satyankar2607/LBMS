<!-- **************************** LOGIN PAGE **************************** -->

<?php
include 'db.php';
?>

<?php
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){

    
    $email = $_POST["email"];
    $pass = $_POST["pass"]; 
    
    // $servername = "localhost";
    // $username = "root";
    // $password = "";
    // $database = "darx";

    // $conn = mysqli_connect($servername, $username, $password, $database);

    $sql = "Select * from users_master where email='$email' AND password='$pass'";
    $result = mysqli_query($conn, $sql);
    $record = mysqli_fetch_assoc($result);


    $num = mysqli_num_rows($result);

    if ($num == 1){
       
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['email'] = $email;
    
        
        if ($record['usertype'] == 'owner'){
            header("location: owner.php?id=$record[id]");
        }
        else{
            header("location: vendor.php?id=$record[id]");
        }
        
    } 
    else{
        $showError = "Invalid Credentials";
    }
        
}
    
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
    if($login){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> You are logged in
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div> ';
    }
    if($showError){
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> '. $showError.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div> ';
    }
    ?>


    <!-- **************************** Ignore the styling part **************************** -->
    <style>
        body {
            background-color: #f2f2f2;
        }

        .container {
            width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.3);
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
        }

        label {
            display: block;
            font-size: 18px;
            margin-bottom: 10px;
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: none;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
        }

        a {
            display: block;
            text-align: center;
            margin-top: 20px;
            font-size: 16px;
            color: #4CAF50;
            text-decoration: none;
        }

    </style>
    <!-- **************************** Ignore the styling part **************************** -->


	<div class="container">
		<h1>Login</h1>
		<form action = "/acxiom/login.php" method = "POST">
			<label for="email">Email:</label>
			<input type="email" id="email" name="email" required placeholder="EMAIL">
			<label for="password">Password:</label>
			<input type="password" id="password" name="pass" required placeholder= "PASSWORD">
			<input type="submit" value="Submit">
		</form>
		<a href="register.php">Register</a>
	</div>
</body>
</html>
