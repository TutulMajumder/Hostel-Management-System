<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Notice - Hostel Management System</title>
    <link rel="stylesheet" href="../Css/topbar.css">
    <link rel="stylesheet" href="../Css/post_notice.css">
</head>
<body>

    <!-- Header -->
    <?php include "topbar.php"; ?>

    <!-- Main Content -->
    <main>
        <section id="post-notice">
            <h2>Post a Notice</h2>

            <form action="process_notice.php" method="POST" enctype="multipart/form-data" class="notice-form">

                <!-- Notice Title -->
                <label for="notice_title">Notice Title:</label>
                <input type="text" id="notice_title" name="notice_title" placeholder="Enter Notice Title">

                <!-- Recipients -->
                <p><strong>Send Notice To:</strong></p>
                <div class="recipients">
                    <label><input type="checkbox" name="recipients[]" value="students"> Students</label>
                    <label><input type="checkbox" name="recipients[]" value="accountant"> Accountant</label>
                    <label><input type="checkbox" name="recipients[]" value="health_officer"> Health Officer</label>
                </div>

                <!-- Upload Notice File -->
                <label for="notice_file">Upload Notice:</label>
                <input type="file" id="notice_file" name="notice_file" accept=".jpg,.jpeg,.png,.pdf">

                <!-- Additional Information -->
                <label for="note">Additional Information:</label>
                <textarea id="note" name="note" placeholder="Add any extra details here"></textarea>

                <!-- Submit Button -->
                <button type="submit" name="submit" class="submit-btn">Post Notice</button>

            </form>
        </section>
    </main>

    <!-- Footer -->
    <?php include "footer.php"; ?>

</body>
</html>
