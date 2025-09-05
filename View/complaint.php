<?php
$success = "";
$fullname = $student_id = $category = $details = "";
$fullnameErr = $studentIdErr = $categoryErr = $detailsErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Full Name validation
    if (empty($_POST["fullname"])) {
        $fullnameErr = "Full Name is required";
    } else {
        $fullname = $_POST["fullname"];
    }

    // Student ID validation
    if (empty($_POST["student_id"])) {
        $studentIdErr = "Student ID is required";
    } else {
        $student_id = $_POST["student_id"];
    }

    // Complaint category validation
    if (empty($_POST["category"])) {
        $categoryErr = "Please select a category";
    } else {
        $category = $_POST["category"];
    }

    // Complaint details validation
    if (empty($_POST["details"])) {
        $detailsErr = "Please provide complaint details";
    } else {
        $details = $_POST["details"];
    }

    // If no errors → success
    if ($fullnameErr=="" && $studentIdErr=="" && $categoryErr=="" && $detailsErr=="") {
        $success = "Complaint submitted successfully!";
        $fullname = $student_id = $category = $details = "";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Submit Complaints</title>
    <link rel="stylesheet" href="../CSS/Header.css">
    <link rel="stylesheet" href="../CSS/Complaint.css">
</head>
<body>

<?php include 'header.php'; ?> <!-- Reuse header -->

<main class="dashboard">
    <h1>Submit Complaints</h1>

    <form method="post" class="complaint-form" >
        <input type="text" name="fullname" placeholder="Full Name" value="<?php echo $fullname; ?>">
        <span class="error"><?php echo $fullnameErr; ?></span><br>

        <input type="text" name="student_id" placeholder="Student ID" value="<?php echo $student_id; ?>">
        <span class="error"><?php echo $studentIdErr; ?></span><br>

        <select name="category">
            <option value="">-- Select Category --</option>
            <option value="Room" <?php if($category=="Room") echo "selected"; ?>>Room</option>
            <option value="Mess" <?php if($category=="Mess") echo "selected"; ?>>Mess</option>
            <option value="Health" <?php if($category=="Health") echo "selected"; ?>>Health</option>
            <option value="Maintenance" <?php if($category=="Maintenance") echo "selected"; ?>>Maintenance</option>
            <option value="Other" <?php if($category=="Other") echo "selected"; ?>>Other</option>
        </select>
        <span class="error"><?php echo $categoryErr; ?></span><br>

        <textarea name="details" placeholder="Complaint Details"><?php echo $details; ?></textarea>
        <span class="error"><?php echo $detailsErr; ?></span><br>

        

        <input type="submit" value="Submit Complaint">
    </form>

    <p class="success"><?php echo $success; ?></p>

    <a href="dashboard.php" class="back-btn">Back to Dashboard</a>
</main>

</body>
</html>
