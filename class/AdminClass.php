<?php
@session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once('class/Database.php');

class AdminClass extends Database
{
	protected $con='';
	function __construct() {
		$this->dbInfo('localhost','root','12345','school');
		$this->con=$this->connect();
	}
	public function login($data){
		$email=$data['email'];
		$password=$data['password'];
		$where='email="'.$email.'" and password="'.$password.'"';
		$admin=$this->selectData_1($this->con,'admin',$where);
		if($admin->num_rows>0){
			$d=mysqli_fetch_assoc($admin);
			$_SESSION['adminID']=$d['id'];
			header('Location: dashboard.php');
		}else{
			header('Location: login.php');
		}
	}
	public function add_admin($data)
	{
		if(isset($data['id'])){
			$this->con->query("UPDATE `admin` SET `name` = '".$data['name']."', `email` = '".$data['email']."', `password` = '".$data['password']."' WHERE `id` =".$data['id']);
		}else{
			$this->insert($this->con,'admin',$data);
		}
		
		header('Location: admin_list.php');
	}
	public function get_admin($id=NULL)
	{
		if(isset($id)){
			$data['edit']=$this->selectData_1($this->con,'admin','id='.$id);
		}
		$data['list']=$this->getData($this->con,'admin');
		return $data;
	}
	function randomNumber($length) {
		$result = '';
		for($i = 0; $i < $length; $i++) {
			$result .= mt_rand(0, 9);
		}
		return $result;
	}
	public function change_password($data)
	{
		$d=$this->selectData_1($this->con,'admin','email="'.$data['email'].'"');
		echo $token=$this->randomNumber(10);
		$msg='http://localhost/php_project/recover.php?token='.$token;
		// mail($data['email'],'Password recovery',$msg);

		$this->con->query("UPDATE `admin` SET `token` = '".$token."' WHERE `email` ='".$data['email']."'");
		header('Location: login.php');
	}
	public function get_user($token)
	{
		$d=$this->selectData_1($this->con,'admin','token="'.$token.'"');
		return mysqli_fetch_assoc($d);
	}
	public function change_password_post($data)
	{
		$this->con->query("UPDATE `admin` SET `token` = '', password='".$data['password']."' WHERE `id` ='".$data['id']."'");
		header('Location: login.php');
	}
}
?>