<h2>Liste projets</h2>
<table>
	<?php
		foreach($listeProjets as $object){
			echo "<tr>";
			foreach($object as $key => $value){
				echo "<td>$value</td>";
			}
			echo "</tr>";
		}
	?>
</table>