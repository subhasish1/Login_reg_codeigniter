
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>StudentUpdateInfo</title>
  </head>
  <body>
    

    <form action="" method="POST">
      <div class="container">
    <div class="col-lg-5 col-lg-offset-2">
        <h1>Schooling Details</h1>
         
         <?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>
        <?php if (isset($_SESSION['success'])) { 
           ?>
        <div class="alert alert-success"><?php echo $_SESSION['success']; ?></div>
        <?php
        } 
      ?>
        <?php
            if (isset($_SESSION['mail'])){
              $email = $_SESSION['mail'];
            }
        ?>
        <div class="form-group">
          
          <input class="form-control" type="hidden" name="semail" value=$email>
          
        </div>
        <div class="form-group">
            <label for="schlnm">School Name</label>
            <select class="form-control" name="schlnm">
              <option></option>
              <option value="Nsec">Nsec</option>
              <option value="msit">Msit</option>
              <option value="techno">Techno</option>
              <option value="heritage">Heritage</option>
            </select>
          </div>

        <div class="form-group">
            <label for="class">Class</label>
            <select class="form-control" name="class">
              <option></option>
              <option value="std I">Std I</option>
              <option value="std II">Std II</option>
              <option value="std III">Std III</option>
              <option value="std III">Std IV</option>
            </select>
        </div>
        <!-- Fathers Information -->
        <h3>Father's Infomation:</h3>
        <div class="form-group">
          <label for="fname" class="label-default">Fathers Name</label>
          <input class="form-control" type="text" name="fname">
        </div>

        <div class="form-group">
          <label for="femail" class="label-default">Email</label>
          <input class="form-control" type="text" name="femail">
        </div>

        <div class="form-group">
          <label for="fphone" class="label-default">Phone Number</label>
          <input class="form-control" type="text" name="fphone">
        </div>
        <div class="form-group">
          <label for="fdob" class="label-default">Dob</label>
          <input class="form-control" type="date" name="fdob">
        </div>
        <div class="form-group">
            <label for="fdesignation">Designation</label>
            <select class="form-control" name="fdesignation">
              <option></option>
              <option value="service">Service</option>
              <option value="business">business</option>
            </select>
        </div>
        <div class="form-group">
            <label for="fcmpnynm">Company Name</label>
            <select class="form-control" name="fcmpnynm">
              <option></option>
              <option value="simplified">Simplified</option>
              <option value="ibm">IBM</option>
              <option value="google">Google</option>

            </select>
        

     <h3>Mothers Information</h3>
      <div class="form-group">
          <label for="mname" class="label-default">Mother Name</label>
          <input class="form-control" type="text" name="mname">
        </div>

        <div class="form-group">
          <label for="memail" class="label-default">Email</label>
          <input class="form-control" type="text" name="memail">
        </div>

        <div class="form-group">
          <label for="mphone" class="label-default">Phone Number</label>
          <input class="form-control" type="text" name="mphone">
        </div>
        <div class="form-group">
          <label for="mdob" class="label-default">Dob</label>
          <input class="form-control" type="date" name="mdob">
        </div>
        <div class="form-group">
            <label for="mdesignation">Designation</label>
            <select class="form-control" name="mdesignation">
              <option></option>
              <option value="service">Service</option>
              <option value="business">business</option>
              <option value="house wife">House wife</option>
            </select>
        </div>
        <div class="form-group">
            <label for="mcmpnynm">Company Name</label>
            <select class="form-control" name="mcmpnynm">
              <option></option>
              <option value="simplified">Simplified</option>
              <option value="ibm">IBM</option>
              <option value="google">Google</option>
            </select>
        
     </div>
     <h3>Parent Information</h3>
     <div class="form-group">
          <label for="pname" class="label-default">Parent Name</label>
          <input class="form-control" type="text" name="pname">
        </div>

        <div class="form-group">
          <label for="pemail" class="label-default">Email</label>
          <input class="form-control" type="text" name="pemail">
        </div>

        <div class="form-group">
          <label for="pphone" class="label-default">Phone Number</label>
          <input class="form-control" type="text" name="pphone">
        </div>
        <div class="form-group">
          <label for="pdob" class="label-default">Dob</label>
          <input class="form-control" type="date" name="pdob">
        </div>
        <div class="form-group">
            <label for="pdesignation">Designation</label>
            <select class="form-control" name="pdesignation">
              <option></option>
              <option value="service">Service</option>
              <option value="business">business</option>
            </select>
        </div>
        <div class="form-group">
            <label for="pcmpnynm">Company Name</label>
            <select class="form-control" name="pcmpnynm">
              <option></option>
              <option value="simplified">Simplified</option>
              <option value="ibm">IBM</option>
              <option value="google">Google</option>

            </select>
        </div>
     <div>
          <button type="submit" class="btn btn-primary" name="submitupdate">Submit</button>
     </div>
   </div>
     </form>     

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>