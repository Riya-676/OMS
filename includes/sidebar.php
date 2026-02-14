<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Sidebar</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>

<body>
    <div class="sidebar">

    <div class="profile">
        <span class="dot"></span>
        <p>Riya Vagadiya</p>
    </div>

 <ul class="menu">

    <li class="menu-item">
        <a href="dashboard.php">
            <i class="fa-solid fa-house"></i> Dashboard
        </a>
    </li>

   <li class="menu-item has-submenu">
        <a href="javascript:void(0)" onclick="toggleHR()">
            <i class="fa-solid fa-users"></i>
            <span>HR</span>
            <span class="arrow" id="hrArrow">▾</span>
        </a>

        <ul class="submenu" id="hrMenu">
            <li><a href="leave.php">Leaves</a></li>
            <li><a href="attendance.php">Attendance</a></li>
          
            <li><a href="appreciation.php">Appreciation</a></li>
        </ul>
    </li>

    <li class="menu-item has-submenu">
        <a href="javascript:void(0)" onclick="toggleWork()">
            <i class="fa-solid fa-briefcase"></i>
            Work
            <span id="arrow">▾</span>
        </a>

        <ul class="submenu" id="workMenu">
            <li><a href="projects.php">Projects</a></li>
            <li><a href="tasks.php">Tasks</a></li>
           
        </ul>
    </li>

    <!-- <li class="menu-item"><a href="#"><i class="fa-solid fa-dollar-sign"></i>Finance</a></li> -->
    <li class="menu-item"><a href="timesheet.php"><i class="fa-solid fa-calendar"></i>Timesheet</a></li>
  
</ul>

</div>

<script>
function toggleHR() {
    const menu = document.getElementById("hrMenu");
    const arrow = document.getElementById("hrArrow");

    if (menu.style.display === "block") {
        menu.style.display = "none";
        arrow.style.transform = "rotate(0deg)";
    } else {
        menu.style.display = "block";
        arrow.style.transform = "rotate(180deg)";
    }
}

function toggleWork() {
    const menu = document.getElementById("workMenu");
    const arrow = document.getElementById("workArrow");

    if (menu.style.display === "block") {
        menu.style.display = "none";
        arrow.style.transform = "rotate(0deg)";
    } else {
        menu.style.display = "block";
        arrow.style.transform = "rotate(180deg)";
    }
}



</script>
</body>
</html>
