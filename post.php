<?php
require_once 'ORM.php';
ORM::configure('mysql:host=localhost;dbname=aja');
ORM::configure('username', 'root');
ORM::configure('password', 'root');

if(isset($_SERVER['HTTP_X_REQUESTED_WITH']))
{

	$msg  = $_POST['msg'];

	$chat = ORM::for_table('chat')->create();

$chat->msg = $msg;


$chat->save();

}
