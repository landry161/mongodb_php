<?php
//Fichier index
$connection=new MongoClient('127.0.0.1:27017');
$db=$connection->selectDB('test');
$collection=$db->samples;

$users=array('nom'=>'Wabi','prenom'=>'Spider',
'addressse'=>'Yop City','city'=>'Babi','state'=>'Babi','zip'=>'225');
//$collection->insert($users,array('w' => true));

$slice=$collection->find(array(),array('prenom'=>array('$slice'=>array(4,10))));

foreach ($slice as $document)
	{
	print_r($document);
	}

	echo "dsc ksjdcsc <br/>";
	
$set = $collection->find(array('age' =>array('$in' =>array(43,30,20))));
var_dump($set);
foreach ($set as $document)
	{
	print_r($document);
	}

$all = $collection->find(array('age' =>array('$all' =>array(25,23))));
var_dump($all);
foreach ($all as $document)
	{
	print_r($document);
	}
	
$resultat_lt=$collection->find(array('age'=>array('$lt'=>25)));

$resultat_gt=$collection->find(array('age'=>array('$gt'=>25)));

/*foreach ($resultat_gt as $document)
	{
	print_r($document);
	}


for($i=0;$i<count($resultat_lt);$i++)
{
	echo count($resultat_lt);
}
foreach ($resultat_lt as $document)
	{
	echo ($document["nom"]);
	}
*/
/*

var_dump($collection->w);
$pk = $users['_id'];
var_dump($pk);*/

/*$pp = $collection->findOne(array('nom' => 'Wabi','prenom' => 'Spider'),array('addressse','zip'));
var_dump($pp);*/

//$collection->update(array('_id'=>new MongoId('589040625b3fca581d00002b')),array('$set'=>array('situation'=>'marié','fonction'=>'Développpeur')));

/*$collection->update(array('_id'=>new MongoId('58917d3e5b3fcac410000032')),array('nom'=>'Peter','prenom'=>'Parker'),
array('$set'=>array('adresse'=>'wall crawling'))
);*/

//$collection->remove(array('_id'=>new MongoId('58917ce85b3fcac410000031')));