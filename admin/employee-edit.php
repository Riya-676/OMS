<?php
// Default values
$name = "Bhakti Mandaliya";
$email = "bhakti@gmail.com";
$department = "IT";
$status = "Active";
$success = false;

if(isset($_POST['update'])){
    // Assign updated values (UI DEMO)
    $name = $_POST['name'];
    $email = $_POST['email'];
    $department = $_POST['department'];
    $status = $_POST['status'];
    $success = true;
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Edit Employee</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">
  <h3>Edit Employee</h3>

  <?php if($success){ ?>
    <div class="alert alert-success">
      Employee updated successfully (UI Demo)
    </div>
  <?php } ?>

  <form method="post">
    <div class="row">
      <div class="col-md-6 mb-3">
        <label>Name</label>
        <input type="text" name="name" class="form-control" value="<?php echo $name; ?>">
      </div>

      <div class="col-md-6 mb-3">
        <label>Email</label>
        <input type="email" name="email" class="form-control" value="<?php echo $email; ?>">
      </div>
    </div>

    <div class="row">
      <div class="col-md-6 mb-3">
        <label>Department</label>
        <select name="department" class="form-control">
          <option <?php if($department=="IT") echo "selected"; ?>>IT</option>
          <option <?php if($department=="HR") echo "selected"; ?>>HR</option>
          <option <?php if($department=="Marketing") echo "selected"; ?>>Marketing</option>
        </select>
      </div>

      <div class="col-md-6 mb-3">
        <label>Status</label>
        <select name="status" class="form-control">
          <option <?php if($status=="Active") echo "selected"; ?>>Active</option>
          <option <?php if($status=="Inactive") echo "selected"; ?>>Inactive</option>
        </select>
      </div>
    </div>

    <button type="submit" name="update" class="btn btn-primary">
      Update Employee
    </button>
  </form>
</div>

</body>
</html>
