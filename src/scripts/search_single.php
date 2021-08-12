<?php
include('database connection.php');
include('function.php');
if(isset($_POST["client_id"]))
{
	$output = array();
	$statement = $connection->prepare(
		"SELECT * FROM tab_clientes WHERE id = '".$_POST["client_id"]."' LIMIT 1"
	);
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{
		$output["name"] = $row["name"];
		$output["cpf"] = $row["cpf"];
		$output["email"] = $row["email"];
		$output["endereco"] = $row["street"];
	}
	echo json_encode($output);
}
?>