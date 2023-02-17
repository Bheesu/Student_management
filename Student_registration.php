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

  session_start();
  if (isset($_POST['sub'])) {
    $conn = mysqli_connect("localhost", "root", "", "student_management");
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    //$rollno = $_POST['roll_no'];
    $standard = $_POST['std'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $father = $_POST['fathername'];
    $mother = $_POST['mothername'];
    $cont = $_POST['contno'];
    $ad = $_POST['add'];
    $pas = $_POST['pass'];
    $date = $_POST['time'];
    $cpass = $_POST['cpass'];
    $email = strtolower($email);
    if (!empty($fname && $lname && $email && $standard && $gender && $father && $mother && $cont)) {
      if (preg_match("/^[a-zA-Z-' ]*$/", $fname)) {
        if (preg_match("/^[a-zA-Z-' ]*$/", $lname)) {
          if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            if ($pas === $cpass) {
              $query = "insert into registration(First_name,Last_name,Standard,Gender,Email,Father_name,Mother_name,Contact_no,Address,time,password)values('$fname','$lname','$standard','$gender','$email','$father','$mother','$cont','$ad','$date','$pas')";
              $run = mysqli_query($conn, $query);

              if ($run) {
                echo "<h2> sign up successfully </h2>";

                header("location:home.php");
              } else {
                echo "<h2>You are already registered uer.</h2>";
              }
            } else {
              echo "Password doesn't match. Please confirm your password Again.";
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
  <section>
    <div class="form_registration">
      <form method="POST" enctype="multipart/form-data">

        <table>
          <caption>Student Registration</caption>
          <tr>
            <td> <label>First Name : </label></td>
            <td> <input type="text" name="fname" placeholder="First Name" required></td>
          </tr>

          <tr>
            <td><label>Last Name : </label></td>
            <td><input type="text" name="lname" placeholder="Last Name" required></td>
          </tr>

          <!-- <tr>
            <td><label>Roll no : </label></td>
            <td><input type="number" name="roll_no" placeholder="Roll no" required></td>
          </tr> -->

          <tr>
            <td><label>Standard : </label></td>
            <td><select name="std">
                <option>SIXTH</option>
                <option>SEVENTH</option>
                <option>EIGHTH</option>
                <option>NINTH</option>
                <option>TENTH</option>
              </select></td>
          </tr>

          <tr>
            <td><label>Gender : </label></td>
            <td><input type="radio" name="gender" value="male">MALE <input type="radio" name="gender" value="Female">FEMALE </td>
          </tr>

          <tr>
            <td> <label>Email : </label></td>
            <td><input type="text" name="email" required></td>
          </tr>
        </table>
        <table>
          <caption>Parents/Guardian's Details</caption>
          <tr>
            <td> <label>Father Name : </label></td>
            <td> <input type="text" name="fathername" placeholder="Father Name" required></td>
          </tr>

          <tr>
            <td><label>Mother Name : </label></td>
            <td><input type="text" name="mothername" placeholder="Mother Name" required></td>
          </tr>

          <tr>
            <td><label>Contact no : </label></td>
            <td><input type="number" name="contno" placeholder="cantact_number" required></td>
          </tr>
          <tr>
            <td><label>Address: </label></td>
            <td><textarea col="4" rows="3" name="add"></textarea></td>
          </tr>
          <tr>
            <td> <label>SET PASSWORD</label></td>
            <td><input type="password" name="pass"></td>
          </tr>

          <tr>
            <td> <label>CONFIRM PASSWORD</label></td>
            <td><input type="password" name="cpass"></td>
          </tr>

          <tr>
            <td> <input type="hidden" value="<?php echo date("l d-m-Y h:i:s A"); ?>" name="time"></td>
            <td><input type="submit" name="sub"></td>
          </tr>






        </table>
      </form>
    </div>
    
  </section>
  <script>
    if (window.history.replaceState) {
      window.history.replaceState(null, null, window.location.href);
    }
  </script>
</body>

</html>