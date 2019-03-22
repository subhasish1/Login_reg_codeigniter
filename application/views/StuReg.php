
<html >
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>StudentRegistration</title>
  </head>
  <body>
    <form action="" method="POST">
      <div class="container">
    <div class="col-lg-5 col-lg-offset-5">
        <h1>Student Registration Form</h1>
         <?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>
        <?php if (isset($_SESSION['success'])) { ?>
        <div class="alert alert-success"><?php echo $_SESSION['success']; ?></div>
        <?php
      } ?>

     
        <div class="form-group">
          <label for="name" class="label-default">Name</label>
          <input class="form-control" type="text" name="name">
        </div>

        <div class="form-group">
          <label for="email" class="label-default">Email (if not, fill parents email)</label>
          <input class="form-control" type="text" name="email">
        </div>

        <div class="form-group">
          <label for="phone" class="label-default">Phone Number (if not, put parents number)</label>
          <input class="form-control" type="text" name="phone">
        </div>
        <div class="form-group">
          <label for="dob" class="label-default">Dob</label>
          <input class="form-control" type="date" name="dob">
        </div>
        <div class="form-group">
            <label for="gender">Gender</label>
            <select class="form-control" name="gender">
              <option></option>
              <option value="male">Male</option>
              <option value="female">Female</option>
            </select>
          </div>
          <button type="submit" class="btn btn-primary" name="submit">Submit</button>
     </div>
    </form>  
    
  <div class="col-lg-3 col-lg-offset-2">
     <div>
      
      <?php
      $i=0;
      foreach($r as $row)
      {
        $i++;
      }
      echo "<h3>Number Of total Registration:".$i."</h3>";
       
      ?>
      </div>

       <div class="container">
        <h2>School</h2>
                   
        <table class="table">
          
            <tr>
              <th>School name</th>
              <th>total registration</th>
            </tr>
            <?php

            foreach ($school as $row) {  
              echo "<tr>";
                echo "<td>".$row->schoolnm."</td>";
                echo "<td> ".$row->s."</td>";
              echo "</tr>";
            
          }
            
            // print_r($row);
            ?>
          
        </table>
        </div>

        <div class="container">
        <h2>Class</h2>
                   
        <table class="table">
          
            <tr>
              <th>Class</th>
              <th>total registration</th>
            </tr>
            <?php
            foreach ($class as $row) {
              echo "<tr>";
                echo "<td>".$row->class."</td>";
                echo "<td> ".$row->s."</td>";
              echo "</tr>";
            }
            // print_r($row);
            ?>
          
        </table>
        </div>

        <div class="container">
        <h2>Parents</h2>
                   
        <table class="table">
          
            <tr>
              <th>Parents Company Name</th>
              <th>total</th>
            </tr>
            <?php
            
            
            foreach ($fcmpny as $row) {
              echo "<tr>";
                echo "<td>".$row->fcmpnynm."</td>";
                echo "<td> ".$row->s."</td>";
              echo "</tr>";
            }
          
            // print_r($row);
            ?>
          
        </table>
        </div>

        <div class="container">
        <h2>Gender</h2>
                   
        <table class="table">
          
            <tr>
              <th>Gender</th>
              <th>total</th>
            </tr>
            <?php
            foreach ($gen as $row) {
              echo "<tr>";
                echo "<td>".$row->gender."</td>";
                echo "<td> ".$row->s."</td>";
              echo "</tr>";
            }
            // print_r($row);
            ?>
          
        </table>
        </div>
  
  </div>   

   </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>