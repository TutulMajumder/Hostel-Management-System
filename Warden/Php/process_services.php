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
    // Handle query failure (if any)
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
    else {
        $sql = "UPDATE services
               SET assign_date = ?, `status` = ?, feedback = ?
             WHERE service_id = ?";

        $stmt = $conn->prepare($sql);
        if (!$stmt) {
            $errors = "Database prepare error: " . $conn->error;
            return;
        }
        else
        {
            
        $stmt->bind_param("ssss", $assign_date, $status, $feedback, $service_id);

        if ($stmt->execute()) {
            if ($stmt->affected_rows > 0) {
                $success = "Service request updated successfully.";
            } else {
                $errors = "No changes made. Check Service ID.";
            }
        } else {
            $errors = "Database error: " . $stmt->error;
        }
        $stmt->close();
        }
    }
    
}
