<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message Interface</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body><center>
    <h2>Messages</h2>
</center>
    <?php
    $servername = "localhost";
    $db_username = "root";
    $db_password = "";
    $dbname = "merga"; 

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $db_username, $db_password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
       
        $query = "SELECT * FROM `message` ORDER BY `date_created` DESC";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $messages = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        die("Connection failed: " . $e->getMessage());
    }
    
    if (empty($messages)): ?>
        <p>No messages found.</p>
    <?php else: ?>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Message</th>
                    <th>Date Created</th>
                    <th>Action</th> 
                </tr>
            </thead>
            <tbody>
                <?php foreach ($messages as $message): ?>
                    <tr>
                        <td><?php echo $message['Name']; ?></td>
                        <td><?php echo $message['email']; ?></td>
                        <td><?php echo $message['subject']; ?></td>
                        <td><?php echo $message['message']; ?></td>
                        <td><?php echo $message['date_created']; ?></td>
                        <td>
                            <form action="admin/delete_message.php" method="post">
                                <input type="hidden" name="message_id" value="<?php echo $message['id']; ?>">
                                <button type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>

    <?php $conn = null;?>
</body>
</html>

