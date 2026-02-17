<!DOCTYPE html>
<html>
<head>
<title>Apply Leave</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container-fluid">
  <div class="row">

    <?php include 'sidebar.php'; ?>

    <div class="col-md-10 p-4">
      <h3>Apply Leave</h3>

      <?php if(isset($_POST['submit'])){ ?>
        <div class="alert alert-success">
          Leave applied successfully (UI Demo)
        </div>
      <?php } ?>

      <form method="post">

        <div class="row">
          <div class="col-md-6 mb-3">
            <label>Employee Name</label>
            <input type="text" class="form-control" placeholder="Employee Name">
          </div>

          <div class="col-md-6 mb-3">
            <label>Leave Type</label>
            <select class="form-control">
              <option>Casual Leave</option>
              <option>Sick Leave</option>
              <option>Paid Leave</option>
            </select>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 mb-3">
            <label>From Date</label>
            <input type="date" class="form-control">
          </div>

          <div class="col-md-6 mb-3">
            <label>To Date</label>
            <input type="date" class="form-control">
          </div>
        </div>

        <div class="mb-3">
          <label>Reason</label>
          <textarea class="form-control" rows="3"></textarea>
        </div>

        <button type="submit" name="submit" class="btn btn-primary">
          Apply Leave
        </button>
      </form>

    </div>
  </div>
</div>

</body>
</html>
