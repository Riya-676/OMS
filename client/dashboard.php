<?php
$pageTitle = "Dashboard";
?>
<?php
include '../db.php';
$pageTitle = "Dashboard";

$client_id = 1; // currently login user id (example)
$today = date("Y-m-d");

// Pending Tasks Count
// Overdue Tasks (automatic)
$pending_query = mysqli_query($conn, "
    SELECT COUNT(*) as total 
    FROM tasks 
    WHERE status != 'Complete'
    AND due_date >= '$today'
");

$pending = mysqli_fetch_assoc($pending_query)['total'];



// Completed Tasks Count
$completed_query = mysqli_query($conn, "
    SELECT COUNT(*) as total 
    FROM tasks 
    WHERE status = 'Complete'
");

$completed = mysqli_fetch_assoc($completed_query)['total'];
// Total Projects Count
$total_project_query = mysqli_query($conn, "
    SELECT COUNT(*) as total 
    FROM projects
");

$total_projects = mysqli_fetch_assoc($total_project_query)['total'];


// Active Projects Count
$active_project_query = mysqli_query($conn, "
    SELECT COUNT(*) as total 
    FROM projects 
    WHERE status = 'Active'
");

$active_projects = mysqli_fetch_assoc($active_project_query)['total'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Dashboard</title>

<!-- CSS FILES -->
<link rel="stylesheet" href="../style.css">
<link rel="stylesheet" href="dashboard.css">

</head>
<body>

<?php include("../includes/sidebar.php"); ?>
<div class="dashboard main">
    <?php include("../includes/header.php"); ?>
 
  <div class="grid content">

    <!-- PROFILE CARD -->
    <div class="card profile-card">
     
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
       <div><span><?php echo $pending; ?></span><p>Pending</p></div>
       <div><span class="green"><?php echo $completed; ?></span><p>Completed</p></div>
      </div>
    </div>

    <!-- PROJECTS -->
   <div class="card">
  <h3>Projects</h3>
  <div class="stats">
    <div>
       <span><?php echo $total_projects; ?></span>
       <p>Total Projects</p>
    </div>

    <div>
       <span class="green"><?php echo $active_projects; ?></span>
       <p>Active</p>
    </div>
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
