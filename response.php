<?php
if (is_ajax()) {
	if (isset($_POST["action"]) && !empty($_POST["action"])) { //Shikon  nese vlera egziston
		$action = $_POST["action"];
		switch($action) {
			case "test": test(); break;
		}
	}
}

?>
