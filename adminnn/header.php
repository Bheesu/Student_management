<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="header1.css">
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
    <header>
        <nav id="a">
            <h2>Admin Panal</h2>
            <button><a href="logout.php">Logout</a></button>
        </nav>
    </header>

    <div id="dashboard">

        <ul>
            <li class="submenu">Dashboard<span class="sub"></span>
                <ul>
                    <li class="subm"><a href="dashboard.php">Dashboard</a></li>
                </ul>
            </li>
            <li class="submenu">Class<span class="sub"></span>
                <ul>
                    <li class="subm"><a href="class.php">Student List</a></li>

                </ul>
            </li>
            </li>
            <li class="submenu">Teachers<span class="sub"></span>
                <ul>
                    <li class="subm"><a href="add_teacher.php">Add new Teacher</a></li>
                    <li class="subm"><a href="teacherlist.php">Teachers list</a></li>
                </ul>
            </li>

            <li class="submenu">Notice Board<span class="sub"></span>
                <ul>

                    <li class="subm"><a href="add_notice.php">Add notice</a></li>
                    <li class="subm"><a href="notice_list.php">Notice list</a></li>
                </ul>
            </li>

            <li class="submenu">Report<span class="sub"></span>
                <ul>
                    <li class="subm"><a href="reportlist.php">Repoet list</a></li>
                </ul>
            </li>
        </ul>
    </div>

</body>

</html>