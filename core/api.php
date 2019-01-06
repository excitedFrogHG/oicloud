<?php
class sqlConector{
	protected $host;
	protected $user;
	protected $pass;
	protected $dbname;
	protected $conn;
	public function getHost(){
		return $this->host;
	}
	public function getUser(){
		return $this->user;
	}
	public function getPass(){
		return $this->pass;
	}
	public function getDBName(){
		return $this->dbname;
	}
	public function __construct($host,$user,$pass,$dbname){
		$this->host = $host;
		$this->pass = $pass;
		$this->user = $user;
		$this->dbname = $dbname;
		try{
			$str = "mysql:host=".$host.";dbname=".$dbname;
			$this->conn = new PDO($str,$user,$pass,array(PDO::ATTR_PERSISTENT => true));
		} catch (PDOException $e) {
			echo "ERROR!".$e->getMessage()."<br>";
			die();
		}
	}
	public function close(){
		$this->conn = null;
	}
}
class userRegister{
	protected $username;
	protected $password;
	protected $school;
	protected $email;
	protected $gender;
	public function __construct($usr,$psw,$sch,$e,$gen){
		$this->username=$usr;
		$this->password=$psw;
		$this->school=$sch;
		$this->email=$e;
		$this->gender=$gen;
		
	}
}
class Verify{
	public function getEquation(){
		$a=rand(10,50);
		$b=rand(10,50);
		$c=$a+$b;
		$d=$a*$b;
		echo "x^2-$c+$d=0";
	}
}
?>