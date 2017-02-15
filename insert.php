<?php 
//Insert
include "config.php";
$database=returnConfig();
$collection=$database->samples;
$users=array(
	array(
		'nom'=>'Gary',
		'prenom'=>'Fletcher ',
		'adresse'=>'Cocody',
		'city'=>'Babi ',
		'state'=>'Cocody',
		'zip'=>'225',
		'age'=>37,
		"situation"=>array("Marié","2 enfants")
		),
		array('nom'=>'Kocumbo ',
		'prenom'=>'le noir ',
		'adresse'=>'Adjamé',
		'city'=>'Babi ',
		'state'=>'Babi ',
		'zip'=>'225','age'=>31,
		"situation"=>array("Marié","sans enfants"))
		,
		array(
		'nom'=>'Armel ',
		'prenom'=>'Kabongo ',
		'adresse'=>'Treichville ',
		'city'=>'Babi ',
		'state'=>'Babi ',
		'zip'=>'225','age'=>49,
		"situation"=>array("Marié","3 enfants"))
		,
		array(
		'nom'=>'Kouame ',
		'prenom'=>'Kanga ',
		'adresse'=>'Abobo ',
		'city'=>'Babi ',
		'state'=>'Abobo ',
		'zip'=>'225','age'=>19,
		"situation"=>array("Veuf","1 enfants"))
);
var_dump($users);
for($i=0;$i<count($users);$i++)
{
	$collection->insert($users[$i],array('w' => true));
}


for($i=1;$i<100;$i++)
{
	
}

