
<?php
    include('./config/database.php');

    $sql = "SELECT * FROM animals WHERE Pet_Id LIKE '10001'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        
        while ($row = $result->fetch_assoc()) {
            echo $row['Pet_Id'] . "<br/>";
        }
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>

