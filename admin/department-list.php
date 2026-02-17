<!DOCTYPE html>
<html>
<head>
<title>Department List</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">
  <h3>Department List</h3>

  <table class="table table-bordered table-striped mt-3">
    <thead class="table-dark">
      <tr>
        <th>ID</th>
        <th>Department Name</th>
        <th>Status</th>
        <th>Action</th>
      </tr>
    </thead>

    <tbody>
      <tr>
        <td>1</td>
        <td>IT</td>
        <td>Active</td>
        <td>
          <a href="department-edit.php" class="btn btn-sm btn-warning">Edit</a>
        </td>
      </tr>

      <tr>
        <td>2</td>
        <td>HR</td>
        <td>Active</td>
        <td>
          <a href="department-edit.php" class="btn btn-sm btn-warning">Edit</a>
        </td>
      </tr>

      <tr>
        <td>3</td>
        <td>Marketing</td>
        <td>Inactive</td>
        <td>
          <a href="department-edit.php" class="btn btn-sm btn-warning">Edit</a>
        </td>
      </tr>
    </tbody>
  </table>
</div>

</body>
</html>
