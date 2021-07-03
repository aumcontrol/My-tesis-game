<?php header('Access-Control-Allow-Origin: *');

$mysqli = new mysqli('localhost', 'aichulap_pdgames', '@aichulapd0000', 'aichulap_pdgames');
if ($mysqli ->connect_errno) {
 die('Could not connect: ' . mysqli_connect_errno());;
}

$id = $_GET['fid']; 

$query = $mysqli->query("SELECT * FROM patient_table WHERE hn_id = $id");

$row = $query->fetch_array();
echo $row['first_name'];

$mysqli->close();