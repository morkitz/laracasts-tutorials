<?php


class Connection {

	static function connectToDB($config) {
		try {
			return new PDO(
					$config['connection'] . ';dbname=' . $config['name'],
					$config['username'], 
					$config['password'],
					$config['options']
				);
			//return new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'root', 'root');
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}

}

?>