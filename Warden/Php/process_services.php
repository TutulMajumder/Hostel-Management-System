<?php
include '../db/config.php';

// Initialize the variable in case of no results
$service_requests = [];

$query = "SELECT * FROM services";
$result = $conn->query($query);

if ($result) {
    if ($result->num_rows > 0) {
        // Store data into an array for later use
        while ($row = $result->fetch_assoc()) {
            $service_requests[] = $row;
        }
    }
} else {
    echo "Error: " . $conn->error;
}


$errors = '';
$success = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $service_id    = trim($_POST['service_id'] ?? '');
    $assign_date = trim($_POST['assign_date'] ?? '');
    $status        = trim($_POST['status'] ?? 'Pending');
    $feedback      = trim($_POST['feedback'] ?? '');

    $allowed_status = ['Pending', 'Scheduled', 'Completed'];
    if ($service_id === '' || $assign_date === '' || $feedback === '' || !in_array($status, $allowed_status, true)) {
        $errors = "All fields are required and Status must be 'Scheduled', or 'Completed'.";
        return;
    }
    // // Validate request id format
    // if (!preg_match('/^SVC\d{3,}$/', $service_id)) {
    //     $errors = "Invalid Service ID format (use like SVC001).";
    //     return;
    // }
    if (strlen($feedback) > 500) {
        $errors = "Feedback must not exceed 500 characters.";
        return;
    } else {
        $service_query = "SELECT COUNT(*) as count From services WHERE service_id=?";
        $service_stmt = $conn->prepare($service_query);
        $service_stmt->bind_param("s", $service_id);
        $service_stmt->execute();
        $check_result = $service_stmt->get_result();
        $row = $check_result->fetch_assoc();
        $service_stmt->close();
        if ($row['count'] == 0) {
            $errors = "Service ID not Found.Please Enter a valid Service ID.";
        } else {
            $sql = "UPDATE services
               SET assign_date = ?, `status` = ?, feedback = ?
             WHERE service_id = ?";

            $stmt = $conn->prepare($sql);
            if (!$stmt) {
                $errors = "Database prepare error: " . $conn->error;
                return;
            } else {

                $stmt->bind_param("ssss", $assign_date, $status, $feedback, $service_id);

                if ($stmt->execute()) {
                    if ($stmt->affected_rows > 0) {
                        $success = "Service request updated successfully.";
                    }
                    header("Location: " . $_SERVER['PHP_SELF']); // redirect to the same page
                    exit;
                } else {
                    $errors = "Database error: " . $stmt->error;
                }
                $stmt->close();
            }
        }
    }
}
