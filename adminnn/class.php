
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="list.css">
</head>
<?php
include("header.php");
?>
<body>
<div id="box">

    <table>
    <caption class="ref">
    <form method="POST" enctype="multipart/form-data">
        <label>Class</label><select name="class">
            <option>SIXTH</option>
            <option>SEVENTH</option>
            <option>EIGHTH</option>
            <option>NINTH</option>
            <option>TENTH</option>
        </select>
        <input type="submit" name="submit">
        <input type="search" placeholder="search" name="search">
    </form>
    </caption>
    <th>Regitration_id</th>   
    <th>First name</th>
        <th>Last_name</th>
        <!-- <th>Roll_no</th> -->
        <th>Standard</th>
        <th>Gender</th>
        <th>Email</th>
        <th>Father_name</th>
        <th>Mother_name</th>
        <th>Contact_no</th>
        <th>Address</th>
        <th colspan="2">Action</th>
    <?php
 
    if (isset($_POST['submit'])) {
        $conn = mysqli_connect("localhost", "root", "", "student_management");
        $class=$_POST['class'];
        // if ($conn) {
        //     echo "connected";
        // } else {
        //     echo "not connected";
        // }
        $query = "";
        $search = $_POST['search'];
        if($search)
        {   
        $sql = "select * from registration where (First_name like '%$search%') OR (Standard like '%$search%') OR (Gender like '%$search%') OR (id like '%$search%') OR (Email like '%$search%') ";
        $run = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($run)) {
            echo "<tr>";
            echo "<td>". $row["id"]  ."</td>"; 
            echo "<td>". $row["First_name"]  ."</td>";
            echo "<td>". $row["Last_name"] ."</td>";
            // echo "<td>". $row["Roll_no"] ."</td>";
            echo "<td>". $row["Standard"] ."</td>";
            echo "<td>". $row["Gender"] ."</td>";
            echo "<td>". $row["Email"] ."</td>";
            echo "<td>". $row["Father_name"] ."</td>";
            echo "<td>". $row["Mother_name"] ."</td>";
            echo "<td>". $row["Contact_no"] ."</td>";
           echo "<td>". $row["Address"] ."</td>";
            echo "<td><a href='editstudent.php?edit=".$row["id"]."'><button>Edit</button></a></td>";
            echo "<td><a href='deletestudent.php?delete=".$row['id']." ' onclick= 'return confirmation();'><button>Delete</button></a></td>";
            echo "</tr>";
        }
    }
    
        $query = "select * from registration where Standard='$class'";
  
        $run = mysqli_query($conn, $query);

        while ($row = mysqli_fetch_assoc($run)) {
            echo "<tr>";
            echo "<td>". $row["id"]  ."</td>"; 
            echo "<td>". $row["First_name"]  ."</td>";
            echo "<td>". $row["Last_name"] ."</td>";
            // echo "<td>". $row["Roll_no"] ."</td>";
            echo "<td>". $row["Standard"] ."</td>";
            echo "<td>". $row["Gender"] ."</td>";
            echo "<td>". $row["Email"] ."</td>";
            echo "<td>". $row["Father_name"] ."</td>";
            echo "<td>". $row["Mother_name"] ."</td>";
            echo "<td>". $row["Contact_no"] ."</td>";
           echo "<td>". $row["Address"] ."</td>";
            echo "<td><a href='editstudent.php?edit=".$row["id"]."'><button>Edit</button></a></td>";
            echo "<td><a href='deletestudent.php?delete=".$row['id']." ' onclick= 'return confirmation();'><button>Delete</button></a></td>";
            echo "</tr>";
        }
 
    }
    ?>
<?php



?>
    </table>
    <script>
    if (window.history.replaceState) {
      window.history.replaceState(null, null, window.location.href);
    }
    function confirmation()
    {
       let x= confirm("Do you really want to delete this account");
       if(x==true)
       {
            return true;
       }
       else{
            return false;
       }
    }
  </script>
</div>

</body>

</html>