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
    <h2><center>ALL BOOKS</center></h2>
    <br>
    

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
                                <th>Boom id</th>
                                <th>Book name</th>
                                <th>book author</th>
                                <th>procurement_date</th>
                                <th>DElete</th>
                                
                            </tr>
                        </thead>
                        <tbody>

                        <?php
                        if($result)
                        {
                            while($record=mysqli_fetch_assoc($result))
                            { 

                               echo "<tr>
                                <td>".$id=$record['id']. "</td>
                                 <td>".$bname=$record['b_name']. "</td>
                                 <td>".$b_author=$record['b_author']. "</td>
                                 <td>".$procurement_date=$record['procurement_date']. "</td>
                                 <td> <a href = 'delete_book.php?id=$record[id]'>Delete</a> </td>
                              
                               
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