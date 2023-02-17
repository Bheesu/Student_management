<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="firstpage.css">
    
    <script src="jquery-3.6.3.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".submenu").click(function() {
                $(".subm").toggle();
            });
        });
    </script>
</head>
<body>
    <?php
    // include("menu.php");
    session_start();
    
    ?>
     <div id="dashboard">
<!-- <h2>Student Panal</h2>
<select>
    <option>2</option>
    <option>i</option>
    <option>j</option>
</select> -->
<ul>

    <li class="submenu">Home<span class="sub"></span>
        <ul>
            <li class="subm"><a href="stu_first.php">Home</a></li>

        </ul>
    </li>
   
    <li class="submenu">Report<span class="sub"></span>
        <ul>
            <li class="subm"><a href="add_report.php">Add Report</a></li>
        </ul>
    </li>

    <li class="submenu">Notice Board<span class="sub"></span>
        <ul>

           
            <li class="subm"><a href="notice_list.php">notice list</a></li>
        </ul>
    </li>
    </li>

</ul>
</div>
    <div id="identy">
    <?php
     if(empty($_SESSION['First_name']) || $_SESSION['First_name'] == '')
     {
         header("location:login.php");
     }
     else
     {
echo "<h2 class='name'>" . $_SESSION['First_name'] . "</h2>";
     }
?>
<button><a href="logout.php">Logout</a></button>
    </div>
    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }

    </script>
</body>
</html>