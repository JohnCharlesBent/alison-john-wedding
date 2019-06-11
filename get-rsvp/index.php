<?php
/**
* Fetch all RSVPs from database and output as a CSV file, then download the file
**/

include('../inc/cxn.php');

$conn = mysqli_connect($server, $un, $pw, $db);

if($conn->connection_error) {
  die("Could not connect to database " . $conn->connect_error);
}

$data = array();

$sql = "SELECT * FROM rsvp";
$result = mysqli_query($conn, $sql);

header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachement; filename=rsvp.csv');

$output = fopen("php://output", "w");

fputcsv($output, array('ID', 'Name', 'Email', 'Are You Attending', 'Other Guests?', 'Number Of Other Guests', 'Other Guests Names', 'Dietary Restrictions', 'Comments'));

while($row = mysqli_fetch_assoc($result))
{
  $data[] = array(
    'ID' => $row['ID'],
    'Name' => $row['first_name_last_name'],
    'Email' => $row['email'],
    'Attending' => $row['attending'],
    'Other Guests' => $row['other_guests'],
    'Number of Other Guests' => $row['number_of_guests'],
    'Other Guest Names' => $row['other_guest_names'],
    'Dietary Restrictions' => $row['dietary_restrictions'],
    'Comments' => $row['comments']
  );
}

foreach($data as $d) {
  fputcsv($output, $d);
}

fclose($output);

?>
