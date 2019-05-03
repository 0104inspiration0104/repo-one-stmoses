
 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "saint_moses_orimolade_cs_church_no_one_ikirun";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// create variables
$value=$_POST['YourName'];
$other=$_POST['YourEmail'];
$birth=$_POST['YourPhone'];
$sex=$_POST['YourAddress'];
$nation=$_POST['YourMessage'];
//to insert into database
$sql = ("INSERT INTO contact_us(YourName,YourEmail,YourPhone,YourAddress,YourMessage) values ('$value','$other','$birth','$sex','$nation')");


// test condition
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    echo "<a href='contactus.php'>Go Back</a>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

