<?php

namespace Acme;

class RegisterUser {

	public function execute(array $data, AuthController $callback) {
		var_dump("Registering the user");

		//$callback->userRegisteredSuccessfully();
		$callback->userRegisteredUnsuccessfully();
	}
}