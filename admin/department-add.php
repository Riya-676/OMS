<!DOCTYPE html>
<html>
<head>
<title>Add Department</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">
  <h3>Add Department</h3>

  <?php if(isset($_POST['submit'])){ ?>
    <div class="alert alert-success">
      Department added successfully (UI Demo)
    </div>
  <?php } ?>

  <form method="post">
    <div class="mb-3">
      <label>Department Name</label>
      <input type="text" name="dept_name" class="form-control" placeholder="Enter Department Name">
    </div>

    <div class="mb-3">
      <label>Status</label>
      <select class="form-control" name="status">
        <option>Active</option>
        <option>Inactive</option>
      </select>
    </div>

    <button type="submit" name="submit" class="btn btn-primary">
      Add Department
    </button>
  </form>
</div>

</body>
</html>
