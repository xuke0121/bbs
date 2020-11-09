<?php

    class db_func {
	
	function acc_db(){
	$acc = new PDO('mysql:host=mysql;dbname=main_db', 'defuser', 'qwer1234,');
	return $acc;
	}
	}
