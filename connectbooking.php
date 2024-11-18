<?php
// Step 2: Establish database connection
$hostname = "localhost";
$username = "root";
$password = " ";
$database = " Reservation";

$conn = mysqli_connect($hostname, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Step 3: Retrieve form data
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$phoneNumber = $_POST['phoneNumber'];
$email = $_POST['email'];
// Retrieve other form fields as needed

// Step 4: Sanitize and validate data (you can add your own validation logic here)

// Step 5: Insert data into the database
$sql = "INSERT INTO booking (first_name, last_name, phone_number, email) 
        VALUES ('$firstName', '$lastName', '$phoneNumber', '$email')";

if (mysqli_query($conn, $sql)) {
    echo "Booking data inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>