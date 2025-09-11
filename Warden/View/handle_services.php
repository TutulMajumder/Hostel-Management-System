<?php
include "../Php/process_services.php";
?>
<!DOCTYPE html>
<html>

<head>
    <title>Manage Services - Hostel Management System</title>
    <link rel="stylesheet" href="../Css/handle_services.css">
    <link rel="stylesheet" href="../Css/topbar.css">
</head>

<body>

    <!-- Header -->
    <?php include "topbar.php"; ?>

    <!-- Main Content -->
    <main>
        <section id="manage-services">
            <h2>Manage Service Requests</h2>

            <form action="" method="POST">
                <label>Service Id</label>
                <input type="text" name="service_id" placeholder="Enter Complaint ID" class="request_input">
                <label>Assigned Date</label>
                <input type="date" name="assign_date" class="date-input">
                <label>Status</label>
                <select name="status" class="status-select">
                    <option value="Pending" selected>Pending</option>
                    <option value="Scheduled">Scheduled</option>
                    <option value="Completed">Completed</option>
                </select>
                <label>Feedback</label>
                <textarea name="feedback" class="feedback-textarea" placeholder="Enter feedback..."></textarea>
                <span class="error"><?php echo $errors; ?></span>
                <span class="success"><?php echo $success; ?></span>
                <button type="submit" class="submit-btn">Save</button>
            </form>
            <div class="table-container">
                <table class="services-table">
                    <thead>
                        <tr>
                            <th>Service ID</th>
                            <th>Student ID</th>
                            <th>Student Name</th>
                            <th>Service Type</th>
                            <th>Preferred Date</th>
                            <th>Assigned Date</th>
                            <th>Status</th>
                            <th>Feedback</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (!empty($service_requests)) {
                            foreach ($service_requests as $request) : ?>
                                <tr>
                                    <td><?php echo $request['service_id']; ?></td>
                                    <td><?php echo $request['student_id']; ?></td>
                                    <td><?php echo $request['student_name']; ?></td>
                                    <td><?php echo $request['service_type']; ?></td>
                                    <td><?php echo $request['preferred_date']; ?></td>
                                    <td><?php echo $request['assign_date']; ?></td>
                                    <td>
                                        <?php
                                        // Apply appropriate classes based on status
                                        $status_class = '';
                                        switch ($request['status']) {
                                            case 'Pending':
                                                $status_class = 'status-pending';
                                                break;
                                            case 'Scheduled':
                                                $status_class = 'status-scheduled';
                                                break;
                                            case 'Completed':
                                                $status_class = 'status-completed';
                                                break;
                                        }
                                        ?>
                                        <span class="<?php echo $status_class; ?>"><?php echo $request['status']; ?></span>
                                    </td>
                                    <td><?php echo $request['feedback']; ?></td>
                                </tr>
                        <?php endforeach;
                        } else {
                            echo "<tr><td colspan='9'>No service requests found.</td></tr>";
                        }
                        ?>
                    </tbody>


                </table>
            </div>
        </section>
    </main>


    <!-- Footer -->
    <?php include "footer.php"; ?>

</body>

</html>