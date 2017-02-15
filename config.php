<?php 
//Database configuration
function returnConfig()
{
	$connection=new MongoClient('127.0.0.1:27017');
	$db=$connection->selectDB('test');
	//$collection=$db->samples;
	return $db;
}