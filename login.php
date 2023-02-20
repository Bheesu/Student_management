<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
</head>
<?php
session_start();

?>

<body>
<?php
if($_SESSION['id']!="")
{
    header("location:stu_first.php");
}
else
{



?>
<div class="form-box">
		<div class="header-text">
            <h1>Login</h1>
            

            </div>
            
        <form method="POST" enctype="multipart/form-data">
                <label>Username : </label><br>
                 <input type="text" name="email" placeholder="username" required><br>
                
            
                 <label>Password : </label><br>
                <input type="password" name="pass" placeholder="password" required><br>
                
            
                
                <input type="submit" id="submit" name="submit"><br>
                <a href="Student_registration.php">go to sign up page</a>
                
          
        </form>
 
</div>
    <?php

    // $date= date("l d-m-Y h:i:s A");

    if (isset($_POST['submit'])) {
        $conn = mysqli_connect("localhost", "root", "", "student_management");

        // if ($conn) {
        //     echo "connected";
        // } else {
        //     echo "not connected";
        // }
        $username = $_POST['email'];
        $pass = $_POST['pass'];
        $user = "Admin";
        $password = "Admin123";
        if ($username == $user && $pass == $password) {
            header("location:adminnn/dashboard.php");
        } else {

            $query = "select * from registration where Email='$username' and Password='$pass'";
            $run = mysqli_query($conn, $query);
            $username = strtolower($username);
            $pass = md5($pass);
            $id = "";
            while ($row = mysqli_fetch_assoc($run)) {
                $id = $row["id"];
                $name = $row["First_name"];
            }
            if (!empty($id)) {
                $_SESSION['id'] = $id;
                $_SESSION['First_name'] = $name;
                $_SESSION['username'] = $username;
                header('location:stu_first.php');
                // echo "hello";
            } else {
                echo "username and password are incorrect";
            }
        }
    }
}
    ?>

    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
</body>

</html>