<?php

namespace Acme;

class AuthController {
	private $registration;

	public function __construct(RegisterUser $registration) {
		$this->registration = $registration;
	}

	public function register() {
		$this->registration->execute([], $this);
	}

	public function userRegisteredSuccessfully() {
		var_dump("User registered successfully");
	}

	public function userRegisteredUnsuccessfully() {
		var_dump("User registered unsuccessfully");	
	}
}