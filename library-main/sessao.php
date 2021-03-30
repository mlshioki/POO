<?php

session_start();

if ( !isset($_SESSION['login'])) {
		
	header('Location: /library/login.php');
			
}
