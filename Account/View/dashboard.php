<!DOCTYPE html>
<html>
<head>
    <title>Hostel Management System - Accounts Dashboard</title>
    <link rel="stylesheet" href="../CSS/style3.css">
</head>
<body>
    <header>
        <h1>Hostel Management System</h1>
        <h2>Accounts Dashboard</h2>
    </header>
    <main>
        <div class="dashboard">
            <form action="studentfee.php" method="GET">
                <button type="submit">Student Fee Payment Records</button>
            </form>

            <form action="reminder.php" method="GET">
                <button type="submit">Payment Reminder</button>
            </form>

            <form action="trackpending_due.php" method="GET">
                <button type="submit">Track Pending Dues</button>
            </form>

            <form action="paysalary.php" method="GET">
                <button type="submit">Pay Salary</button>
            </form>

            <form action="expense.php" method="GET">
                <button type="submit">Manage Expenses</button>
            </form>

            <form action="view_notices.php" method="GET">
                <button type="submit">View Notices</button>
            </form>
        </div>
    </main>
    <footer>
        <p>&copy; 2025 Hostel Management System. All Rights Reserved.</p>
    </footer>

</body>
</html>
