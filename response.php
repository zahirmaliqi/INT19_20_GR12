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
	if ($return["Legend"] == "" && $return["League"] == "" && $return["Goal"] == "Goal" ){
		$return["Legend"]="Please enter a Legend";
		$return["League"]="Please enter a League";
		 $return["Goal"] ="X";
	}
	
	if ($return["Legend"] == "Ryan Giggs" && $return["Goal"] == 10 ){
		$return["Legend"]="Ryan Giggs";
		$return["League"]="FA Cup";
		 $return["Goal"] ="10";
	}
	
	if ($return["Legend"] == "Wayn Rooney" ){
		$return["League"]="Europe Cup";
	}

	if ($return["League"] == "Europe Cup"  && $return["Goal"] == 15){
		$return["Legend"]="Jack Rowley";
	}

	if ($return["Legend"] == "Dennis Viollet"){
		$return["Legend"]="Dennis Viollet";
		$return["League"]="FA Cup";
		 $return["Goal"] ="58";
	}

	
	
	$return["json"] = json_encode($return);
	echo json_encode($return);
}

?>
