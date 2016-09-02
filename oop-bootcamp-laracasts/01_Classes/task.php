<?php

class Task {
	public $title;
	public $description;

	public $completed;

	public function __construct($title, $description) {
		$this->title = $title;
		$this->description = $description;
	}

	public function complete() {
		$this->completed = true;
	}
}

$task = new Task('Learn OOP', 'Today you will learn about OOP basics');
$task->complete();

var_dump($task->title);
var_dump($task->description);
var_dump($task->completed);


?>