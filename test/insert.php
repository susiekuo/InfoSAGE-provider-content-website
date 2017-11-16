<?php

// Author: Susie Kuo (susan_kuo@hms.harvard.edu) 
// Date created: 11/14/17 
// Version: 1.0 
// Purpose: insert.php either inserts or updates a record in the mysql table.

$conn = mysqli_connect("localhost", "bidmc", "", "test");
$info = json_decode(file_get_contents("php://input"));

if (count($info) > 0) {
	$type     = mysqli_real_escape_string($conn, $info->type);
	$title     = mysqli_real_escape_string($conn, $info->title);
	$firstname     = mysqli_real_escape_string($conn, $info->firstname);
	$lastname     = mysqli_real_escape_string($conn, $info->lastname);
	$institution     = mysqli_real_escape_string($conn, $info->institution);
	$content     = mysqli_real_escape_string($conn, $info->content);
	$btn_name = $info->btnName;
	if ($btn_name == "Insert") {
		$query = "INSERT INTO infosage(type, title, firstname, lastname, institution, content) VALUES ('$type', '$title', '$firstname', '$lastname', '$institution', '$content')";
		if (mysqli_query($conn, $query)) {
			echo "Data Inserted Successfully...";
		} else {
			echo 'Failed';
		}
	}	
	if ($btn_name == 'Update') {
		$id    = $info->id;
		$query = "UPDATE infosage SET type = '$type', title = '$title', firstname = '$firstname', lastname = '$lastname', institution = '$institution', content = '$content' WHERE id = '$id'";
		if (mysqli_query($conn, $query)) {
			echo 'Data Updated Successfully...';
		} else {
			echo 'Failed';
		}
	}
}
?>