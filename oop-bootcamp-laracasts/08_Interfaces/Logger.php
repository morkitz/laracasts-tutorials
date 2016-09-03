<?php

interface Logger {
	public function log($data);
}

class FileLogger implements Logger {
	public function log($data) {
		echo "Logging to the file: $data\n";
	}
}

class DatabaseLogger implements Logger {
	public function log($data) {
		echo "Logging to the database: $data\n";
	}
}

class UserController {
	protected $user = "Joe";
	protected $logger;

	public function __construct(Logger $logger) {
		$this->logger = $logger;
	}

	public function show() {
		$this->logger->log($this->user);
	}	
}

$controller = new UserController(new FileLogger);

$controller->show();

$controller = new UserController(new DatabaseLogger);

$controller->show();