<?php

function connectToDB() {
	try {
		$pdo = new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'root', 'root');
	} catch (PDOException $e) {
		die($e->getMessage());
	}

	return $pdo;
}

function fetchAllTasks($pdo) {
	$statement = $pdo->prepare('SELECT * from todos');
	$statement->execute();
	//$tasks = $statement->fetchAll();
	//$tasks = $statement->fetchAll(PDO::FETCH_OBJ);
	return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
}

function dd($data) {
	echo "<pre>";
	die(var_dump($data));
	echo "</pre>";
}

?>