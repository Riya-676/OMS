<?php
$project = "Office Management System";
$department = "IT";
$status = "In Progress";
$success = false;

if(isset($_POST['update'])){
  $project = $_POST['project'];
  $department = $_POST['department'];
  $status = $_POST['status'];
  $success = true;
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Edit Project</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container-fluid">
  <div class="row">

    <?php include 'sidebar.php'; ?>

    <div class="col-md-10 p-4">
      <h3>Edit Project</h3>

      <?php if($success){ ?>
        <div class="alert alert-success">
          Project updated successfully (UI Demo)
        </div>
      <?php } ?>

      <form method="post">

        <div class="mb-3">
          <label>Project Name</label>
          <input type="text" name="project" class="form-control" value="<?php echo $project; ?>">
        </div>

        <div class="mb-3">
          <label>Department</label>
          <select name="department" class="form-control">
            <option <?php if($department=="IT") echo "selected"; ?>>IT</option>
            <option <?php if($department=="HR") echo "selected"; ?>>HR</option>
            <option <?php if($department=="Marketing") echo "selected"; ?>>Marketing</option>
          </select>
        </div>

        <div class="mb-3">
          <label>Status</label>
          <select name="status" class="form-control">
            <option <?php if($status=="In Progress") echo "selected"; ?>>In Progress</option>
            <option <?php if($status=="Completed") echo "selected"; ?>>Completed</option>
            <option <?php if($status=="On Hold") echo "selected"; ?>>On Hold</option>
          </select>
        </div>

        <button type="submit" name="update" class="btn btn-primary">
          Update Project
        </button>
      </form>

    </div>
  </div>
</div>

</body>
</html>
