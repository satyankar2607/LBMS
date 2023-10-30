<?php
include 'db.php';
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <h2><center>HOUSE KEEPING</center></h2>
    

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
                     
                        <tbody>

                        
                      
                               <tr>
                                    <td>Membership</td>
                                    <td><a href="add_membership.php">Add</a></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><a href="display_members.php">Update</a></td>
                                </tr>
                                <tr>
                                    <td>Books</td>
                                    <td><a href="add_book.php">ADd</a></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><a href="display_book.php">Delete</a></td>
                                </tr>
                                <tr>
                                    <td>User Managment</td>
                                    <td>Add</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Update</td>
                                </tr>
                               

                                

                        
            
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
