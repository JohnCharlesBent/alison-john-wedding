<?php
/**
* Script used to process RSVP form
**/

include('cxn.php');

$conn = mysqli_connect($server, $un, $pw, $db);

if($conn->connection_error) {
  die("Could not connect to database " . $conn->connect_error);
}
$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$attending = mysqli_real_escape_string($conn, $_POST['attending']);
$other_guests = mysqli_real_escape_string($conn, $_POST['other_guests']);
$number_of_guests = mysqli_real_escape_string($conn, $_POST['number_of_guests']);
$other_guests_names = mysqli_real_escape_string($conn, $_POST['other_guests_names']);
$dietary_restrictions = mysqli_real_escape_string($conn, $_POST['dietary_restrictions']);
$comments = mysqli_real_escape_string($conn, $_POST['comments']);

$sql = "INSERT INTO rsvp (`first_name_last_name`, `email`, `attending` ,`other_guests`, `number_of_guests`, `other_guest_names`, `dietary_restrictions`, `comments`) VALUES ('$name', '$email', '$attending', '$other_guests', '$number_of_guests', '$other_guests_names', '$dietary_restrictions', '$comments')";

if($conn->query($sql) === TRUE) {
  echo json_encode('Your RSVP has been submitted. Thanks so much! We\'re looking forward to celebrating with you soon.');
} else {
  echo json_encode('There has been an error with your form submission. Error: ' . $sql . ' | ' . $conn->error);
}

$conn->close();

?>
