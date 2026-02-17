<!DOCTYPE html>
<html>
<head>
<title>Project List</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container-fluid ">
  <div class="row">

    <?php include 'sidebar.php'; ?>

    <div class="col-md-10 p-4">
      <h3>Projects</h3>

      <a href="project-add.php" class="btn btn-primary mb-3">
        Add Project
      </a>

      <table class="table table-bordered">
        <thead class="table-dark">
          <tr>
            <th>ID</th>
            <th>Project Name</th>
            <th>Department</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>1</td>
            <td>Office Management System</td>
            <td>IT</td>
            <td>In Progress</td>
            <td>
              <a href="project-edit.php" class="btn btn-warning btn-sm">
                Edit
              </a>
            </td>
          </tr>

          <tr>
            <td>2</td>
            <td>HR Portal</td>
            <td>HR</td>
            <td>Completed</td>
            <td>
              <a href="project-edit.php" class="btn btn-warning btn-sm">
                Edit
              </a>
            </td>
          </tr>
        </tbody>
      </table>

    </div>
  </div>
</div>

</body>
</html>
