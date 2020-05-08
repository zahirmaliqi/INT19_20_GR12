<?php
if (is_ajax()) {
	if (isset($_POST["action"]) && !empty($_POST["action"])) { //Shikon  nese vlera egziston
		$action = $_POST["action"];
		switch($action) {
			case "test": test(); break;
		}
	}
}
//Funksioni qe kontrollon nese ankesa eshte ne Ajax
function is_ajax() {
	return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
}


?>
