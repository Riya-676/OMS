<!DOCTYPE html>
<html>
<head>
<title>Leave Requests</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container-fluid">
  <div class="row">

    <?php include 'sidebar.php'; ?>

    <div class="col-md-10 p-4">
      <h3>Leave Requests</h3>

      <a href="leave-apply.php" class="btn btn-primary mb-3">
        Apply Leave
      </a>

      <table class="table table-bordered">
        <thead class="table-dark">
          <tr>
            <th>ID</th>
            <th>Employee</th>
            <th>Leave Type</th>
            <th>Dates</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>1</td>
            <td>Bhakti Mandaliya</td>
            <td>Sick Leave</td>
            <td>15-02-2026 to 16-02-2026</td>
            <td>
              <span class="badge bg-warning">Pending</span>
            </td>
            <td>
              <a href="leave-view.php" class="btn btn-sm btn-info">
                View
              </a>
            </td>
          </tr>

          <tr>
            <td>2</td>
            <td>Rahul Patel</td>
            <td>Casual Leave</td>
            <td>10-02-2026 to 11-02-2026</td>
            <td>
              <span class="badge bg-success">Approved</span>
            </td>
            <td>
              <a href="leave-view.php" class="btn btn-sm btn-info">
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
