<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <form action="" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Enter Your Full Name">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="pass" placeholder="Enter Your Password">
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control" name="mob" placeholder="Enter Your Mobile No">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Enter Your Email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="address" placeholder="Enter Full address">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="city" placeholder="Enter City Name">
                        </div>
                        <div class="mb-2 d-flex w-100">
                            <input type="submit" class="btn btn-info" name="register" Value="Register">
                        </div>
                        <hr>
                        <h3>Already Registered? <a href="login.php">Signup here</a></h3>

                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>


<?php  

include('db.php');


if(isset($_POST['register'])){

    $Name=$_POST['name'];
    $Pass=$_POST['pass'];
    $Mob=$_POST['mob'];   
    $Email=$_POST['email'];
    $Address=$_POST['address'];
    $City=$_POST['city'];
  



    $sql="INSERT INTO user(name,pass,mob,email,adress,city) VALUES('$Name','$Pass','$Mob','$Email','$Address','    $City')     ";

    $B=mysqli_query($conn,$sql);

    if($B){
        echo "Registration Succesfull";
    }else{
        echo "Registration Failed? Try again";
    }
}





?>