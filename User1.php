<?php

$connect = mysqli_connect("localhost", "root", "", "mylogin");
$output = '';
if(isset($_POST["query"])){
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM babyworld
	WHERE id LIKE '%".$search."%'
    OR username LIKE '%".$search."%'
    OR mobn LIKE '%".$search."%'
	OR password LIKE '%".$search."%'"; }
else{
	$query = "SELECT * FROM babyworld ORDER BY id;";
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
			<th scope="col">mobile no.</th>
			<th scope="col">password</th>
		</tr>
	</thead>
	<tbody>';
	while($row = mysqli_fetch_array($result)){
		$output .= '
		<tr>
			<th scope="row">'.$row["id"].'</th>
			<td>'.$row["username"].'</td>
			<td>'.$row["mobn"].'</td>
			<td>'.$row["password"].'</td>
		</tr>';
	}
	$output .= '</tbody></table>';
	echo $output;
}
else{
	echo 'No such users found';
}

?>
