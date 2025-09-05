<?php
$success = "";
$fullname = $student_id = $issue_type = $description = $appointment_date = $emergency = "";
$fullnameErr = $studentIdErr = $issueTypeErr = $descriptionErr = $appointmentErr = $emergencyErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Full Name
    if (empty($_POST["fullname"])) {
        $fullnameErr = "Full Name is required";
    } else {
        $fullname = $_POST["fullname"];
    }

    // Student ID
    if (empty($_POST["student_id"])) {
        $studentIdErr = "Student ID is required";
    } else {
        $student_id = $_POST["student_id"];
    }

    // Health Issue Type
    if (empty($_POST["issue_type"])) {
        $issueTypeErr = "Please select a health issue type";
    } else {
        $issue_type = $_POST["issue_type"];
    }

    // Description
    if (empty($_POST["description"])) {
        $descriptionErr = "Please describe the issue";
    } else {
        $description = $_POST["description"];
    }

    // Appointment Date
    if (empty($_POST["appointment_date"])) {
        $appointmentErr = "Please select a preferred appointment date";
    } else {
        $appointment_date = $_POST["appointment_date"];
    }

    // Emergency
    if (empty($_POST["emergency"])) {
        $emergencyErr = "Please select if it is an emergency";
    } else {
        $emergency = $_POST["emergency"];
    }

    // If no errors → success
    if ($fullnameErr=="" && $studentIdErr=="" && $issueTypeErr=="" && $descriptionErr=="" && $appointmentErr=="" && $emergencyErr=="") {
        $success = "Health request submitted successfully!";
        $fullname = $student_id = $issue_type = $description = $appointment_date = $emergency = "";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Apply for Health</title>
    <link rel="stylesheet" href="../CSS/Header.css">
    <link rel="stylesheet" href="../CSS/Health.css">
</head>
<body>

<?php include 'header.php'; ?> <!-- Reuse header -->

<main class="dashboard">
    <h1>Apply for Health</h1>

    <form method="post" class="health-form">
        <input type="text" name="fullname" placeholder="Full Name" value="<?php echo $fullname; ?>">
        <span class="error"><?php echo $fullnameErr; ?></span><br>

        <input type="text" name="student_id" placeholder="Student ID" value="<?php echo $student_id; ?>">
        <span class="error"><?php echo $studentIdErr; ?></span><br>

        <select name="issue_type">
            <option value="">-- Select Health Issue Type --</option>
            <option value="Fever" <?php if($issue_type=="Fever") echo "selected"; ?>>Fever</option>
            <option value="Injury" <?php if($issue_type=="Injury") echo "selected"; ?>>Injury</option>
            <option value="Checkup" <?php if($issue_type=="Checkup") echo "selected"; ?>>Checkup</option>
            <option value="Other" <?php if($issue_type=="Other") echo "selected"; ?>>Other</option>
        </select>
        <span class="error"><?php echo $issueTypeErr; ?></span><br>

        <textarea name="description" placeholder="Describe your health issue"><?php echo $description; ?></textarea>
        <span class="error"><?php echo $descriptionErr; ?></span><br>

        <label>Preferred Appointment Date:</label><br>

        <input type="date" name="appointment_date" value="<?php echo $appointment_date; ?>">

        <span class="error"><?php echo $appointmentErr; ?></span><br><br>

        <label>Emergency?</label><br><br>
        <label><input type="radio" name="emergency" value="Yes" <?php if($emergency=="Yes") echo "checked"; ?>> Yes</label>
        <label><input type="radio" name="emergency" value="No" <?php if($emergency=="No") echo "checked"; ?>> No</label>
        <span class="error"><?php echo $emergencyErr; ?></span><br><br>

        <input type="submit" value="Submit Request">
    </form>

    <p class="success"><?php echo $success; ?></p>

    <a href="dashboard.php" class="back-btn"> Back to Dashboard</a>
</main>

</body>
</html>
