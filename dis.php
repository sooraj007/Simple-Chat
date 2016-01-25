<?php
require_once 'ORM.php';
ORM::configure('mysql:host=localhost;dbname=aja');
ORM::configure('username', 'root');
ORM::configure('password', 'root');


if(($_GET['lid']) != 'undefined')
{
$since = $_GET['lid'] ;
$query = "SELECT msg from chat WHERE id > $since ";


 $cmsg = ORM::for_table('chat')->raw_query($query)->find_many();


 foreach($cmsg as $cm){

 	echo "<li >$cm->msg</li>";
 }

}
