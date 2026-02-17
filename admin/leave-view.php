<?php
$status = "Pending";
$success = false;

if(isset($_POST['approve'])){
  $status = "Approved";
  $success = true;
}

if(isset($_POST['reject'])){
  $status = "Rejected";
  $success = true;
}
?>

<!DOCTYPE html>
<html>
<head>
<title>View Leave</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container-fluid">
  <div class="row">

    <?php include 'sidebar.php'; ?>

    <div class="col-md-10 p-4">
      <h3>Leave Details</h3>

      <?php if($success){ ?>
        <div class="alert alert-success">
          Leave status updated (UI Demo)
        </div>
      <?php } ?>

      <table class="table table-bordered w-50">
        <tr>
          <th>Employee</th>
          <td>Bhakti Mandaliya</td>
        </tr>
        <tr>
          <th>Leave Type</th>
          <td>Sick Leave</td>
        </tr>
        <tr>
          <th>Dates</th>
          <td>15-02-2026 to 16-02-2026</td>
        </tr>
        <tr>
          <th>Reason</th>
          <td>Fever</td>
        </tr>
        <tr>
          <th>Status</th>
          <td>
            <?php if($status=="Pending"){ ?>
              <span class="badge bg-warning">Pending</span>
            <?php } elseif($status=="Approved"){ ?>
              <span class="badge bg-success">Approved</span>
            <?php } else { ?>
              <span class="badge bg-danger">Rejected</span>
            <?php } ?>
          </td>
        </tr>
      </table>

      <form method="post">
        <button type="submit" name="approve" class="btn btn-success">
          Approve
        </button>
        <button type="submit" name="reject" class="btn btn-danger">
          Reject
        </button>
      </form>

    </div>
  </div>
</div>

</body>
</html>
