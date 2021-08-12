<?php

include('database connection.php');
include('function.php');

if(isset($_POST["client_id"]))
{
	$statement = $connection->prepare(
		"DELETE FROM tab_clientes WHERE id = :id"
	);
	$result = $statement->execute(

		array(':id'	=>	$_POST["client_id"])
		
	    );
}

?>