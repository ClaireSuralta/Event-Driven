
<?php
    include('./config/database.php');

    $sql = "SELECT * FROM booking WHERE Guest_ID LIKE '12345'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        
        while ($row = $result->fetch_assoc()) {
            echo $row['Guest_ID'] . "<br/>";
        }
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>

