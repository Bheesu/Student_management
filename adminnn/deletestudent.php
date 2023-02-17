<?php
    if(isset($_REQUEST['delete']))
    {
        $conn = mysqli_connect("localhost", "root", "", "student_management");
        $id=$_REQUEST['delete'];
        $query = "delete from registration where id='$id'";
        $run = mysqli_query($conn, $query);
        if($run)
        {
            header("location:class.php");
        }
        else{
            echo "your request can't accepted";
        }
    }
    
    ?>