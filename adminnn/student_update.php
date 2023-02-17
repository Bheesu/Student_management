<?php
session_start();
//echo $_SESSION['username'];

$conn = mysqli_connect("localhost", "root", "", "student_management");
if(isset($_POST['sub']))
{
    $id=$_POST['id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    // $rollno = $_POST['roll_no'];
    $standard = $_POST['std'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $father = $_POST['fathername'];
    $mother = $_POST['mothername'];
    $cont = $_POST['contno'];
    $add = $_POST['add'];
    $update="update registration SET First_name='$fname',Last_name='$lname',Standard='$standard',Gender='$gender',Email='$email',Father_name='$father',Mother_name='$mother',Contact_no='$cont',Address='$add' where id='$id'";
    $run=mysqli_query($conn,$update);
    if($run)
    {
     
        header("location:class.php");
    }
}

?>