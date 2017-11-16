<?php

// Author: Susie Kuo (susan_kuo@hms.harvard.edu) 
// Date created: 11/14/17 
// Version: 1.0 
// Purpose: delete.php deletes the selected mysql record by id.

$conn   = mysqli_connect("localhost", "bidmc", "", "test");
$conn = mysqli_connect("localhost", "bidmc", "", "test");
$data    = json_decode(file_get_contents("php://input"));
if (count($data) > 0) {
$id    = $data->id;
$query = "DELETE FROM infosage WHERE id='$id'";
if (mysqli_query($conn, $query)) {
echo 'Data Deleted Successfully...';
} else {
echo 'Failed';
}
}
?>