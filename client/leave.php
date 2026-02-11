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
    <!-- Top Filter Bar -->
    <div class="filter-bar">
        <div class="left-filters">
            <span>Duration</span>
            <span>Start Date To End Date</span>
        </div>

        <div class="search-box">
            <i class="fa fa-search"></i>
            <input type="text" placeholder="Start typing to search">
        </div>

        <div class="filter-btn">
            <i class="fa fa-filter"></i> Filters
        </div>
    </div>

    <!-- Action Buttons -->
    <div class="action-bar">
        <div class="btns-container">
            <button class="btn primary"><i class="fa fa-plus"></i> New Leave</button>
            <button class="btn secondary"><i class="fa fa-download"></i> Export</button>
        </div>
    </div>

    <!-- Table -->
    <div class="table-container">
        <table>
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
                <tr>
                    <td class="employee-cell">
                        <img src="https://i.pravatar.cc/40" />
                        <div>
                            <strong>Riya Vagadiya</strong>
                            <span>Trainee</span>
                        </div>
                    </td>
                    <td>05-02-2026</td>
                    <td>Half Day</td>
                    <td><span class="status pending"></span> Pending</td>
                    <td><span class="badge">Casual</span> First Half</td>
                    <td>Yes</td>
                    <td><button class="action-btn">⋮</button></td>
                </tr>
            </tbody>
        </table>

        <!-- Pagination -->
        <div class="pagination">
            <span>Showing 1 to 1 of 1 entries</span>
            <div>
                <button>Previous</button>
                <button class="active">1</button>
                <button>Next</button>
            </div>
        </div>

    </div>
</div>

</div>

</body>
</html>
