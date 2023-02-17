<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="reg.css">
</head>
<body>

<?php 
include("header.php");
if(isset($_POST['sub']))
{
    $conn = mysqli_connect("localhost", "root", "", "student_management");
    $name=$_POST['name'];
    $subj=$_POST['subj'];
    $email=$_POST['email'];
    $add=$_POST['add'];
    if (!empty($name && $subj && $email && $add)) {
        if (preg_match("/^[a-zA-Z-' ]*$/", $name)) {
          if (preg_match("/^[a-zA-Z-' ]*$/", $subj)) {
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
             
                $query = "insert into add_teacher(name,subject,email,Address)values('$name','$subj','$email','$add')";
                $run = mysqli_query($conn, $query);
  
                if ($run) {
                  echo "<h2> Save successfully </h2>";
  
            
                } else {
                  echo "<h2>You are already registered user.</h2>";
                }
              
            } else {
              echo "<h2> invalid E-mail</h2> ";
            }
          } else {
            echo "<h2> Only letters and white space allowed </h2> ";
          }
        } else {
          echo "<h2> Only letters and white space allowed </h2> ";
        }
      } else {
        echo "<h2> All information are required</h2> ";
      }

}
?>
    <div class="form_registration">
    <form method="POST" enctype="multipart/form-data">
        <label>Name</label>
        <input type="text" name="name" placeholder="Name">
        <label>Subject</label>
        <input type="text" name="subj" placeholder="Subject">
        <label>Email</label>
        <input type="text" name="email" placeholder="Email">
        <label>Address</label>
        <input type="text" name="add" placeholder="Address">
        <input type="submit" name="sub">
    </form>
    </div>
    <script>
    if (window.history.replaceState) {
      window.history.replaceState(null, null, window.location.href);
    }
  </script>
</body>
</html>