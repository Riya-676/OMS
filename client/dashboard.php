<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Dashboard Content</title>
<link rel="stylesheet" href="dashboard.css">
</head>
<body>
<?php
$pageTitle = "Dashboard";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

<?php include("../includes/sidebar.php"); ?>
<div class="dashboard main">
    <?php include("../includes/header.php"); ?>

  <div class="grid content">

    <!-- PROFILE CARD -->
    <div class="card profile-card">
      <img src="https://via.placeholder.com/80">
      <div>
        <h3>Riya Vagadiya</h3>
        <p>Trainee</p>
        <small>Employee Id : EMP129</small>
      </div>
    </div>

    <!-- TASKS -->
    <div class="card">
      <h3>Tasks</h3>
      <div class="stats">
        <div><span>0</span><p>Pending</p></div>
        <div><span class="red">0</span><p>Overdue</p></div>
      </div>
    </div>

    <!-- PROJECTS -->
    <div class="card">
      <h3>Projects</h3>
      <div class="stats">
        <div><span>0</span><p>In Progress</p></div>
        <div><span class="red">0</span><p>Overdue</p></div>
      </div>
    </div>

    <!-- WEEK TIMELOG -->
    <div class="card wide">
      <h3>Week Timelogs</h3>
      <div class="days">
        <span>Mo</span><span>Tu</span><span class="active">We</span>
        <span>Th</span><span>Fr</span><span>Sa</span><span>Su</span>
      </div>
      <p>Duration: 0s <span>Break: 0s</span></p>
    </div>

    <!-- BIRTHDAYS -->
    <div class="card">
      <h3>Birthdays</h3>
      <ul class="list">
        <li>Chintan Vagadiya <span>24 Feb</span></li>
        <li>Kaushik Sondarva <span>27 Feb</span></li>
        <li>Viral Mer <span>04 Mar</span></li>
      </ul>
    </div>

    <!-- MY TASK -->
    <div class="card wide">
      <h3>My Task</h3>
      <table>
        <tr>
          <th>Task#</th>
          <th>Task</th>
          <th>Status</th>
          <th>Due Date</th>
        </tr>
      </table>
    </div>

  </div>

</div>

</body>
</html>
