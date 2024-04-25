<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/track.css">
    <title>Track your Progress</title>
</head>
<body>
    <form action="save_note.php" method="POST">
        <textarea name="content" id="" cols="50" rows="5" placeholder="input text"></textarea><br>
        <button type="submit"> Save </button>
    </form>
    <h2>Saved</h2>
    <div id="notes">
        <?php
        $host = 'localhost';
        $db= 'Trackyourprogress';
        $user = 'root';
        $pass = "";

        try{
            $conn = newPDO("mysql:host=$host;dbname=$db",
            $user,$pass);

            $conn->setAttribute(PDO::ATTR_ERRMODE,
            PDO::ERRMODE_EXCEPTION);

            $stmt = $conn->query("SELECT * FROM notes
            ORDER BY created_at DESC");

            while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
            {
                echo"<div class='note'>";
                echo "<p>{$row['content']}</p>";
                echo "<small>Saved on: {$row['created_at']}</small>";
                echo "</div>";
            }
        }catch(PDOException $e) {
            echo"Error:" . $e->getMessage();
        }
        
           
    

        ?>
    </div>
</body>
</html>