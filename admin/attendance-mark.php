<!DOCTYPE html>
<html>
<head>
<title>Mark Attendance</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container-fluid">
  <div class="row">

    <?php include 'sidebar.php'; ?>

    <div class="col-md-10 p-4">
      <h3>Mark Attendance</h3>

      <?php if(isset($_POST['submit'])){ ?>
        <div class="alert alert-success">
          Attendance marked successfully (UI Demo)
        </div>
      <?php } ?>

      <form method="post">
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
              <td>
                <select name="status[]" class="form-control">
                  <option>Present</option>
                  <option>Absent</option>
                </select>
              </td>
            </tr>
            <tr>
              <td>2</td>
              <td>Rahul Patel</td>
              <td>
                <select name="status[]" class="form-control">
                  <option>Present</option>
                  <option>Absent</option>
                </select>
              </td>
            </tr>
          </tbody>
        </table>

        <button type="submit" name="submit" class="btn btn-primary">
          Submit Attendance
        </button>
      </form>

    </div>
  </div>
</div>

</body>
</html>
