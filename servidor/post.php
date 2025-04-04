<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $content = $_POST['content'];

    if (!empty($content)) {
        $stmt = $conn->prepare("INSERT INTO posts (content) VALUES (?)");
        $stmt->bind_param("s", $content);
        $stmt->execute();
        $stmt->close();
    }
}

header("Location: index.php");
exit();
?>
