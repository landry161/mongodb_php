<?php
//Opérateurs
include "../config.php";
$database=returnConfig();
$collection=$database->samples;

$result_gt=$collection->find(array('age'=>array('$gt'=>10)));

echo "<table border='1'>
			<tr>
				<td>Nom</td>
				<td>Prenom</td>
				<td>Age</td>
				<td>Adresse</td>
				<td>Situation</td>
			</tr>";
foreach ($result_gt as $document)
{
	echo "<tr>
		<td>".$document["nom"]."</td>
				<td>".$document["prenom"]."</td>
				<td>".$document["age"]."</td>
				<td>".$document["adresse"]."</td>
				<td>".$document["situation"][0].",".$document["situation"][1]."</td>
			</tr>";
}
echo "</table>";