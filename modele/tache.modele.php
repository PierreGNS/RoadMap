<?php
	/* Retourne la liste des taches*/
	function get_Taches($bdd){
		$sql = 'SELECT * FROM tache';
		$result = $bdd->query($sql);

		if ($result->num_rows > 0) {
			while ($row = $result->fetch_assoc())
			{
				$listeTaches[] = new tache($row);
			}
			return $listeTaches;
		}
	}
?>