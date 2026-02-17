<!DOCTYPE html>
<html>
<head>
<title>Attendance Records</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container-fluid">
  <div class="row">

    <?php include 'sidebar.php'; ?>

    <div class="col-md-10 p-4">
      <h3>Attendance Records</h3>

      <table class="table table-bordered mt-3">
        <thead class="table-dark">
          <tr>
            <th>Date</th>
            <th>Total Present</th>
            <th>Total Absent</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>15-02-2026</td>
            <td>13</td>
            <td>2</td>
            <td>
              <a href="attendance-view.php" class="btn btn-sm btn-info">
                View
              </a>
            </td>
          </tr>
          <tr>
            <td>14-02-2026</td>
            <td>12</td>
            <td>3</td>
            <td>
              <a href="attendance-view.php" class="btn btn-sm btn-info">
                View
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
