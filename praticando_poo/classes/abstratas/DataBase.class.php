<?php

abstract class DataBase extends PDO{

	private $user = 'senac-tsi-mvc';
	private $pass = 'SenhaSecreta1234';
	private $db_name = 'senac_tsi_mvc';
	private $host = 'localhost';
	private $port = '3306';
	private $driver = 'mysql';

	public function __construct(){
		$dns = $this->driver . ':host=' . $this->host . ';port=' . $this->port . ';dbname=' . $this->db_name;
		parent::__construct( $dns, $this->user, $this->pass);
	}
}