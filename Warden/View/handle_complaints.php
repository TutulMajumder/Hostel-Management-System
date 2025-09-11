<!DOCTYPE html>
<html>
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

            <!-- Form to handle complaint actions (above table) -->
            <form action="" method="POST">
                <label for="complaint_id">Complaint ID</label>
                <input type="text" name="complaint_id" id="complaint_id" placeholder="Enter Complaint ID" class="complaint-id-input">

                <label for="status">Status</label>
                <select name="status" id="status" class="status-select">
                    <option value="Pending" selected>Pending</option>
                    <option value="Resolved">Resolved</option>
                    <option value="Escalated">Escalated</option>
                    <option value="Dismissed">Dismissed</option>
                </select>

                <label for="feedback">Feedback</label>
                <textarea name="feedback" id="feedback" class="feedback-textarea" placeholder="Enter feedback..."></textarea>

                <!-- <span class="error"><?php echo $errors; ?></span>
                <span class="success"><?php echo $success; ?></span> -->

                <button type="submit" class="submit-btn">Submit</button>
            </form>

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
                            <th>Feedback</th>
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
                            <td>None</td>
                        </tr>

                        <!-- Example Complaint 2 -->
                        <tr>
                            <td>CMP002</td>
                            <td>STU002</td>
                            <td>Jane Smith</td>
                            <td>Food Quality</td>
                            <td>Food served is cold and tasteless</td>
                            <td class="pending">Pending</td>
                            <td>None</td>
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
