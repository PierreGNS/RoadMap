<h2>Hello World!</h2>
Acceuil.vue.php

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