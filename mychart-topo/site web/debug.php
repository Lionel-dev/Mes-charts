 <?php
$servername = "bd-svc";
$username = "root";
$password = "Tigrou007";

try {
    $conn = new PDO("mysql:host=$servername;dbname=test", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    echo "Connected successfully";
}
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>
