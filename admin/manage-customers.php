<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Customers</title>
    <link rel="stylesheet" href="..\admin\css\admin.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
    <style>
        .main-content {
            left: 18rem;
            top: 1.3rem;
            position: relative;
            color: white;
        }
        table{
            background-color: transparent;
            color: white;
            width: 70%;
        }
    </style>
</head>
<body>
    <?php include 'header.php'; ?>
    <div class="main-content">
        <h1>Manage Customers</h1>
        <table border="1">
            <thead>
                <tr>
                    <th>Customer ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>John Doe</td>
                    <td>john@example.com</td>
                    <td>9876543210</td>
                </tr>
            </tbody>
        </table>
    </div>
    <script src="script.js"></script>
</body>
</html>
