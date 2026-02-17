<!DOCTYPE html>
<html>
<head>
<title>View Attendance</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container-fluid">
  <div class="row">

    <?php include 'sidebar.php'; ?>

    <div class="col-md-10 p-4">
      <h3>Attendance Details</h3>

      <table class="table table-bordered mt-3">
        <thead class="table-dark">
          <tr>
            <th>ID</th>
            <th>Employee Name</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Bhakti Mandaliya</td>
            <td class="text-success">Present</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Rahul Patel</td>
            <td class="text-danger">Absent</td>
          </tr>
        </tbody>
      </table>

    </div>
  </div>
</div>

</body>
</html>
