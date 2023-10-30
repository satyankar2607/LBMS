<?php
include 'db.php';

$querry = "Select * from members";
$result = mysqli_query($conn, $querry);
?>


<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <h2><center>ALL MEMBERS</center></h2>
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
                                <th>member id</th>
                                <th>start date</th>
                                <th>update</th>
                            </tr>
                        </thead>
                        <tbody>

                        <?php
                        if($result)
                        {
                            while($record=mysqli_fetch_assoc($result))
                            { 

                               echo "<tr>
                                <td>".$mid=$record['id']. "</td>
                                 <td>".$bname=$record['start_date']. "</td>

                                 <td> <a href = 'update_membership.php?id=$record[id]'>Update</a> </td>
                               
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