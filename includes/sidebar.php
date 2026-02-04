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
    <a href="dashboard.php">
        <i class="fa-solid fa-house"></i> Dashboard
    </a>

        <li class="menu-item">
            <a href="leave.php">HR</a>
        </li>

        <li class="menu-item has-submenu">
            <a href="javascript:void(0)" onclick="toggleWork()">
                Work
                <span id="arrow">▾</span>
            </a>

            <ul class="submenu" id="workMenu">
                <li><a href="projects.php">Projects</a></li>
                <li><a href="tasks.php">Tasks</a></li>
                <li><a href="timesheet.php">Timesheet</a></li>
            </ul>
        </li>

        <li class="menu-item"><a href="#">Finance</a></li>
        <li class="menu-item"><a href="#">Tickets</a></li>
        <li class="menu-item"><a href="#">Events</a></li>

    </ul>
</div>
<script>
function toggleWork() {
    const menu = document.getElementById("workMenu");
    const arrow = document.getElementById("arrow");

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
