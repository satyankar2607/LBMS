<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-4">
        <h3 class="text-primary"> HTML Form to Update membership</h3>
        <p>
          
        </p>
        <!--=================HTML Form=======================-->
        <form method="post">
          <div class="form-group">
            <input type="text" value = "<?php echo $record['id']   ?> " class="form-control" placeholder="id" name="id">
          </div>

          <div class="form-group">
           New Date: <input type="date" deafult = "<?php echo $record['start_date']   ?> " class="form-control" placeholder="start_date" name="start_date">
          </div>
          

            <div class="form-group">
               <input type="radio" class="form-check-input" name="membership" value="remove"><h4>member remove: </h4>

            </div>

          <button type="submit" name="update" class="btn btn-primary">Update</button>
        </form>
        <!--======================== HTML Form============================ -->
      </div>
      <div class="col-sm-8">

      </div>
    </div>
  </div>
</body>

</html>