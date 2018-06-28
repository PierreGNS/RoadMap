<?php
	/* Retourne la liste des taches*/
	function get_Projets($bdd){
		$sql = 'SELECT * FROM projet';
		$result = $bdd->query($sql);

		if ($result->num_rows > 0) {
			while ($row = $result->fetch_assoc())
			{
				$listeProjets[] = new projet($row);
			}
		}
		//var_dump($listeProjets);
		return $listeProjets;
	}
?>