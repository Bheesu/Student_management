<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="list.css">
</head>

<body>
    <?php
    include("header.php");
    ?>
    <div id="box">
        <table>
            <th>Teacher_id</th>
            <th>Name</th>
            <th>Subject</th>
            <th>Email</th>
            <th>Address</th>
            <th colspan="2">Action</th>
            <?php


            $conn = mysqli_connect("localhost", "root", "", "student_management");

            // if ($conn) {
            //     echo "connected";
            // } else {
            //     echo "not connected";
            // }

            $query = "select * from add_teacher";
            $run = mysqli_query($conn, $query);

            while ($row = mysqli_fetch_assoc($run)) {
                echo "<tr>";
                echo "<td>" . $row["id"]  . "</td>";
                echo "<td>" . $row["name"]  . "</td>";
                echo "<td>" . $row["subject"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "<td>" . $row["Address"] . "</td>";
                // echo "<td><a href='editstudent.php?edit=".$row["id"]."'><button>Edit</button></a></td>";
                echo "<td><a href='teacherdelete.php?delete=".$row['id']." ' onclick= 'return confirmation();'><button>Delete</button></a></td>";
                echo "</tr>";
            }


            ?>

        </table>
    </div>
    <script>
    if (window.history.replaceState) {
      window.history.replaceState(null, null, window.location.href);
    }
  </script>
</body>

</html>