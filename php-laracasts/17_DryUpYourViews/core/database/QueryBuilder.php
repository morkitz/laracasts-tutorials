<?php

class QueryBuilder {

	protected $pdo;

	public function __construct($pdo) {
		$this->pdo = $pdo;
	}

	public function selectAllFromTable($table) {
		$statement = $this->pdo->prepare("SELECT * from {$table}");
		$statement->execute();
		//$tasks = $statement->fetchAll();
		//$tasks = $statement->fetchAll(PDO::FETCH_OBJ);
		return $statement->fetchAll(PDO::FETCH_CLASS);
	}
}


?>