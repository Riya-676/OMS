<?php
include("../db.php");   // 👈 Sabse upar laavo

$client_id = 1;
$today = date("Y-m-d");
if(isset($_POST['clock_in'])){

    $time = date("H:i:s");

    $conn->query("INSERT INTO attendance 
        (client_id, date, check_in, status)
        VALUES ('$client_id', '$today', '$time', 'Present')");

    header("Location: ".$_SERVER['PHP_SELF']);
    exit();
}


if(isset($_POST['clock_out'])){

    $time = date("H:i:s");

    $conn->query("UPDATE attendance 
        SET check_out='$time' 
        WHERE client_id='$client_id'
        AND date='$today'
        AND check_out IS NULL
        ORDER BY id DESC
        LIMIT 1");

    header("Location: ".$_SERVER['PHP_SELF']);
    exit();
}


// check if already clocked in today
$checkToday = $conn->query("SELECT * FROM attendance 
                            WHERE client_id='$client_id' 
                            AND date='$today'");

$rowToday = $checkToday->fetch_assoc();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
.clock-btn {
    padding: 6px 14px;
    border: none;
    border-radius: 6px;
    font-weight: 600;
    cursor: pointer;
    margin-right: 10px;
}

.clock-btn.in {
    background: #28a745;
    color: #fff;
}

.clock-btn.out {
    background: #dc3545;
    color: #fff;
}

.done {
    font-weight: 600;
    color: #4a6cf7;
    margin-right: 10px;
}

.clock-section{
    display:inline-block;
    margin-right:15px;
}
</style>

</head>
<body>
    <div class="header">
    <h3><?php echo $pageTitle ?? 'Dashboard'; ?></h3>
    <div class="right">

<?php
$lastEntry = $conn->query("SELECT * FROM attendance
                           WHERE client_id='$client_id'
                           AND date='$today'
                           ORDER BY id DESC
                           LIMIT 1");

$lastRow = $lastEntry->fetch_assoc();
?>

<div class="clock-section">

<?php
if(!$lastRow){ 
?>

    <!-- FIRST CLOCK IN -->
    <form method="POST" style="display:inline;    background: transparent;">
        <button type="submit" name="clock_in" class="clock-btn in">
            Clock In
        </button>
    </form>

<?php
} elseif($lastRow['check_out'] == NULL){
?>

    <!-- CLOCK OUT -->
    <form method="POST" style="display:inline;background: transparent;">
        <button type="submit" name="clock_out" class="clock-btn out">
            Clock Out
        </button>
    </form>

<?php
} else {
?>

    <!-- AFTER CLOCK OUT → SHOW CLOCK IN AGAIN -->
    <form method="POST" style="display:inline;background: transparent;">
        <button type="submit" name="clock_in" class="clock-btn in">
            Clock In
        </button>
    </form>

<?php } ?>

</div>







        <span id="logoutBtn">
            <i class="fa-solid fa-arrow-right-from-bracket"></i>
        </span>
    </div>
</div>
<!-- Logout Modal -->
<div id="logoutModal" class="modal">
  <div class="modal-content">
    <h3>Confirm Logout</h3>
    <p>Are you sure you want to logout?</p>
    <div class="modal-buttons">
      <button class="cancel">Cancel</button>
     <a href="logout.php" class="confirm">Logout</a>
    </div>
  </div>
</div>
<script>
const logoutBtn = document.getElementById("logoutBtn");
const modal = document.getElementById("logoutModal");
const cancelBtn = document.querySelector(".cancel");

logoutBtn.addEventListener("click", () => {
  modal.style.display = "flex";
});

cancelBtn.addEventListener("click", () => {
  modal.style.display = "none";
});

window.addEventListener("click", (e) => {
  if (e.target === modal) {
    modal.style.display = "none";
  }
});
</script>

</body>
</html>