<?php header('Access-Control-Allow-Origin: *');
$con=mysqli_connect('localhost', 'aichulap_pdgames', '@aichulapd0000', 'aichulap_pdgames');
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$id = $_GET['patient_id'];
$qz = "SELECT hn_id FROM patient_table where hn_id ='".$id."'"; 
$qz = str_replace("\'","",$qz); 
$result = mysqli_query($con,$qz);
while($row = mysqli_fetch_array($result))
{
echo $row['hn_id'];
}
mysqli_close($con);
?>