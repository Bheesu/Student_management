<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="list1.css">
</head>

<body>
    <?php
    include("student_corner.php");
    ?>
    <div id="box">
        <table>
            <th>Sr no.</th>
            <th>title</th>
            <th>Description</th>

            <?php


            $conn = mysqli_connect("localhost", "root", "", "student_management");

            // if ($conn) {
            //     echo "connected";
            // } else {
            //     echo "not connected";
            // }

            $query = "select * from add_notice";
            $run = mysqli_query($conn, $query);

            while ($row = mysqli_fetch_assoc($run)) {
                echo "<tr>";
                echo "<td>" . $row["id"]  . "</td>";
                echo "<td>" . $row["Tilte"]  . "</td>";
                echo "<td>" . $row["Description"] . "</td>";

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