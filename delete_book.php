<?php

include("db.php");

$id = $_GET['id'];

$sql = "DELETE FROM books  WHERE id = '$id' ";
$result = mysqli_query($conn, $sql);

header("Location:display_book.php");
?>