<?php
$dept_name = "IT";
$status = "Active";
$success = false;

if(isset($_POST['update'])){
  $dept_name = $_POST['dept_name'];
  $status = $_POST['status'];
  $success = true;
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Edit Department</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">
  <h3>Edit Department</h3>

  <?php if($success){ ?>
    <div class="alert alert-success">
      Department updated successfully (UI Demo)
    </div>
  <?php } ?>

  <form method="post">
    <div class="mb-3">
      <label>Department Name</label>
      <input type="text" name="dept_name" class="form-control" value="<?php echo $dept_name; ?>">
    </div>

    <div class="mb-3">
      <label>Status</label>
      <select class="form-control" name="status">
        <option <?php if($status=="Active") echo "selected"; ?>>Active</option>
        <option <?php if($status=="Inactive") echo "selected"; ?>>Inactive</option>
      </select>
    </div>

    <button type="submit" name="update" class="btn btn-primary">
      Update Department
    </button>
  </form>
</div>

</body>
</html>
