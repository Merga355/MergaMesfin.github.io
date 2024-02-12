<?php

if (isset($_POST['message_id']) && !empty($_POST['message_id'])) {
    $message_id = $_POST['message_id'];

   
    $servername = "localhost";
    $db_username = "root";
    $db_password = "";
    $dbname = "merga";

    try {
        
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $db_username, $db_password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        
        $stmt = $conn->prepare("DELETE FROM `message` WHERE id = :id");
        $stmt->bindParam(':id', $message_id);
        
        
        $stmt->execute();

        
        header("Location: messages.php");
        exit();
    } catch (PDOException $e) {
       
        echo "Error: " . $e->getMessage();
    }
} else {
   
    header("Location: messages.php");
    exit();
}
?>
