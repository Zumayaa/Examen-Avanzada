<?php 
	if (!isset($_SESSION)) {
		session_start();
	}
	
	if (!defined('BASE_PATH')) {
      define('BASE_PATH','https://marcomercce-a6381734ee04.herokuapp.com/');
   	}

?>