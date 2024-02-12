<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Settings</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/style.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Favicon -->
    <link rel="icon" href="img/MM.png">
</head>
<body>
    <?php 
    // Include navbar
    include "inc/navbar.php";

    // Database connection details
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "merga"; 

   
    $current_username = ""; // Current username
    $current_name = ""; // Current name
    $new_username = ""; // New username
    $new_name = ""; // New name
    $new_password = ""; // New password

    // Error message
    $error = "";

    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Validate and sanitize input fields
        $current_username = htmlspecialchars($_POST['current_username']);
        $current_name = htmlspecialchars($_POST['current_name']);
        $new_username = htmlspecialchars($_POST['new_username']);
        $new_name = htmlspecialchars($_POST['new_name']);
        $new_password = htmlspecialchars($_POST['new_password']);

        // Validate if current username and name match with database
        $conn = new mysqli($servername, $username, $password, $dbname);
        $sql = "SELECT * FROM user WHERE username='$current_username' AND Name='$current_name'";
        $result = $conn->query($sql);

        if ($result->num_rows == 1) {
            // Update username, name, and password in the database
            $update_sql = "UPDATE user SET username='$new_username', Name='$new_name', password='$new_password' WHERE username='$current_username'";
            if ($conn->query($update_sql) === TRUE) {
                echo "Settings updated successfully";
            } else {
                echo "Error updating settings: " . $conn->error;
            }
        } else {
            $error = "Invalid current username or name";
        }

        // Close the database connection
        $conn->close();
    }
    ?>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="text-center mb-4">Admin Settings</h2>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="mb-3">
                        <label for="current_username" class="form-label">Current Username</label>
                        <input type="text" class="form-control" id="current_username" name="current_username" required>
                    </div>
                    <div class="mb-3">
                        <label for="current_name" class="form-label">Current Name</label>
                        <input type="text" class="form-control" id="current_name" name="current_name" required>
                    </div>
                    <div class="mb-3">
                        <label for="new_username" class="form-label">New Username</label>
                        <input type="text" class="form-control" id="new_username" name="new_username" required>
                    </div>
                    <div class="mb-3">
                        <label for="new_name" class="form-label">New Name</label>
                        <input type="text" class="form-control" id="new_name" name="new_name" required>
                    </div>
                    <div class="mb-3">
                        <label for="new_password" class="form-label">New Password</label>
                        <input type="password" class="form-control" id="new_password" name="new_password" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Update Settings</button>
                    <?php if (!empty($error)) : ?>
                        <div class="text-danger"><?php echo $error; ?></div>
                    <?php endif; ?>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
