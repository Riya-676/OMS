<!DOCTYPE html>
<html>
<head>
<title>Employee List</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container-fluid">
  <div class="row">

    <?php include 'sidebar.php'; ?>

    <div class="col-md-10 p-4">
      <h3>Employee List</h3>

      <a href="employee-add.php" class="btn btn-primary mb-3">
        Add Employee
      </a>

      <table class="table table-bordered">
        <thead class="table-dark">
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Department</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>1</td>
            <td>Bhakti Mandaliya</td>
            <td>IT</td>
            <td>Active</td>
            <td>
              <a href="employee-edit.php" class="btn btn-warning btn-sm">
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
