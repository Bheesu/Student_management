<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="dashboard.css">
</head>

<body>
    <?php
    include("header.php");
    ?>
    <section>
        <div class="show">
            <div class="tr_stu">
                <h4>Total Registered Student</h4>
                <p>
                <?php
                $conn = mysqli_connect("localhost", "root", "", "student_management");

                // if ($conn) {
                //     echo "connected";
                // } else {
                //     echo "not connected";
                // }
                $query = "select * from registration";
                $run = mysqli_query($conn, $query);
                $row = mysqli_num_rows($run);
          
                if ($row)
                   {
                      echo ("Number of regiestered student : " . $row);
                   }
                ?>
                </p>
            </div>
            <div class="tr_stu">
                <h4>Total Class</h4>
                <p>No. of active class : 5</p>
            </div>
            <div class="tr_stu">
                <h4>Total Teacher</h4>
                <p>
                <?php
                $conn = mysqli_connect("localhost", "root", "", "student_management");

                // if ($conn) {
                //     echo "connected";
                // } else {
                //     echo "not connected";
                // }
                $query = "select * from add_teacher";
                $run = mysqli_query($conn, $query);
                $row = mysqli_num_rows($run);
          
                if ($row)
                   {
                      echo ("Number of teacher : " . $row);
                   }
                ?>
                </p>
            </div>
        </div>
    </section>
    <section>
        <div class="show">
            <div class="tr_stu">
                <h4>Notice</h4>
                <p>
                <?php
                $conn = mysqli_connect("localhost", "root", "", "student_management");

                // if ($conn) {
                //     echo "connected";
                // } else {
                //     echo "not connected";
                // }
                $query = "select * from add_notice";
                $run = mysqli_query($conn, $query);
                $row = mysqli_num_rows($run);
          
                if ($row)
                   {
                      echo ("Number of notice : " . $row);
                   }
                ?>
                </p>
            </div>
            <div class="tr_stu">
                <h4>Report</h4>
                <p> <?php
                $conn = mysqli_connect("localhost", "root", "", "student_management");

                // if ($conn) {
                //     echo "connected";
                // } else {
                //     echo "not connected";
                // }
                $query = "select * from add_report";
                $run = mysqli_query($conn, $query);
                $row = mysqli_num_rows($run);
          
                if ($row)
                   {
                      echo ("Number of Report : " . $row);
                   }
                ?></p>
            </div>
            <div class="tr_stu">
                <h4></h4>
                <p>
              
                </p>
            </div>
        </div>
    </section>
</body>

</html>