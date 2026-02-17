<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Admin Dashboard</title>

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body{
  background-color:#f4f6f9;
}
.sidebar{
  background:#212529;
  min-height:100vh;
}
.sidebar .nav-item{
  padding:10px;
  color:#fff;
}
.sidebar .nav-item:hover{
  background:#343a40;
  cursor:pointer;
}
.card{
  border-radius:10px;
}
</style>
</head>

<body>

<div class="container-fluid">
  <div class="row">

    <!-- Sidebar -->
    <div class="col-md-2 sidebar text-white">
      <h4 class="text-center py-3">Admin Panel</h4>
      <div class="nav flex-column px-2">
        <div class="nav-item">Dashboard</div>
        <div class="nav-item">Employees</div>
        <div class="nav-item">Departments</div>
        <div class="nav-item">Attendance</div>
        <div class="nav-item">Projects</div>
        <div class="nav-item">Notice Board</div>
      </div>
    </div>

    <!-- Main Content -->
    <div class="col-md-10 p-4">
      <h3>Welcome Admin</h3>
      <p class="text-muted">Office Management System</p>

      <!-- Cards -->
      <div class="row mt-4">

        <div class="col-md-3">
          <div class="card shadow p-3 text-center">
            <h6>Total Employees</h6>
            <h2>25</h2>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card shadow p-3 text-center">
            <h6>Departments</h6>
            <h2>6</h2>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card shadow p-3 text-center">
            <h6>Projects</h6>
            <h2>8</h2>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card shadow p-3 text-center">
            <h6>Pending Tasks</h6>
            <h2>12</h2>
          </div>
        </div>

      </div>

      <!-- Attendance -->
      <div class="row mt-4">
        <div class="col-md-4">
          <div class="card shadow p-3 text-center">
            <h6>Today's Attendance</h6>
            <h2>18</h2>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

</body>
</html>
