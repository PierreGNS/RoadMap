<h2>Liste taches</h2>
<table>
	<?php
		foreach($listeTaches as $object){
			echo "<tr>";
			foreach($object as $key => $value){
				echo "<td>$value</td>";
			}
			echo "</tr>";
		}
	?>
</table>
<a href='../index.php'>retour</a>