<?php include('haut.php') ?>

	<div id="corps">
		<form method="post">
			<div id="desinscrire">
				<p>
					<label for="email"><h3>Se d&eacute;sinscrire de la newsletter de l&rsquo;exposition</h3></label>
					<input id="email" name="email" value="Votre adresse e-mail"
					onfocus="this.oldvalue=this.value;this.value='';"
					onblur="if (this.value=='') this.value=this.oldvalue;" /><br />
					<input type="submit" value="D&eacute;sinscrire" />
				</p>
			</div>
		</form>
		
		<p>
		<?php
			if (isset($_POST['email'])) // Clic sur le bouton "D�sinscrire"
			{
				$_POST['email'] = htmlspecialchars($_POST['email']); // On rend inoffensives les balises HTML que le visiteur a pu rentrer

				if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['email'])) // On v�rifie si l'adresse mail est valide
				{
					mysql_connect("mysql.oxyd.fr", "user_3934", "ikumusubi");
					mysql_select_db("user_3934a");
					
					// On v�rifie que l'adresse existe dans la bd
					$query = sprintf("SELECT mail FROM newsletter WHERE mail = '" . $_POST['email'] . "'"); // Formulation de la requ�te
					$result = mysql_query($query); // Ex�cution de la requ�te
										
					// V�rification du r�sultat
					if (!$result)	
					{
						$message  = 'Requ&ecirc;te invalide&nbsp;:&nbsp;' . mysql_error() . "\n";
						$message .= 'Requ&ecirc;te compl&egrave;te&nbsp;:&nbsp;' . $query;
						die($message);
					}
					
					if (mysql_num_rows($result) == null) // si l'adresse mail ne figure pas dans la bd
					{
						echo 'L&rsquo;adresse &laquo;&nbsp;' . $_POST['email'] . '&nbsp;&raquo; n&rsquo;est pas inscrite &agrave; la newsletter.';
					}
					else
					{
						// On la supprime de la table
						mysql_query("DELETE FROM newsletter WHERE mail='" . $_POST['email'] . "'"); // Formulation et ex�cution de la requ�te
						echo 'L&rsquo;adresse &laquo;&nbsp;' . $_POST['email'] . '&nbsp;&raquo; a bien &eacute;t&eacute; d&eacute;sinscrite de la newsletter.';
					}
					
					mysql_free_result($result);	// Lib�ration des ressources associ�es au jeu de r�sultats
					mysql_close();
				}
				else
				{
					echo 'Veuillez saisir une adresse e-mail valide.';
				}
			}
		?>
		</p>
	</div>	
	
<?php include('bas.php') ?>