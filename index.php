<?php
$servername = "id13ycboax6nv7x.c4863skzvjnn.us-east-2.rds.amazonaws.com";
$username = "Manugr21";
$password = "12345678";
$dbname = "manuDB";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT title,url FROM Images";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    echo '<table border="1" align="center">';
    while($row = $result->fetch_assoc()) {
	echo '<tr><td>' . $row["title"] . '</td>';
        echo '<td><img src="' . $row["url"]. '" height="200" width="200"></td></tr>';
    }
    echo '</table>';
} else {
    echo "0 results";
}
$conn->close();
?>
