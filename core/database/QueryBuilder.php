<?php

/**
 * 
 */
class QueryBuilder
{
	protected $pdo;

	public function __construct($pdo)
	{
		$this->pdo = $pdo;
	}
	
	public function selectAll($table)
	{
		$statement = $this->pdo->prepare("select * from {$table}");

		$statement->execute();

		return $statement->fetchAll(PDO::FETCH_OBJ); // getting objects
	}

	public function deleteAll($table)
	{
		$statement = $this->pdo->prepare("delete from {$table} where id=1");

		$statement->execute();
	}

	public function insertAll($table)
	{
		$statement = $this->pdo->prepare("insert into {$table} (id, description, completed) VALUES (3,'Good', 1)");

		$statement->execute();
	}
}