<?php
include 'db.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Register Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
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

        input[type="text"],
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

    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            // $servername = "localhost";
            // $username = "root";
            // $password = "";
            // $database = "darx";

            $email = $_POST["email"];
            $pass = $_POST["pass"]; 
            $fullname = $_POST["fullname"]; 
            $usertype = $_POST["usertype"]; 


            $sql = "INSERT INTO `users_master` (`id`, `full_name`, `email`, `password`,`usertype`) VALUES ('', '$fullname', '$email', '$pass', '$usertype')";
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
	<div class="container">
		<h1>Register</h1>
		<form action = "/acxiom/register.php" method = "POST">
			<label for="fullname">Full Name:</label>
			<input type="text" id="fullname" placeholder = "NAME" name="fullname" required></input>
			<label for="email">Email:</label>
			<input type="email" id="email" placeholder = "EMAIL" name="email" required>
			<label for="password">Password:</label>
			<input type="password" id="password" placeholder = "PASSWORD" name="pass" required>
            <input type="radio" id="usertype"  name="usertype" value ="owner" required>librarian
            <input type="radio" id="usertype"  name="usertype" value ="vendor" required>student <br><br>


			<input type="submit" value="Register"class="btn btn-primary">
		</form>
		<a href="login.php">Login Instead</a>
	</div>
</body>
</html>
