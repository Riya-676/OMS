
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
.sidebar {
  background:#29304c !important;
}
.sidebar a {
  color: #ffffff;
  text-decoration: none;
}
.sidebar a:hover {
  background: #374151;
}
.submenu a {
  padding-left: 30px;
  font-size: 14px;
}
.nav-link{
  display: flex;
  gap:10px;
  align-items: center;
}
.nav-item {
  border-bottom: 1px solid #252d37;
      padding: 12px 15px;
}
</style>

<div class="col-md-2 sidebar text-white min-vh-100 p-0">
  <h4 class="text-center py-3" style="boder-bottom:1px solid #252d37">Admin Panel</h4>

  <ul class="nav flex-column">

    <li class="nav-item">
      <a href="dashboard.php" class="nav-link text-white"><i class="fa-solid fa-house"></i>Dashboard</a>
    </li>

    <li class="nav-item">
      <a href="employee-list.php" class="nav-link text-white"><i class="fa-regular fa-circle-user"></i>Employees</a>
    </li>

    <!-- HR Module -->
    <li class="nav-item">
      <a class="nav-link text-white" data-bs-toggle="collapse" href="#hrMenu">
          <i class="fa-solid fa-users"></i>
        HR
      </a>
      <div class="collapse" id="hrMenu">
      <ul class="nav flex-column submenu">
      <li class="nav-item">
        <a href="leave-list.php" class="nav-link text-white">Leaves</a>
      </li>
      <li class="nav-item">
        <a href="attendance-list.php" class="nav-link text-white">Attendance</a>
      </li>
    </ul>
  </div>
</li>


    <li class="nav-item">
      <a href="department-list.php" class="nav-link text-white"><i class="fa-solid fa-building-user"></i>Departments</a>
    </li>

    <li class="nav-item">
      <a href="project-list.php" class="nav-link text-white"><i class="fa-solid fa-list-check"></i>Projects</a>
    </li>

    <!--<li class="nav-item">
      <a href="notice-board.php" class="nav-link text-white">Notice Board</a>
    </li>-->

  </ul>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
