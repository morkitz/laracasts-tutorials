<?php

function clubEntryAllowed($age) {
	if ($age < 21) {
		return false;
	} else {
		return true;
	}
}

?>