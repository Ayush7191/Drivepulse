
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="..\admin\css\admin.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
    <style>
        .dashboard-container{
            left: 17rem;
            top: 1.3rem;
            position: relative;
            overflow-y: auto;
        }
    </style>
</head>

<body>
    <?php include 'header.php';?>

    <div class="dashboard-container">
        <header class="dashboard-header">
            <h1>Dashboard</h1>
            <div class="user-info">
                <img src="images/user.png" alt="User Profile" class="user-avatar">
                <span>Abram Schleifer</span>
            </div>
        </header>

        <main class="dashboard-main">
            <!-- Top Stats Section -->
            <section class="stats">
                <div class="stat">
                    <h3>Total Revenue</h3>
                    <p>$23</p>
                </div>
                <div class="stat">
                    <h3>New Bookings</h3>
                    <p>1</p>
                </div>
                <div class="stat">
                    <h3>Rented Cars</h3>
                    <p>Units</p>
                </div>
                <div class="stat">
                    <h3>Available Cars</h3>
                    <p>Units</p>
                </div>
            </section>

            <!-- Charts Section -->
            <section class="charts">
                <div class="chart">
                    <h3>Earnings Summary</h3>
                    <canvas id="earningsChart"></canvas>
                </div>
                <div class="chart">
                    <h3>Rent Status</h3>
                    <canvas id="rentStatusChart"></canvas>
                </div>
            </section>

            <!-- Bookings Overview -->
            <section class="bookings">
                <h3>Bookings Overview</h3>
                <canvas id="bookingsChart"></canvas>
            </section>

            <!-- Table Section -->
            <section class="bookings-table">
                <h3>Car Bookings</h3>
                <table>
                    <thead>
                        <tr>
                            <th>Booking ID</th>
                            <th>Booking Date</th>
                            <th>Client Name</th>
                            <th>Car Model</th>
                            <th>Plan</th>
                            <th>Payment</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Example Row -->
                        <tr>
                            <td>BK-WZ1001</td>
                            <td>Aug 1, 2028</td>
                            <td>Alice Johnson</td>
                            <td>Toyota Corolla</td>
                            <td>2 Days</td>
                            <td>$50</td>
                            <td>Returned</td>
                        </tr>
                    </tbody>
                </table>
            </section>
        </main>
    </div>

    <script src="script.js"></script>
</body>

</html>