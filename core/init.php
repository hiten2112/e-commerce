<?php
$db = mysqli_connect('127.0.0.1.','root','******', 'tutorials');
if(mysqli_connect_errno()){
  echo 'Data base connection failed folowing errors:'.mysqli_connect_error();
  die();

}
 require_once $_SERVER['DOCUMENT_ROOT'].'/tutorials/config.php';
 require_once BASEURL.'helpers/helpers.php';
