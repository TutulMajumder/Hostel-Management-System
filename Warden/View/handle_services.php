<!DOCTYPE html>
<html lang="en">
<head>
    <title>Maintenance & Services - Hostel Management System</title>
    <link rel="stylesheet" href="../Css/handle_services.css">
    <link rel="stylesheet" href="../Css/topbar.css">
</head>
<body>

    <!-- Header -->
    <?php include "topbar.php"; ?>

    <!-- Main Content -->
    <main>
        <section id="handle-services">
            <h2>Maintenance & Services Requests</h2>

            <div class="table-container">
                <table class="services-table">
                    <thead>
                        <tr>
                            <th>Request ID</th>
                            <th>Student ID</th>
                            <th>Full Name</th>
                            <th>Service Type</th>
                            <th>Details</th>
                            <th>Requested Date</th>
                            <th>Assigned Date</th>
                            <th>Status</th>
                            <th>Notes</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Example Request -->
                        <tr>
                            <td>SVC001</td>
                            <td>STU001</td>
                            <td>John Doe</td>
                            <td>Room Cleaning</td>
                            <td>Bathroom needs cleaning</td>
                            <td>2025-09-03</td>
                            <td>
                                <input type="date" name="assigned_date" value="">
                            </td>
                            <td class="pending">Pending</td>
                            <td>
                                <textarea class="notes" placeholder="Add comment or reason..."></textarea>
                            </td>
                            <td>
                                <button class="assign-btn">Assign Date</button>
                                <button class="complete-btn">Mark Completed</button>
                            </td>
                        </tr>

                        <tr>
                            <td>SVC002</td>
                            <td>STU002</td>
                            <td>Jane Smith</td>
                            <td>Wi-Fi Issue</td>
                            <td>No internet in room</td>
                            <td>2025-09-04</td>
                            <td>
                                <input type="date" name="assigned_date" value="">
                            </td>
                            <td class="pending">Pending</td>
                            <td>
                                <textarea class="notes" placeholder="Add comment or reason..."></textarea>
                            </td>
                            <td>
                                <button class="assign-btn">Assign Date</button>
                                <button class="complete-btn">Mark Completed</button>
                            </td>
                        </tr>

                        <!-- Add more requests here -->
                    </tbody>
                </table>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <?php include "footer.php"; ?>

</body>
</html>
