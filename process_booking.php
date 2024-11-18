<?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the form data
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $phoneNumber = $_POST['phoneNumber'];
    $email = $_POST['email'];
    $departureDate = $_POST['departureDate'];
    $arrivalDate = $_POST['arrivalDate'];
    $numberOfGuests = $_POST['numberOfGuests'];
    $country = $_POST['country'];
    $idNumber = $_POST['idNumber'];
    $note = $_POST['note'];

    // TODO: Process the form data (e.g., store it in a database, send an email, etc.)

    // Redirect to a success page
    header("Location: success.php");
    exit();
}
?>