<?php 

function adminPasswordVerify($passord, $conn, $id) {
    try {
        $sql = "SELECT * FROM user WHERE id = 0";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$id]);

        if ($stmt->rowCount() == 1) {
            $admin = $stmt->fetch();
            $pass = $admin['passord']; // Ensure column name matches the actual column name in your database

            if (password_verify($admin_pass, $pass)) {
                return 1;
            } else {
                return 0;
            }
        } else {
            return 0;
        }
    } catch (PDOException $e) {
        // Handle database connection or query execution errors
        return 0;
    
   }
}