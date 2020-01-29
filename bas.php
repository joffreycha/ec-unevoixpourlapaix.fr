
<!--

<div id="compteur">
-->
	<?php

		// Connexion à MySQL
		/*
		mysql_connect("mysql.oxyd.fr", "user_3934", "ikumusubi");
		mysql_select_db("user_3934a");

		//On vérifie si l'IP se trouve déjà dans la table
		$requete_connecte = mysql_query('SELECT COUNT(*) AS nbre_entrees FROM connecte WHERE ip_connecte=\'' . $_SERVER['REMOTE_ADDR'] . '\'');
		$resultat_connecte = mysql_fetch_array($requete_connecte);
		
		//on récupère l'ancien nombre de visiteurs
		$requete_visiteur = mysql_query('SELECT nbre_visiteur FROM visiteur');
		$resultat_visiteur = mysql_fetch_array($requete_visiteur);
		
		$nombre_de_visiteurs = $resultat_visiteur['nbre_visiteur'];
		
		if ($resultat_connecte['nbre_entrees'] == 0) // L'ip ne se trouve pas dans la table, on va l'ajouter
		{
			mysql_query('INSERT INTO connecte VALUES(\'' . $_SERVER['REMOTE_ADDR'] . '\', ' . time() . ')');
			
			//s'il n'y a jms eu de visiteurs sur le site, on donne la valeur 1
			if ($nombre_de_visiteurs == null)
			{
				$nombre_de_visiteurs = 1;
				mysql_query('INSERT INTO visiteur VALUES(' . $nombre_de_visiteurs . ')');
			}
			else
			{
				//nouveau visiteur sur le site (ou ancien >= 24h d'inactivité), on l'ajoute à l'ancien nombre de visiteurs
				$nombre_de_visiteurs++;
				mysql_query('UPDATE visiteur SET nbre_visiteur=' . $nombre_de_visiteurs);
			}
		}
		else // L'ip se trouve déjà dans la table, on met à jour le timestamp
		{
			mysql_query('UPDATE connecte SET timestamp_connecte=' . time() . ' WHERE ip_connecte=\'' . $_SERVER['REMOTE_ADDR'] . '\'');
		}
		
		//On supprime toutes les entrées dont le timestamp est plus vieux que 24h
		// On stocke dans une variable le timestamp qu'il était il y a 24h :
		$timestamp_24h = time() - (24 * 60 * 60); // nombre de secondes écoulées en 24h
		mysql_query('DELETE FROM connecte WHERE timestamp_connecte < ' . $timestamp_24h);
		
		echo '<p><strong>' . $nombre_de_visiteurs . '</strong> internautes ont vu cette page.</p>';
		mysql_close();
	*/
	?>
<!--
</div>
-->


	
<div id="pied_de_page">
	<h1>Contact</h1>
		<p>
			43, avenue du Peuple Belge<br>
			59 000 Lille<br>
			France<br>
			T&eacute;l&eacute;phone : 06 62 34 40 64<br>
			Fax : (33) (0)9 52 26 87 71<br>
			E-mail: contact@unevoixpourlapaix.com<br>
		</p>
</div>

</body>
</html>