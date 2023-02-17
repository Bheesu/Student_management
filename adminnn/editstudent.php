<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="edit.css">
</head>
<?php
include("header.php");
?>
<body>
    <?php
    if(isset($_REQUEST['edit']))
    {
        $conn = mysqli_connect("localhost", "root", "", "student_management");
        $id=$_REQUEST['edit'];
        $query = "select * from registration where id='$id'";
        $run = mysqli_query($conn, $query);

        while ($row = mysqli_fetch_assoc($run)) {

            $id= $row["id"] ;
            $fname= $row["First_name"] ;
            $lname= $row["Last_name"];
            // $rollno= $row["Roll_no"];
            $std= $row["Standard"];

            $gen=$row["Gender"];
            $gender=trim($gen);
          $gender=strtolower($gen);
      
            $email= $row["Email"];
            $father= $row["Father_name"];
            $mother= $row["Mother_name"];
            $contt= $row["Contact_no"];
           $add= $row["Address"];

        }

    }
    
    ?>
    <section>
    <div class="form_registration">
      <form action="student_update.php" method="POST" enctype="multipart/form-data">
        <h2>Student Registration</h2>
        <table>
          <tr>
            
            <td> <label>First Name : </label></td>
            <td> <input type="text" name="fname" value="<?php echo $fname; ?>" required></td>
          </tr>

          <tr>
            <td><label>Last Name : </label></td>
            <td><input type="text" name="lname" value="<?php echo $lname; ?>"  required></td>
          </tr>

          <tr>
            <!-- <td><label>Roll no : </label></td> -->
            <td><input type="hidden" name="id" value="<?php echo $id; ?>"  required></td>
          </tr>

          <tr>
            <td><label>Standard : </label></td>
            <td><select name="std">
          <option value="<?php echo $std; ?>"><?php echo $std; ?></option>
                <option value="SIXTH">SIXTH</option>
                <option value="SEVENTH">SEVENTH</option>
                <option value="EIGHTH">EIGHTH</option>
                <option value="NINTH">NINTH</option>
                <option value="TENTH">TENTH</option>
              </select></td>
          </tr>

          <tr>
            <td><label>Gender : </label></td>
            <td><input type="radio" name="gender" value="male" <?php echo ($gender=='male')? 'checked': ""; ?>>MALE
             <input type="radio" name="gender" value="female" <?php echo ($gender=='female')? 'checked': ""; ?>>FEMALE </td>
          </tr>

          <tr>
            <td> <label>Email : </label></td>
            <td><input type="text" name="email" value="<?php echo $email; ?>" required></td>
          </tr>

        </table>

        <h2>Parents/Guardian's Details</h2>
        <table>
          <tr>
            <td> <label>Father Name : </label></td>
            <td> <input type="text" name="fathername" value="<?php echo $father; ?>"  required></td>
          </tr>

          <tr>
            <td><label>Mother Name : </label></td>
            <td><input type="text" name="mothername" value="<?php echo $mother; ?>"  required></td>
          </tr>

          <tr>
            <td><label>Contact no : </label></td>
            <td><input type="number" name="contno" value="<?php echo $contt; ?>"  required></td>
          </tr>
          <tr>
            <td><label>Address: </label></td>
            <td><textarea name="add"  col="4" rows="3" ><?php echo $add; ?></textarea></td>
          </tr>
          <tr>
            <td></td>
            <td> <input type="submit" id="submit" name="sub"></td>
          </tr>
        </table>
  </section>

</body>
</html>