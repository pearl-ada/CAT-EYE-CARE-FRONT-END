<?php
$host = 'localhost';
$db = 'Trackyourprogress';
$user = 'root';
$pass = "";


try{
    $conn = new PDO("mysql:host;dbname=$db",
    $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE,
    PDO::ERRMODE_EXCEPTION);

    if ($_SERVER['REQUEST_METHOD']=='POST') {
        $content = $_POST['content'];

        if (!empty($content)) {
            $stmt = $conn->prepare("INSERT INTO notes
            (content) VALUES (:content)");
            $stmt->bindParam('.content', $content);
            $stmt->execute();
        }
    }

    header("Location: ../HTML/track.html");
}catch (PDOExecution $e) {
    echo "Error: ".$e->getMessage();
}


?>