<!DOCTYPE html>
<html lang="en">
<head>
    <title>Manage Leave Requests</title>
    <link rel="stylesheet" href="../Css/leave_request.css"> 
    <link rel="stylesheet" href="../Css/topbar.css">
</head>
<body>

    <!-- Header -->
    <?php include "topbar.php"; ?>

    <!-- Main Content -->
    <main>
        <section id="leave-requests">
            <h2>Leave Requests</h2>

            <!-- Table to display leave requests -->
            <div class="table-container">
                <table class="requests-table">
                    <thead>
                        <tr>
                            <th>Student ID</th>
                            <th>Student Name</th>
                            <th>Leave Dates</th>
                            <th>Reason</th>
                            <th>Leave Application</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>STU001</td>
                            <td>John Doe</td>
                            <td>01/12/2025 - 03/12/2025</td>
                            <td>Family Emergency</td>
                            <td><a href="uploads/medical_certificate1.pdf" target="_blank">View File</a></td>
                            <td class="pending">Pending</td>
                            <td>
                                <form action="process_leave_request.php" method="POST">
                                    <input type="hidden" name="leave_id" value="1">
                                    <button type="submit" name="action" value="approve" class="approve-btn">Approve</button>
                                    <button type="submit" name="action" value="reject" class="reject-btn">Reject</button>
                                    <textarea name="feedback" class="feedback" placeholder="Leave your feedback..."></textarea>
                                </form>
                            </td>
                        </tr>

                        <tr>
                            <td>STU002</td>
                            <td>Jane Smith</td>
                            <td>05/12/2025 - 07/12/2025</td>
                            <td>Medical Condition</td>
                            <td><a href="uploads/medical_certificate2.pdf" target="_blank">View File</a></td>
                            <td class="pending">Pending</td>
                            <td>
                                <form action="process_leave_request.php" method="POST">
                                    <input type="hidden" name="leave_id" value="2">
                                    <button type="submit" name="action" value="approve" class="approve-btn">Approve</button>
                                    <button type="submit" name="action" value="reject" class="reject-btn">Reject</button>
                                    <textarea name="feedback" class="feedback" placeholder="Leave your feedback..."></textarea>
                                </form>
                            </td>
                        </tr>

                        <tr>
                            <td>STU003</td>
                            <td>Tom Jones</td>
                            <td>05/12/2025 - 07/12/2025</td>
                            <td>Vacation Leave</td>
                            <td><a href="uploads/medical_certificate3.pdf" target="_blank">View File</a></td>
                            <td class="pending">Pending</td>
                            <td>
                                <form action="process_leave_request.php" method="POST">
                                    <input type="hidden" name="leave_id" value="3">
                                    <button type="submit" name="action" value="approve" class="approve-btn">Approve</button>
                                    <button type="submit" name="action" value="reject" class="reject-btn">Reject</button>
                                    <textarea name="feedback" class="feedback" placeholder="Leave your feedback..."></textarea>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <?php include "footer.php"; ?>

</body>
</html>
