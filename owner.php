<?php
include 'db.php';

$querry = "Select * from books";
$result = mysqli_query($conn, $querry);
?>


<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <h2><center>ADMIN(owner) HOME PAGE</center></h2>
    <br>
    <br>
    <table> 
    <tr>
        <th><a href="maintenance.php">Maintenance</a></th>
        <th>Reports</th>
        <th>Transactions</th>
    </tr>
    </table>

<div class="content-wrapper">
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title mt-2">All Books</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Book ID</th>
                                <th>Book Name</th>
                                <th>Author Name</th>
                            </tr>
                        </thead>
                        <tbody>

                        <?php
                        if($result)
                        {
                            while($record=mysqli_fetch_assoc($result))
                            { 

                               echo "<tr>
                                <td>".$bid=$record['b_id']. "</td>
                                 <td>".$bname=$record['b_name']. "</td>
                                 <td>".$bauthor=$record['b_author']. "</td>

                               
                                </tr>";
                                

                            }    
                        }
                        ?>
                        </tbody>

                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->


    <!-- Page specific script -->
    <script>
        $(function () {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
</body>

</html>
<!-- <?php

$id = $_GET['id'];

if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    // $servername = "localhost";
    // $username = "root";
    // $password = ""; 
    // $database = "darx";
    // $conn = mysqli_connect($servername, $username, $password, $database);

    $blogdata = $_POST["blogdata"];
    $id = $_POST["sno"];

    $sql = "INSERT INTO `blogs` (`id`, `blogdata`) VALUES ('$id', '$blogdata')";
    $result = mysqli_query($conn, $sql);

    header("location: your_blogs.php?id=$id");


}
?>

<h2>Write your blog here:</h2>

<form action = "/acxiom/owner.php" method = "POST">
    <textarea name="blogdata" rows="25" cols="100"></textarea>
    <input type="hidden" name="sno" value=<?php echo "$id"; ?>>
<input type="submit" value="SUBMIT" class="btn btn-primary">
</form> -->
