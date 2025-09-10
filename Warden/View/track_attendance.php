<!DOCTYPE html>
<html lang="en">
<head>
    <title>Track Attendance - Hostel Management System</title>
    <link rel="stylesheet" href="../Css/topbar.css">
    <link rel="stylesheet" href="../Css/track_attendance.css">
</head>
<body>

    <!-- Header -->
    <?php include "topbar.php"; ?>

    <!-- Main Content -->
    <main>
        <section id="track-attendance">
            <h2>Track Attendance</h2>

            <!-- Month Selector -->
            <div class="month-selector">
                <label for="month">Select Month:</label>
                <select name="month" id="month">
                    <option value="2025-09">September 2025</option>
                    <option value="2025-08">August 2025</option>
                    <option value="2025-07">July 2025</option>
                    <!-- Add more months as needed -->
                </select>
            </div>

            <!-- Student Count -->
            <div class="student-count">
                Total Active Students for September 2025: <span class="count">25</span>
            </div>

            <!-- Table to display attendance -->
            <div class="table-container">
                <table class="attendance-table">
                    <thead>
                        <tr>
                            <th>Student ID</th>
                            <th>Name</th>
                            <th>Room No</th>
                            <th>Check-in Date</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Example Active Student -->
                        <tr>
                            <td>STU001</td>
                            <td>John Doe</td>
                            <td>101</td>
                            <td>01-09-2025</td>
                            <td class="active">Active</td>
                            <td>
                                <button class="mark-inactive-btn">Mark Inactive</button>
                            </td>
                        </tr>

                        <!-- Example Inactive Student -->
                        <tr>
                            <td>STU002</td>
                            <td>Jane Smith</td>
                            <td>102</td>
                            <td>01-08-2025</td>
                            <td class="inactive">Inactive</td>
                            <td>
                                <button class="mark-inactive-btn" >Mark Inactive</button>
                            </td>
                        </tr>

                        <!-- Add more students as needed -->
                    </tbody>
                </table>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <?php include "footer.php"; ?>

</body>
</html>
