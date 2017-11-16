<?php

// Author: Susie Kuo (susan_kuo@hms.harvard.edu) 
// Date created: 11/14/17 
// Version: 1.0 
// Purpose: display.php selects all current mysql records to display in a table on the index page.

$conn   = mysqli_connect("localhost", "bidmc", "", "test");
$output = array();
$query  = "SELECT * FROM infosage";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
while ($row = mysqli_fetch_array($result)) {
$output[] = $row;
}
echo json_encode($output);
}
?> 