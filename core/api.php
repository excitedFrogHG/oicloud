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
		$json_config = file_get_contents("../config/db_config.json");  //从json文件读取数据库配置
		$dbconfig = json_decode($json_config);  //将配置解码，转换为数组
		$Connector = new sqlConector($dbconfig['host'],$dbconfig['user'],base64_decode($dbconfig['pass']),$dbconfig['dbname']);  //连接数据库
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