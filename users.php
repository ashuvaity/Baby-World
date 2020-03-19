<?php

$connect = mysqli_connect("localhost", "id7573453_avaity", "password@1", "id7573453_mylogin");
$output = '';
if(isset($_POST["query"])){
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM Trust
	WHERE Id LIKE '%".$search."%'
    OR Username LIKE '%".$search."%'
	OR Donation LIKE '%".$search."%'
	OR Location LIKE '%".$search."%'"; }
else{
	$query = "SELECT * FROM Trust ORDER BY id;";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0){
	$output .= '
	<div class="table-responsive">
	<table class="table table-hover">
	<thead class="thead-dark">
		<tr>
			<th scope="col">Id</th>
			<th scope="col">Username</th>
			<th scope="col">Donation(Rs.)</th>
			<th scope="col">Location</th>
		</tr>
	</thead>
	<tbody>';
	while($row = mysqli_fetch_array($result)){
		$output .= '
		<tr>
			<th scope="row">'.$row["Id"].'</th>
			<td>'.$row["Username"].'</td>
			<td>'.$row["Donation"].'</td>
			<td>'.$row["Location"].'</td>
		</tr>';
	}
	$output .= '</tbody></table>';
	echo $output;
}
else{
	echo 'No such users found';
}

?>
