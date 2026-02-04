<?php
$pageTitle = "Leave";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Apply Leave</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

<?php include("../includes/sidebar.php"); ?>

<div class="main">
    <?php include("../includes/header.php"); ?>

    <div class="content">
        <h2>Apply Leave</h2>

        <div class="card" style="max-width:400px;">
            <form method="post">
                <label>Leave Date</label>
                <input type="date"><br><br>

                <label>Reason</label>
                <textarea></textarea><br><br>

                <button>Send Leave</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>
