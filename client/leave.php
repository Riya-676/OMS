<?php
$pageTitle = "Leave";
?>
<?php
include("../db.php");

$client_id = 1; // Riya no id (login system hoy to session ma thi levanu)
// DELETE LEAVE
if(isset($_GET['delete_id'])){
    $delete_id = $_GET['delete_id'];

    $conn->query("DELETE FROM leave_request WHERE id = '$delete_id' AND client_id = '$client_id'");

    header("Location: leave.php");
    exit();
}

if(isset($_POST['add_leave'])){

    $leave_date = $_POST['leave_date'];
    $duration = $_POST['duration'];
    $leave_type = $_POST['leave_type'];
    $paid = $_POST['paid'];
    $reason = "Personal";

    $sql = "INSERT INTO leave_request 
            (client_id, reason, leave_date, duration, leave_type, paid) 
            VALUES 
            ('$client_id','$reason','$leave_date','$duration','$leave_type','$paid')";

    $conn->query($sql);

    header("Location: leave.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Apply Leave</title>
    <link rel="stylesheet" href="../style.css">
    
    <style>
/* Overlay */
.modal {
  display: none;
  position: fixed;
  inset: 0;
  background: rgba(0, 0, 0, 0.65);
  backdrop-filter: blur(4px);
  z-index: 9999;
  align-items: center;
  justify-content: center;
}

.modal.show {
  display: flex;
}


/* Modal Box */
.modal-content {
  background: #1c2746;
  width: 450px;
  max-height: 80vh;
  overflow-y: auto;
  padding: 30px;
  border-radius: 14px;
  box-shadow: 0 20px 40px rgba(0,0,0,0.5);
  position: relative;

  /* 🔥 Hide Scrollbar */
  scrollbar-width: none;       /* Firefox */
  -ms-overflow-style: none;    /* IE/Edge */
}

/* Chrome, Safari */
.modal-content::-webkit-scrollbar {
  display: none;
}

/* Animation */
@keyframes fadeIn {
  from { transform: translateY(-20px); opacity: 0; }
  to { transform: translateY(0); opacity: 1; }
}

/* Close Button */
.close {
  position: absolute;
  right: 20px;
  top: 20px;
  font-size: 22px;
  color: #aaa;
  cursor: pointer;
}

.close:hover {
  color: #fff;
}

/* Title */
.modal-content h2 {
  margin-bottom: 25px;
  font-size: 22px;
  font-weight: 600;
  color: #fff;
}

/* Form Layout */
.modal-content form {
  display: flex;
  flex-direction: column;
  gap: 18px;
}

/* Inputs + Select */
.modal-content input,
.modal-content select {
  padding: 12px 14px;
  border-radius: 8px;
  border: 1px solid #2f3c63;
  background: #0f1a33;
  color: #fff;
  font-size: 14px;
  outline: none;
  transition: 0.2s;
}

.modal-content input:focus,
.modal-content select:focus {
  border-color: #4a6cf7;
  box-shadow: 0 0 0 2px rgba(74,108,247,0.2);
}

/* Submit Button */
.modal-content button {
  margin-top: 10px;
  padding: 12px;
  border: none;
  border-radius: 8px;
  background: #4a6cf7;
  color: #fff;
  font-weight: 600;
  cursor: pointer;
  transition: 0.2s;
}

.modal-content button:hover {
  background: #3557e0;
}
.delete-btn {
  color: #ff4d4d;
  text-decoration: none;
  font-weight: 600;
}

.delete-btn:hover {
  text-decoration: underline;
}

</style>

</head>
<body>

<?php include("../includes/sidebar.php"); ?>

<div class="main">
    <?php include("../includes/header.php"); ?>
     <div class="filter-bar">
        <div class="left-filters">
            <span>Duration</span>
            <span>Start Date To End Date</span>
        </div>

        <div class="search-box">
            <i class="fa fa-search"></i>
            <input type="text" id="leaveSearch" placeholder="Start typing to search">

        </div>

        <div class="filter-btn">
            <i class="fa fa-filter"></i> Filters
        </div>
    </div>
    <div class="content " style="padding-top: 0px;">
    <!-- Top Filter Bar -->
   

    <!-- Action Buttons -->
    <div class="action-bar">
        <div class="btns-container" >
            <button class="btn primary" onclick="openModal()"><i class="fa fa-plus"></i> New Leave</button>
            <!-- <button class="btn secondary"><i class="fa fa-download"></i> Export</button> -->
        </div>
    </div>

    <!-- Table -->
    <div class="table-container">
        <table id="leaveTable">
            <thead>
                <tr>
                    <th>Employee</th>
                    <th>Leave Date</th>
                    <th>Duration</th>
                    <th>Leave Status</th>
                    <th>Leave Type</th>
                    <th>Paid</th>
                    <th>Action</th>
                </tr>
            </thead>

         <tbody>
<?php
$result = $conn->query("SELECT * FROM leave_request WHERE client_id = $client_id ORDER BY id DESC");

while($row = $result->fetch_assoc()){
?>
<tr>
    <td >
        <!-- <img src="https://i.pravatar.cc/40" /> -->
        <div>
            <strong>Riya Vagadiya</strong>
            <small>Trainee</small>
        </div>
    </td>
    <td><?php echo $row['leave_date']; ?></td>
    <td><?php echo $row['duration']; ?></td>
    <td><?php echo $row['status']; ?></td>
    <td><span class="badge"><?php echo $row['leave_type']; ?></span></td>
    <td><?php echo $row['paid']; ?></td>
    <td>
    <a href="leave.php?delete_id=<?php echo $row['id']; ?>" 
       onclick="return confirm('Are you sure you want to delete this leave?')" 
       class="delete-btn">
       Delete
    </a>
</td>

</tr>
<?php } ?>
</tbody>

        </table>

      
      

    </div>
</div>
<!-- Leave Modal -->
<div id="leaveModal" class="modal">
  <div class="modal-content">
    <span class="close" onclick="closeModal()">&times;</span>
    <h2>Add New Leave</h2>

   <form method="POST">

  <label>Leave Date</label>
  <input type="date" name="leave_date" required>

  <label>Duration</label>
  <select name="duration" required>
    <option value="">Select Duration</option>
    <option value="Full Day">Full Day</option>
    <option value="Half Day">Half Day</option>
  </select>

  <label>Leave Type</label>
  <select name="leave_type" required>
    <option value="">Select Type</option>
    <option value="Sick">Sick</option>
    <option value="Casual">Casual</option>
  </select>

  <label>Paid</label>
  <select name="paid" required>
    <option value="">Select Paid</option>
    <option value="Yes">Yes</option>
    <option value="No">No</option>
  </select>

  <button type="submit" name="add_leave">
    Submit Leave
  </button>

</form>

  </div>
</div>


</div>


    <script>
function openModal() {
  document.getElementById("leaveModal").classList.add("show");
  document.body.style.overflow = "hidden";   // background scroll stop
}

function closeModal() {
  document.getElementById("leaveModal").classList.remove("show");
  document.body.style.overflow = "auto";
}

window.onclick = function(event) {
  let modal = document.getElementById("leaveModal");
  if (event.target == modal) {
    closeModal();
  }
}

document.getElementById("leaveSearch").addEventListener("keyup", function() {
    let input = this.value.toLowerCase();
    let table = document.getElementById("leaveTable");
    let rows = table.getElementsByTagName("tr");

    for (let i = 1; i < rows.length; i++) { // 0 is header
        let rowText = rows[i].innerText.toLowerCase();

        if (rowText.includes(input)) {
            rows[i].style.display = "";
        } else {
            rows[i].style.display = "none";
        }
    }
});


</script>

</body>
</html>
