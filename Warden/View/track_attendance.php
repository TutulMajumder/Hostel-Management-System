<!DOCTYPE html>
<html>

<head>
    <title>Track Attendance - Hostel Management System</title>
    <link rel="stylesheet" href="../Css/track_attendance.css">
    <link rel="stylesheet" href="../Css/topbar.css">
</head>

<body>

    <!-- Header -->
    <?php include "topbar.php"; ?>

    <!-- Main Content -->
    <main>
        <section id="track-attendance">
            <h2>Track Attendance</h2>
            <div class="student-count">
                Total Active Students for Selected Date: <span class="count">25</span>
            </div>

            <!-- Attendance Entry Form -->
            <form action="" method="POST">
                <label for="attendance_date">Select Date:</label>
                <input type="date" id="attendance_date" name="attendance_date" value="<?php echo date('Y-m-d'); ?>" class="date-input">

                <label for="student_id">Student ID:</label>
                <input type="text" name="student_id" id="student_id" placeholder="Enter Student ID" class="request_input">

                <label for="attendance_status">Status:</label>
                <select name="status" id="attendance_status" class="status-select">
                    <option value="present">Present</option>
                    <option value="absent">Absent</option>
                </select>

                <!-- <span class="error"><?php echo $errors; ?></span>
                <span class="success"><?php echo $success; ?></span> -->

                <button type="submit" class="submit-btn">Submit Attendance</button>
            </form>

            <!-- Attendance Table -->
            <div class="table-container">
                <table class="attendance-table">
                    <thead>
                        <tr>
                            <th>Student ID</th>
                            <th>Name</th>
                            <th>Room No</th>
                            <th>Status</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody id="attendance-table-body">
                        <!-- <?php
                                // // Fetch attendance data from the database
                                // $query = "SELECT * FROM attendance";
                                // $result = $conn->query($query);
                                // if ($result->num_rows > 0) {
                                //     while ($row = $result->fetch_assoc()) {
                                //         echo "<tr>";
                                //         echo "<td>" . $row['student_id'] . "</td>";
                                //         echo "<td>" . $row['fullname'] . "</td>";
                                //         echo "<td>" . $row['room_no'] . "</td>";
                                //         echo "<td>" . $row['status'] . "</td>";
                                //         echo "<td>" . $row['date'] . "</td>";
                                //         echo "</tr>";
                                //     }
                                // } else {
                                //     // If no records are found, display this message
                                //     echo "<tr><td colspan='5'>No attendance records found.</td></tr>";
                                // }
                                ?> -->
                    </tbody>
                </table>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <?php include "footer.php"; ?>

</body>

</html>