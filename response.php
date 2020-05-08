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

function test(){
	$return = $_POST;
	
	//Informatat qe pranohen ne forma, mund te i veme kushte te ndryshme 
	if ($return["Favorite_player"] == ""){
		$return["Favorite_player"] = "Please enter a player ";
	}
	if ($return["Favorite_player"] == "Wayn"){
		$return["Premier_League"] = "2018/2019 ";
	}
	
	$return["json"] = json_encode($return);
	echo json_encode($return);
}

?>
