<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="header">
    <h3><?php echo $pageTitle ?? 'Dashboard'; ?></h3>
    <div class="right">
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