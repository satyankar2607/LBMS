<?php
include 'db.php';
?>
<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Dashboard Page</title>
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

        .logout-btn {
            display: block;
            text-align: center;
            margin-top: 20px;
            font-size: 16px;
            color: #4CAF50;
            text-decoration: none;
            border: 2px solid #4CAF50;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        .logout-btn:hover {
            background-color: #4CAF50;
            color: #fff;
        }
    </style>
    <!-- **************************** Ignore the styling part **************************** -->

	<div class="container">
		<h1>Welcome - <?php echo $_SESSION['email']?></h1>
		<a href="/acxiom/logout.php" class="logout-btn">Logout</a>
	</div>
</body>
</html>
