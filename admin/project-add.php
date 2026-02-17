<!DOCTYPE html>
<html>
<head>
<title>Add Project</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container-fluid">
  <div class="row">

    <?php include 'sidebar.php'; ?>

    <div class="col-md-10 p-4">
      <h3>Add Project</h3>

      <?php if(isset($_POST['submit'])){ ?>
        <div class="alert alert-success">
          Project added successfully (UI Demo)
        </div>
      <?php } ?>

      <form method="post">

        <div class="row">
          <div class="col-md-6 mb-3">
            <label>Project Name</label>
            <input type="text" class="form-control" placeholder="Enter Project Name">
          </div>

          <div class="col-md-6 mb-3">
            <label>Department</label>
            <select class="form-control">
              <option>IT</option>
              <option>HR</option>
              <option>Marketing</option>
            </select>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 mb-3">
            <label>Start Date</label>
            <input type="date" class="form-control">
          </div>

          <div class="col-md-6 mb-3">
            <label>End Date</label>
            <input type="date" class="form-control">
          </div>
        </div>

        <div class="mb-3">
          <label>Status</label>
          <select class="form-control">
            <option>In Progress</option>
            <option>Completed</option>
            <option>On Hold</option>
          </select>
        </div>

        <button type="submit" name="submit" class="btn btn-primary">
          Add Project
        </button>
      </form>

    </div>
  </div>
</div>

</body>
</html>
