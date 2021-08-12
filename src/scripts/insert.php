<?php
include('database connection.php');
include('function.php');
if(isset($_POST["operation"]))
{
	if($_POST["operation"] == "Add")
	{
		$statement = $connection->prepare("
			INSERT INTO tab_clientes (nome, cpf, celular, email, rua, numero, bairro, complemento, cidade, estado, data_criacao) 
			VALUES (:name, :cpf, :telephone, :email, :street, :number, :district, :complement, :city, :uf, :date)");
		$result = $statement->execute(
			array(
				':name'	=>	$_POST["name"],
				':cpf'	=>	$_POST["cpf"],
				':telephone'	=>	$_POST["telephone"],
				':email'	=>	$_POST["email"],
				':street'	=>	$_POST["street"],
				':number'	=>	$_POST["number"],
				':district'	=>	$_POST["district"],
				':complement'	=>	$_POST["complement"],
				':city'	=>	$_POST["city"],
				':uf'	=>	$_POST["uf"],
				':date'	=>	$_POST["date"]
			)
		);
	}
	if($_POST["operation"] == "Edit")
	{
		$statement = $connection->prepare(
			"UPDATE tab_clientes
			SET name = :name, cpf = :cpf, telephone = :telephone, email = :email, street = :street, district = :district, 
			complement = :complement, city = :city, uf = :uf, data_alteracao = :date
			 WHERE id = :id");
		$result = $statement->execute(
			array(
				':id'	=>	$_POST["id"],
				':name'	=>	$_POST["name"],
				':cpf'	=>	$_POST["cpf"],
				':telephone'	=>	$_POST["telephone"],
				':email'	=>	$_POST["email"],
				':street'	=>	$_POST["street"],
				':district'	=>	$_POST["district"],
				':complement'	=>	$_POST["complement"],
				':city'	=>	$_POST["city"],
				':uf'	=>	$_POST["uf"],
				':date'	=>	$_POST["date"]
			)
		);
	}
}

?>