<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include("connection.php");

    if(isset($_POST['btn_Signup'])){
        $username = $_POST['name'];
        $useremail = $_POST['email'];
        $userpassword = $_POST['password'];

        $insertquery = "INSERT into user(name ,email,password) values('$username', '$useremail','$userpassword')";

        $finalwork = mysqli_query($db_connect, $insertquery);   
    }
    ?>

    <h1>Registration Form</h1>
    <form method = "post">
    <input type="text" placeholder = "username" name = "name" ><br><br>
    <input type="text"  placeholder = "email" name = "email" ><br><br>
    <input type="text"  placeholder = "password" name = "password" ><br><br>
    <input type="submit" value = "login" name = "btn_Signup">
<!-- 
    <h2>Login Form</h2>
      <input type="text"  placeholder = "email" name = "email" ><br><br>
    <input type="text"  placeholder = "password" name = "password" ><br><br>
     <input type="submit" value = "login" name = "btn_login"> -->
</form>
</body>
</html>