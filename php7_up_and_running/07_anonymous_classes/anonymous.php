<?php



interface Logger {
	public function log($message);
}

class Application {
	private $logger;

	public function setLogger(Logger $logger) {
		$this->logger = $logger;
	}

	public function action() {
		$this->logger->log('Doing things');
	}
}

$app = new Application();

$app->setLogger(new class implements Logger {
	public function log($message) {
		var_dump($message);
	}
});
$app->action();
