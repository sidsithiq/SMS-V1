<?php include 'config.php'; ?>
<?php 
$unitnumber_id=$_POST['unit_data'];

$unit="SELECT * FROM addowner_details WHERE id = $unitnumber_id";
$result = mysqli_query($db, $unit);
$data = array();


while ($row = $result->fetch_assoc()) {
    $data[]= $row;
   
}


echo json_encode($data);
 ?>
