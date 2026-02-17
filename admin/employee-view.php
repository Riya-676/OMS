<!DOCTYPE html>
<html>
<head>
<title>Employee List</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">
  <h3>Employee List</h3>

  <a href="employee-add.php" class="btn btn-success mb-3">+ Add Employee</a>

  <table class="table table-bordered table-hover">
    <thead class="table-dark">
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Department</th>
        <th>Status</th>
        <th>Action</th>
      </tr>
    </thead>

    <tbody>
      <tr>
        <td>EMP001</td>
        <td>Bhakti Mandaliya</td>
        <td>bhakti@gmail.com</td>
        <td>IT</td>
        <td><span class="badge bg-success">Active</span></td>
        <td>
          <a href="employee-edit.php" class="btn btn-warning btn-sm">Edit</a>
          <button class="btn btn-danger btn-sm">Delete</button>
        </td>
      </tr>

      <tr>
        <td>EMP002</td>
        <td>Riya Vagadiya</td>
        <td>riya@gmail.com</td>
        <td>HR</td>
        <td><span class="badge bg-secondary">Inactive</span></td>
        <td>
          <a href="employee-edit.php" class="btn btn-warning btn-sm">Edit</a>
          <button class="btn btn-danger btn-sm">Delete</button>
        </td>
      </tr>
    </tbody>
  </table>
</div>

</body>
</html>
