<!DOCTYPE html>
<html>
<head>
<title>Admin Dashboard</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
.card:hover{
  transform: scale(1.03);
  transition: 0.3s;
}
</style>
</head>
<body>

<div class="container-fluid">
  <div class="row">

    <?php include 'sidebar.php'; ?>

    <!-- Main Content -->
    <div class="col-md-10 p-4">
      <h3>Welcome Admin</h3>

      <div class="row mt-4 g-4">

        <!-- Employees -->
        <div class="col-md-3">
          <a href="employee-list.php" style="text-decoration:none;">
            <div class="card shadow p-3 text-center">
              <h6>Total Employees</h6>
              <h3>15</h3>
            </div>
          </a>
        </div>

        <!-- Departments -->
        <div class="col-md-3">
          <a href="department-list.php" style="text-decoration:none;">
            <div class="card shadow p-3 text-center">
              <h6>Departments</h6>
              <h3>4</h3>
            </div>
          </a>
        </div>

        <!-- Attendance -->
        <div class="col-md-3">
          <a href="attendance-list.php" style="text-decoration:none;">
            <div class="card shadow p-3 text-center">
              <h6>Today's Attendance</h6>
              <h3>13 / 15</h3>
            </div>
          </a>
        </div>

        <!-- Projects -->
        <div class="col-md-3">
          <a href="project-list.php" style="text-decoration:none;">
            <div class="card shadow p-3 text-center">
              <h6>Projects</h6>
              <h3>6</h3>
            </div>
          </a>
        </div>

        <!-- Notice Board -->
        <!--<div class="col-md-3">
          <a href="notice-board.php" style="text-decoration:none;">
            <div class="card shadow p-3 text-center">
              <h6>Notice Board</h6>
              <h3>3</h3>
            </div>
          </a>
        </div>-->

      </div>
    </div>

  </div>
</div>

</body>
</html>
