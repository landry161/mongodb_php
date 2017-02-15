<?php
//Connection
include 'config.php';
$connection=returnConfig();
$collection=$connection->samples;

$result=$collection->find();
//Parcours des éléments de la  base de données

echo "<table border='1'>
			<tr>
				<td>Nom</td>
				<td>Prenom</td>
				<td>Age</td>
				<td>Adresse</td>
				<td>Situation</td>
			</tr>";
foreach ($result as $document)
	{
		echo "<tr>
		<td>".$document["nom"]."</td>
				<td>".$document["prenom"]."</td>
				<td>".$document["age"]."</td>
				<td>".$document["adresse"]."</td>
				<td>".$document["situation"][0].", ".$document["situation"][1]."</td>
			</tr>";
	}
echo "</table>";
//Fichier index
/*$connection = new MongoClient('127.0.0.1:27017');
$db = $connection->selectDB('test');
$collection=$db->samples;

for($i=1;$i<100;$i++)
{
	$users=array('nom'=>'Wabi '.$i,'prenom'=>'Spider '.$i,'addressse'=>'Yop City '.$i,'city'=>'Babi '.$i,'state'=>'Babi '.$i,'zip'=>'225','age'=>rand(23,45));
	$collection->insert($users,array('w' => true));
}*/

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