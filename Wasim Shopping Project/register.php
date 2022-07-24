<?php
    include 'config.php';

    error_reporting(0);

    session_start();

    if(isset($_SESSION['firstname'])) {
        header("location: home.php");
    }
    if(isset($_POST['submit'])) {
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $email = $_POST["email"];
        $address = $_POST["address"];
        $password = md5($_POST["password"]);
        $cpassword = md5($_POST["cpassword"]);
        if($password == $cpassword) {
            $sql = "SELECT * FROM shopping WHERE email='$email'";
            $result = mysqli_query($con, $sql);
            if(!$result->num_rows > 0) {
                $sql = "INSERT INTO `shopping` (firstname, lastname, email, address, password) 
                VALUES ('$firstname', '$lastname', '$email', '$address', '$password')";
                $result = mysqli_query($con, $sql);
                if($result) {
                    header("location: home.php");
                    echo "<span style='color: #fff; background-color: green; text-align: cneter; padding: 30px 10px'>User Registration is successfully Complated</span>";
                    $firstname = "";
                    $lastname = "";
                    $email = "";
                    $address = "";
                    $_POST["password"] = "";
                    $_POST["cpassword"] = "";
                }
                else {
                     echo "<span style='color: #fff; background-color: red; text-align: cneter; padding: 30px 10px'>Something Wrong Went.</span>";
                }
            }
            else {
                echo "<span style='color: #fff; background-color: red; text-align: cneter; padding: 30px 10px'>Email Already Exists.</span>";
            }
        }
        else {
            echo "<span style='color: #fff; background-color: red; text-align: cneter; padding: 30px 10px'>Password Not Matched.</span>";
        }
    } 
       
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./image/AFG1.jpg">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>Registration Form Parts</title>
</head>
<body>
<div class="col-lg-12 col-md-12 col-sm-12 main">
   <div class="col-lg-3 col-md-3 col-sm-12">
        <div class="login-email" >
            <form action="" method="post">
            <h2 class="login-text">register</h2>
                <div class="form-group">
                    <input type="text" name="firstname" class="form-control firstname" placeholder="First Name" value="<?php echo $_POST["firstname"]; ?>" requried />
                </div>
                <div class="form-group">
                    <input type="text" name="lastname" class="form-control lastname" placeholder="Last Name" value="<?php echo $_POST["lastname"]; ?>" requried />
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control email" placeholder="Email Address" value="<?php echo $_POST["email"]; ?>" requried />
                </div>
                <div class="form-group">
                    <input type="text" name="address" class="form-control address" placeholder="Address" value="<?php echo $_POST["address"]; ?>" requried>
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control password" placeholder="Password" value="<?php echo $_POST["password"]; ?>" requried />
                </div>
                <div class="form-group">
                    <input type="password" name="cpassword" placeholder="Enter Your Re-password"  class="form-control cpassword" value="<?php echo $_POST["cpassword"]; ?>" required>
                </div> 
                <div class="form-group">
                    <button name="submit" class="btn">Register</button>
                </div>
                <p class="login-register-text">Have an Account<a href="index.php"> Login Here!!!</a></p>
            </form>
        </div>
   </div>
   <div class="col-lg-9 col-md-9 col-sm-12"></div>
</div>
</body>
</html>
