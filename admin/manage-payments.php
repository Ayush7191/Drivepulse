<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Payments</title>
    <link rel="stylesheet" href="..\admin\css\admin.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
    <style>
        .main-content {
            left: 20rem;
            top: 1.3rem;
            position: relative;
            color: white;
        }
        table{
            background-color: transparent;
            color: white;
            width: 65%;
        }
    </style>
</head>
<body>
    <?php include 'header.php'; ?>
    <div class="main-content">
        <h1>Manage Payments</h1>
        <table border="1">
            <thead>
                <tr>
                    <th>Payment ID</th>
                    <th>Customer Name</th>
                    <th>Amount</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>201</td>
                    <td>John Doe</td>
                    <td>₹3000</td>
                    <td>Paid</td>
                </tr>
            </tbody>
        </table>
    </div>
    <script src="script.js"></script>
</body>
</html>
