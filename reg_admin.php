<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Registration</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"  type="text/javascript"></script>
    <script src="js/jquery.js" type="text/javascript"></script>
    </head>

<style>
    body{
        background-color: white;
    }

    .box1{
        box-sizing: border-box;
        border: 1px solid #f2f2f2;
        margin-left: 550px;
        margin-right: 550px;
        margin-top: 100px;
        margin-bottom: 100px;
        border-radius: 20px;
    }

</style>

<body>
    <div class="box1">
        <div class="box-content">
            <br>
            <form  class="m-2 p-4" method="POST" action="">
            <h3 class="text-center"><b>Admin Registration!</p></h1>

            <div class="form-group">
                <label class="col-md-12 control-label" for="name"></label>  
                <div class="col-md-12 input-group">
                <input id="name" name="name" placeholder="Enter Your Fullname" class="form-control input-md" type="text" required> 
            </div>

            <div class="form-group">
                <label class="col-md-12 control-label" for="gender"></label>
                <div class="col-md-12">
                    <select id="gender" name="gender" placeholder="Gender" class="form-control input-md"  required>
                <option value="Male">Select Gender</option>
                <option value="M">Male</option>
                <option value="F">Female</option> </select>
                </div>
            </div>

            <div class="form-group">
            <label class="col-md-12 control-label title1" for="email"></label>
                <div class="col-md-12">
                  <input id="email" name="email" placeholder="Enter Your Email Address" class="form-control input-md" type="email" required>    
                 </div>
            </div>

            <div class="form-group">
            <label class="col-md-12 control-label" for="password"></label>
                <div class="col-md-12">
                    <input id="password" name="password" placeholder="Enter Your Password" class="form-control input-md" type="password"required>
                </div>
            </div>

            <div class="col-12 text-center mt-3 pt-3">
                <input type="submit" name="Btnsubmit" value="Submit" class="btn btn-success">
            </div>

        </div>
    </div>




</body>
</html>

<?php 
    include "dbConnection.php";

    if(isset($_POST['Btnsubmit'])){

        $name = $_POST['name'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $result =  mysqli_query($con,"insert into admin(name, gender, email, password) VALUES('$name', '$gender', '$email', '$password')");
        if($result)
        {
            header("Location:index.php");
        }
       
    }

    
?>