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
                            <input type="email" class="form-control" name="email" placeholder="Enter Your Email">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="pass" placeholder="Enter Your Password">
                        </div>
                        <div class="mb-2 d-flex w-100">
                            <input type="submit" class="btn btn-info" name="login" Value="Login">
                        </div>
                        <hr>
                        <h3>Dont have Account ? <a href="register.php">Register here</a></h3>

                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>


<?php  

include('db.php');


if(isset($_POST['login'])){

    $Email=$_POST['email'];
    $Pass=$_POST['pass'];



    $sql="SELECT register FROM user WHERE email='$Email' AND pass='$Pass'     ";

    $A=mysqli_query($conn,$sql);

    if($A){
        echo "Login Succesfull";
    }else{
        echo "Login Failed? Try again";
    }
}





?>