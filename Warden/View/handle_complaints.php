<!DOCTYPE html>
<html lang="en">
<head>
    <title>Handle Complaints - Hostel Management System</title>
    <link rel="stylesheet" href="../Css/handle_complaints.css"> <!-- Link to the CSS -->
    <link rel="stylesheet" href="../Css/topbar.css">
</head>
<body>

    <!-- Header -->
    <?php include "topbar.php"; ?>

    <!-- Main Content -->
    <main>
        <section id="handle-complaints">
            <h2>Handle Complaints</h2>

            <!-- Table to display complaints -->
            <div class="table-container">
                <table class="complaints-table">
                    <thead>
                        <tr>
                            <th>Complaint ID</th>
                            <th>Student ID</th>
                            <th>Student Name</th>
                            <th>Complaint Category</th>
                            <th>Complaint Details</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Example Complaint 1 -->
                        <tr>
                            <td>CMP001</td>
                            <td>STU001</td>
                            <td>John Doe</td>
                            <td>Room Condition</td>
                            <td>Leaky faucet in the bathroom</td>
                            <td class="pending">Pending</td>
                            <td>
                                <form action="process_complaint.php" method="POST">
                                    <input type="hidden" name="complaint_id" value="CMP001">
                                    <input type="hidden" name="student_id" value="STU001">
                                    <select name="action" class="action-select">
                                        <option value="resolved">Resolved</option>
                                        <option value="escalated">Escalated</option>
                                        <option value="pending">Pending Investigation</option>
                                        <option value="dismissed">Dismissed</option>
                                    </select>
                                    <textarea name="feedback" class="feedback" placeholder="Leave your feedback..."></textarea>
                                    <button type="submit" name="submit" class="submit-btn">Submit</button>
                                </form>
                            </td>
                        </tr>

                        <!-- Example Complaint 2 -->
                        <tr>
                            <td>CMP002</td>
                            <td>STU002</td>
                            <td>Jane Smith</td>
                            <td>Food Quality</td>
                            <td>Food served is cold and tasteless</td>
                            <td class="pending">Pending</td>
                            <td>
                                <form action="process_complaint.php" method="POST">
                                    <input type="hidden" name="complaint_id" value="CMP002">
                                    <input type="hidden" name="student_id" value="STU002">
                                    <select name="action" class="action-select">
                                        <option value="resolved">Resolved</option>
                                        <option value="escalated">Escalated</option>
                                        <option value="pending">Pending Investigation</option>
                                        <option value="dismissed">Dismissed</option>
                                    </select>
                                    <textarea name="feedback" class="feedback" placeholder="Leave your feedback..."></textarea>
                                    <button type="submit" name="submit" class="submit-btn">Submit</button>
                                </form>
                            </td>
                        </tr>

                        <!-- Add more complaints as needed -->
                    </tbody>
                </table>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <?php include "footer.php"; ?>

</body>
</html>
