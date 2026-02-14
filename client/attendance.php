<?php
include("../includes/header.php");
include("../includes/sidebar.php");
include("../db.php");

$client_id = 1;

$current_month = date('m');
$current_year  = date('Y');

$query = "SELECT * FROM attendance 
          WHERE client_id = '$client_id'
          AND MONTH(date) = '$current_month'
          AND YEAR(date) = '$current_year'
          ORDER BY date DESC";

$result = $conn->query($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
    
</head>
<body>

<div class="main">

<div class="content">

<div class="attendance-card">

    <div class="attendance-header">
        <h3>Attendance Records</h3>
    </div>

    <div class="attendance-table">
        <table>
            <thead>
                <tr>
                    <th>Employee</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Check In</th>
                    <th>Check Out</th>
                    <th>Total Hours</th>
                </tr>
            </thead>
            <tbody>
                <?php if($result && $result->num_rows > 0){
                    while($row = $result->fetch_assoc()){ ?>
                    
                    <tr>
                        <td>
                            <strong>Riya Vagadiya</strong><br>
                            <small>Trainee</small>
                        </td>

                        <td><?php echo $row['date']; ?></td>

                        <td>
                            <?php if($row['status'] == 'Present'){ ?>
                                <span class="badge present">Present</span>
                            <?php } elseif($row['status'] == 'Absent'){ ?>
                                <span class="badge absent">Absent</span>
                            <?php } else { ?>
                                <span class="badge leave">On Leave</span>
                            <?php } ?>
                        </td>

                        <td><?php echo $row['check_in']; ?></td>
                        <td><?php echo $row['check_out']; ?></td>
                        <td>
<?php
if($row['check_in'] && $row['check_out']){
    $in  = strtotime($row['check_in']);
    $out = strtotime($row['check_out']);
    $hours = round(($out - $in) / 3600, 2);
    echo $hours . " hrs";
} else {
    echo "-";
}
?>
</td>

                    </tr>

                <?php } } else { ?>
                    <tr>
                        <td colspan="5" style="text-align:center;">No attendance found</td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

</div>

</div>
</div>

</body>
</html>

