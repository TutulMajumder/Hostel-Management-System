<!DOCTYPE html>
<html lang="en">
<head>
    <title>Manage Services - Hostel Management System</title>
    <link rel="stylesheet" href="../Css/handle_services.css"> <!-- CSS for this module -->
    <link rel="stylesheet" href="../Css/topbar.css"> <!-- Header CSS -->
</head>
<body>

    <!-- Header -->
    <?php include "topbar.php"; ?>

    <!-- Main Content -->
    <main>
        <section id="manage-services">
            <h2>Manage Service Requests</h2>

            <div class="table-container">
                <table class="services-table">
                    <thead>
                        <tr>
                            <th>Request ID</th>
                            <th>Student ID</th>
                            <th>Student Name</th>
                            <th>Service Type</th>
                            <th>Requested Date</th>
                            <th>Assign New Date</th>
                            <th>Status</th>
                            <th>Feedback</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Example Service 1 -->
                        <tr>
                            <td>SVC001</td>
                            <td>STU001</td>
                            <td>John Doe</td>
                            <td>Room Cleaning</td>
                            <td>2025-09-05</td>
                            <td><input type="date" name="assign_date" class="date-input"></td>
                            <td>
                                <select name="status" class="status-select">
                                    <option value="Pending" selected>Pending</option>
                                    <option value="Scheduled">Scheduled</option>
                                    <option value="Completed">Completed</option>
                                </select>
                            </td>
                            <td>
                                <textarea name="feedback" class="feedback-textarea" placeholder="Enter feedback..."></textarea>
                            </td>
                            <td>
                                <button type="submit" class="submit-btn">Save</button>
                            </td>
                        </tr>

                        <!-- Example Service 2 -->
                        <tr>
                            <td>SVC002</td>
                            <td>STU002</td>
                            <td>Jane Smith</td>
                            <td>Wi-Fi Issue</td>
                            <td>2025-09-06</td>
                            <td><input type="date" name="assign_date" class="date-input"></td>
                            <td>
                                <select name="status" class="status-select">
                                    <option value="Pending" selected>Pending</option>
                                    <option value="Scheduled">Scheduled</option>
                                    <option value="Completed">Completed</option>
                                </select>
                            </td>
                            <td>
                                <textarea name="feedback" class="feedback-textarea" placeholder="Enter feedback..."></textarea>
                            </td>
                            <td>
                                <button type="submit" class="submit-btn">Save</button>
                            </td>
                        </tr>

                        <!-- Add more service requests as needed -->
                    </tbody>
                </table>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <?php include "footer.php"; ?>

</body>
</html>
