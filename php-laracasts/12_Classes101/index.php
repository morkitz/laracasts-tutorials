<?php

require 'functions.php';

class Task {
	protected $title;
	protected $completed = false;

	public function __construct($title) {
		$this->title = $title;
	}

	public function assignTo($name) {
		$assigned_to = $name;
	}

	public function complete() {
		$this->completed = true;
	}

	public function isCompleted() {
		return $this->completed;
	}

	public function getTitle() {
		return $this->title;
	}
}

$tasks = [
	new Task('Buy toothbrush'),
	new Task('Clean room'),
	new Task('Finish PHP lessons')
];

$tasks[2]->complete();

//dd($tasks);

require 'index.view.php';

?>