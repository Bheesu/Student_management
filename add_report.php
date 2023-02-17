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

  include("student_corner.php");
  if (isset($_POST['sub'])) {
    $conn = mysqli_connect("localhost", "root", "", "student_management");
    $title = $_POST['title'];
    $desc = $_POST['desc'];



    $query = "insert into add_report(Tilte,Description)values('$title','$desc')";
    $run = mysqli_query($conn, $query);

    if ($run) {
      echo "<h2> Save successfully </h2>";
    }
  }
  ?>
  <div class="form_registration">
    <h2>Report or Feedback</h2>
    <form method="POST" enctype="multipart/form-data">

      <label>Title</label><br>
      <input type="text" name="title" placeholder="Title"><br>
      <label>Description</label><br>
      <textarea cols="30" rows="30" name="desc"></textarea>
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