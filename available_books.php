<?php
include 'db.php';



$sql = "SELECT * FROM books WHERE books.present = 'yes'  ";
$result1 = mysqli_query($conn, $sql);



?>


<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <h2><center>AVAILABLE BOOKS</center></h2>
  

<div class="content-wrapper">
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title mt-2"> Books issued by me</h3>
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
                        if($result1)
                        {
                            while($record=mysqli_fetch_assoc($result1))
                            { 

                               echo "<tr>
                                <td>".$id=$record['id']. "</td>
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
