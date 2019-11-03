<?php
require_once('class/Database.php');
$db=new Database();
$db->dbInfo('localhost','root','','school');
$con=$db->connect();
$db->delete($con,'admin','id='.$_GET['id']);
header('Location: admin_list.php');