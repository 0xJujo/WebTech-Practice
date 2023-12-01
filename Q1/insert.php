<?php
$servername="localhost";
$username="admin";
$password="pwd";
$dbname="employee";

$conn= new mysqli($servername, $username, $password, $dbname);

// Get form data
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$department = $_POST['department'];
$designation = $_POST['designation'];

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert data into the table
$sql = "INSERT INTO employees details (first_name, last_name, department, designation) VALUES ('$firstName', '$lastName', '$department', '$designation')";

if ($conn->query($sql) === TRUE) {
    echo "Record inserted successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection
$conn->close();
?>

?>