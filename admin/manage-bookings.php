<?php require_once 'connection.php'; ?>
<?php
$sql = "SELECT * from bookingdata";
$data = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Bookings</title>
    <link rel="stylesheet" href="..\admin\css\admin.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
    <style>
        .main-content {
            left: 17rem;
            top: 1.3rem;
            position: relative;
            color: white;
            overflow-x: auto;
            width: 81vw;
        }

        .table {
            width: 100%;
            overflow-x: scroll;
            white-space: nowrap;
        }
        
        table {
            background-color: transparent;
            color: white;
            width: 100%;
            border-collapse: collapse;
            white-space: nowrap;
            /* Prevents text from wrapping */
        }

        th,
        td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }
        #action-delete{
            color: red;
        }
    </style>
</head>

<body>
    <?php include 'header.php'; ?>
    <div class="main-content">
        <h1>Manage Bookings</h1>
        <div class="table">
            <table border="1">
                <thead>
                    <tr>
                        <th>Booking ID</th>
                        <th>Car</th>
                        <th>pickup</th>
                        <th>pickup_time</th>
                        <th>pickup_date</th>
                        <th>dropat</th>
                        <th>drop_time</th>
                        <th>drop_date</th>
                        <th>Customer Name</th>
                        <th>email</th>
                        <th>phone</th>
                        <th>bookind date</th>
                        <th></th>
                    </tr>
                </thead>
                <?php
                // Fetch each row of car data
                while ($row = mysqli_fetch_assoc($data)) { ?>
                    <tbody>
                        <tr>
                            <td><?php echo htmlspecialchars($row["id"]); ?></td>
                            <td><?php echo htmlspecialchars($row["car_name"]); ?></td>
                            <td><?php echo htmlspecialchars($row["pickup"]); ?></td>
                            <td><?php echo htmlspecialchars($row["pickup_time"]); ?></td>
                            <td><?php echo htmlspecialchars($row["pickup_date"]); ?></td>
                            <td><?php echo htmlspecialchars($row["dropat"]); ?></td>
                            <td><?php echo htmlspecialchars($row["drop_time"]); ?></td>
                            <td><?php echo htmlspecialchars($row["drop_date"]); ?></td>
                            <td><?php echo htmlspecialchars($row["cu_name"]); ?></td>
                            <td><?php echo htmlspecialchars($row["email"]); ?></td>
                            <td><?php echo htmlspecialchars($row["phone"]); ?></td>
                            <td><?php echo htmlspecialchars($row["book_date"]); ?></td>
                           <td><a id="action-delete" href="deletebooking.php?id=<?php echo $row['id']; ?>" name="Delete">Delete</a></td>
                        </tr>
                    </tbody>
                <?php } ?>
            </table>
        </div>
    </div>
    <script src="script.js"></script>
</body>

</html>