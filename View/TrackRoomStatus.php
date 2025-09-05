<?php
$studentID = "";
$status = "";
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["studentID"])) {
        $error = "Student ID cannot be empty";
    } else {
        $studentID = trim($_POST["studentID"]);

        // 🔹 Dummy check (In real projects, you fetch from Database)
        if ($studentID == "23-50158-1") {
            $status = "Approved ";
        } elseif ($studentID == "23-50155-1") {
            $status = "Pending ";
        } elseif ($studentID == "23-50159-1") {
            $status = "Rejected ";
        } else {
            $status = "No application found for this Student ID.";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Track Room Application Status</title>
    <link rel="stylesheet" href="../CSS/Header.css">
    <link rel="stylesheet" href="../CSS/TrackRoom.css"> <!-- External CSS -->
</head>
<body>

<?php include 'header.php'; ?> <!-- Reuse header -->

<main class="dashboard">
    <h1>Track Room Application Status</h1>

    <form method="post" class="status-form">
        <label for="studentID">Student ID:</label>
        <input type="text" name="studentID" id="studentID" value="<?php echo $studentID; ?>">
        <span class="error"><?php echo $error; ?></span><br>

        <input type="submit" value="Check Status">
    </form>

    <?php if (!empty($status)): ?>
        <p class="result"><?php echo $status; ?></p>
    <?php endif; ?>

    <a href="dashboard.php" class="back-btn">Back to Dashboard</a>
</main>

</body>
</html>
