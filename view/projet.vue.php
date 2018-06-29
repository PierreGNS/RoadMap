<div class="container">
	<div class="col s3"></div>
	<div class="col s7">
		<h2>Liste projets</h2>
		<?php /*var_dump($listeProjets);*/ ?>
		<ul class="collapsible">
			<?php
				foreach($listeProjets as $object){
						echo "<li>";
						echo '<div class="collapsible-header">'."\n".'<i class="material-icons">folder</i>';
						echo $object->nom;
						echo '<span class="new badge">4</span></div>';
						echo '<div class="collapsible-body"><p>';
						echo $object->description;
						echo '</p></div>'."\n";
					/*foreach($object as $key => $value){
						
						if(($key != 'id')&&($key != 'etat'))
						{
							if($key == 'nom'){
								echo "<td><a href=''>$value</a></td>";
							}else{
								echo "<td>$value</td>";
							}
						}
					}*/
					echo "</li>";
				}
			?>
		</ul>
		<br/>
		<a class="waves-effect waves-light btn">new</a>

	</div>
	<div class="col s2"></div>
</div>

