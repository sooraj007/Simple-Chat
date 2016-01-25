<?php
require_once 'ORM.php';
ORM::configure('mysql:host=localhost;dbname=aja');
ORM::configure('username', 'root');
ORM::configure('password', 'root');

$query = "SELECT * from chat ORDER BY id DESC LIMIT 1";

 $cmsg = ORM::for_table('chat')->raw_query($query)->find_many();


 foreach($cmsg as $cm){
 	$id =  $cm->id;

 }
$jid = ['id'=>$id];
echo json_encode($jid);

