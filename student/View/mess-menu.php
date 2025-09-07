<?php
// No form validation needed because students only view the menu
$success = "";
$feedback = "";
$feedbackErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["feedback"])) {
        $feedbackErr = "Feedback cannot be empty";
    } else {
        $feedback = $_POST["feedback"];
        $success = "Thank you for your feedback!";
        $feedback = ""; // Clear textarea after success
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Mess Menu</title>
    <link rel="stylesheet" href="../CSS/Header.css">
    <link rel="stylesheet" href="../CSS/MessMenu.css">
</head>
<body>

<?php include 'header.php'; ?> <!-- Reuse header -->

<main class="dashboard">
    <h1>Weekly Mess Menu</h1>

    <table class="menu-table">
        <tr>
            <th>Day</th>
            <th>Breakfast</th>
            <th>Lunch</th>
            <th>Dinner</th>
        </tr>
        <tr>
            <td>Monday</td>
            <td>Paratha & Egg</td>
            <td>Rice, Chicken Curry, Salad</td>
            <td>Rice, Fish Curry, Vegetables</td>
        </tr>
        <tr>
            <td>Tuesday</td>
            <td>Bread & Jam</td>
            <td>Rice, Egg, Dal</td>
            <td>Rice, Chicken Curry, Salad</td>
        </tr>
        <tr>
            <td>Wednesday</td>
            <td>Khichuri</td>
            <td>Rice, Fish Curry, Vegetables</td>
            <td>Rice, Egg Curry, Dal</td>
        </tr>
        <tr>
            <td>Thursday</td>
            <td>Paratha & Vegetable</td>
            <td>Rice, Chicken Curry, Salad</td>
            <td>Rice, Fish Curry, Dal</td>
        </tr>
        <tr>
            <td>Friday</td>
            <td>Bread & Egg</td>
            <td>Rice, mutton Curry , Salad</td>
            <td>Rice, Chicken Curry, Vegetables</td>
        </tr>
        <tr>
            <td>Saturday</td>
            <td>Poori & Chola</td>
            <td>Rice, Fish Curry, Dal</td>
            <td>Rice, Egg Curry, Salad</td>
        </tr>
        <tr>
            <td>Sunday</td>
            <td>Khichuri & Egg</td>
            <td>Rice, Chicken Curry, Vegetables</td>
            <td>Rice, mutton Curry, Dal</td>
        </tr>

        
    </table>

    <h2>Feedback</h2>
    <form method="post" class="feedback-form">
        <textarea name="feedback" placeholder="Please add more fruits..."><?php echo $feedback; ?></textarea>
        <span class="error"><?php echo $feedbackErr; ?></span><br>
        <input type="submit" value="Submit Feedback">
    </form>

    <p class="success"><?php echo $success; ?></p>

    <a href="dashboard.php" class="back-btn"> Back to Dashboard</a>
</main>

</body>
</html>
