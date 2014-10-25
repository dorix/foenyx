<?php
	/*CAHIER DES CHARGES*/
		/*Charte graphique :
			Ambiance : Calme, rigueur, s�rieux (type journal/th�se)
				Blanc et noir relev� de pourpre
				pourpre 1 : #800080
				pourpre 2 : #350035
				
			Proposition de plan de page :
				Barre horizontale fix�e en haut d�limit�e par une barre horizontale �paisse noire
					->Informations personnelles, membres connect�s etc. (si l'utilisateur est connect�)
					->Informations g�n�rales et lien d'inscription/champs de connexion (si l'utilisateur n'est pas connect�)
				Barre verticale fix�e � droite d�limit�e par une barre verticale �paisse noire
					->Derni�res actualit�s en mode billets (si l'utilisateur est connect�)
				Menu d�roulant pourpre en parties s�par�es mais tr�s proches
					->fix� contre la barre horizontale du haut, � gauche
				En-t�te de page pourpre
					->Informations g�n�rales de la page (exemple : membres du Coll�ge etc.)
				Contenu en deux colonnes s�par�es par un trai noir sans fond
					->A gauche, le corps principal de la page
					->A droite, les annexes ("asides")
				Pied de page en position normale en bas de page, noir de toute la largeur.
					->Informations l�gales
					->Plan du site
					->Liens externes
				Marge du gabarit � droite
					->Publicit�s ?*/
		/*Plan r�sum� :
				/
					index
					/Organisation
						index
						Consulat
						/Fermiers
							index
							Lev�e
						Comices
					/Economie
						index
						/Intendant_General
							index
							{Activit�s Publiques}
							{Activit�s Particuli�res}
					/Civilite
						index
						Archives
						Urbanisme*/
		/*Plan d�taill� :
			Accueil
				-En-t�te
					->
				-Corps
					->
				-Annexes
					->
			/Organisation
				Accueil
					-En-t�te
						->Consul, Strat�ge, Intendant G�n�ral des Activit�s
							(avatars et pseudonymes en haut � gauche)
						->Censeurs G�n�raux
							(avatars et pseudonymes au milieu � gauche)
						->Date des s�ances des Comices et du Coll�ge Consulaire
							(en bas � gauche)
						->Autres censeurs
							(avatars � droite)
					-Corps
						->
					-Annexes
						->
				Consulat
					-En-t�te
						->S�nateurs
							(avatars et pseudonymes en haut � gauche)
						->Tribuns
							(avatars au milieu � gauche)
						->Description
							(en bas � gauche)
						->Consul
							(avatar et pseudonyme en haut � droite)
						->S�ances � venir
							(� droite)
					-Corps
						->Console du r�glement
						->Billets et commentaires (publication des Tribuns, et S�nateurs d'une autre couleur, mod�ration par les S�nateurs et le Consul)
					-Annexes
						-> <iframe src="https://lite4.framapad.org/p/7C7VNgD3sS">
						-> Poster une demande (pour les utilisateurs connect�s uniquement) / Voir les demandes (Pour les membres du Coll�ge et pendant les s�ances du Coll�ge)
				/Fermiers G�n�raux
					Accueil
						-En-t�te
							->Strat�ge
								(avatar et pseudonyme en haut � gauche)
							->Screen de l'ar�ne
								(au milieu � gauche)
							->Date des jeux
								(enbas � gauche)
							->Fermiers G�n�raux
								(avatars � droite)
						-Corps
							->Billets et commentaires (mod�ration par les S�nateurs, le Strat�ge et les Fermiers G�n�raux)
						-Annexes
							->Porter plainte
					Lev�e
						-En-t�te
							->Masse mon�taire du serveur, PIB de la colonie, Budget de la colonie
								(En haut � gauche)
							->Fermiers G�n�raux
								(Avatars � droite)
						-Corps
							(Pour les Fermiers G�n�raux)
								->Liste des membres et de leur d�
									(Date de la derni�re lev�e, pseudo du Fermier qui s'en est port� garant, date de la prochaine lev�e et moyen de valider une lev�e)
							(Pour les membres normaux)
								->Informations personnelles
						-Annexes
							->D�tail du fonctionnement de la lev�e
				/Comices
					Accueil
						-En-t�te
							->Consul, Strat�ge, Intendant G�n�ral des Activit�s
								(avatars et pseudonymes en haut � gauche)
							->Censeurs G�n�raux
								(avatars et pseudonymes au milieu � gauche)
							->Date des s�ances des Comices et du Coll�ge Consulaire
								(en bas � gauche)
							->Autres censeurs
								(avatars � droite)
						-Corps
							->Billets et commentaires (mod�r�s par les Tribuns, S�nateurs et Consul)
						-Annexes
							->Donner des points positifs et n�gatifs aux responsables
			/�conomie
				Accueil
					-En-t�te
						->Masse mon�taire du serveur, PIB de la colonie, Budget de la colonie
							(En haut � gauche)
						->(...)
						->Censeur G�n�ral de l'�conomie, Censeurs de l'�conomie
							(Avatars � droite)
					-Corps
						->Billets et commentaires (mod�r�s par les S�nateurs, le Consul et les Censeurs)
					-Annexes
						->Cr�er une activit�
				/Intendant G�n�ral des Activit�s
					Accueil
						-En-t�te
							->Masse mon�taire du serveur, PIB de la colonie, Budget de la colonie
								(En haut � gauche)
							->Nombre d'activit�s g�n�rales, Chiffre d'Affaire des activit�s g�n�rales, Nb d'associ�s aux activit�s g�n�rales,
								(Au milieu � gauche)
							->Nombre d'activit�s particuli�res, Nombre d'associ�s aux activit�s particuli�res
								(En bas � gauche)
							->IGA, Secr�taires G�n�raux
								(Avatars � Droite)
						-Corps
							Billets et commentaires (mod�r�s par les S�nateurs de l'IGA)
						-Annexes
							->Donner des points positifs et n�gatifs aux Secr�taires G�n�raux
					{Activit�s G�n�rales}
						-En-t�te
							->Conseil d'Administration de l'Activit�
								(Avatars en haut � gauche)
							->Chiffre d'affaire, nombre d'associ�s, nombre d'usines, surface occup�e
								(au milieu � gauche)
							->Description de l'activit�
								(en bas � gauche)
							->Associ�s
								(Avatars � droite)
						-Corps
							->Pr�sentation d�taill�e
							->Catalogue (avec possibilit� de commander certains produits depuis le site, + gestion du stock pour les Conseillers)
						-Annexes
							->Formulaire de candidature (/Valider ou refuser les candidatures pour les Secr�taires g�n�raux et les membres du CA)
							->Envoyer un message au CA
							->D�clarer les revenus (pour le Secr�taire G�n�ral)
					{Activit�s Particuli�res}
						-En-t�te
							->Directeur, titre de l'activit�
								(Avatar en haut � gauche)
							->Description libre
								(� gauche)
							->Associ�s
								(avatars � droite)
						-Corps
							->Pr�sentation libre
							->Catalogue (avec possibilit� de commander certains produits depuis le site + gestion du stock pour le Directeur et ceux qu'il voudra)
						-Annexes
							->Envoyer un message au CA
							->D�clarer les revenus (pour le Directeur)
			/Civilit�
				Accueil
					-En-t�te
						->Censeur G�n�ral de la Civilit�, Censeurs de la Civilit�
							(en haut et au milieu � gauche)
						->Nombre de membres, �ge du serveur, description rapide
							(en bas � gauche)
						->Derniers membres inscrits
							(� droite)
					-Corps
						->Conditions d'inscription
						->R�sum� des r�gles
						->R�sum� des actualit�s
					-Annexes
						->Formulaire d'inscription
				Archives
					-En-t�te
						->Censeur G�n�ral de la Civilit�, Censeurs de la Civilit�
							(en haut et au milieu � gauche)
						->�ge du serveur, nombre de billets post�s, nombre de modifications du r�glement
							(en bas � gauche)
						->Derniers membres inscrits
							(� droite)
					-Corps
						->Articles par le Censorat
					-Annexes
						->Billets et commentaires (mod�r�s par le censorat et les s�nateurs)
						->Derniers articles publi�s
						->Rechercher un article �crit par le censorat par menu d�roulant (qui s'affichera dans le corps)
				Urbanisme
					-En-t�te
						->Censeur G�n�ral de l'Urbanisme, Censeurs de l'Urbanisme
							(en haut � gauche)
						->Surface occup�e
							(au milieu � gauche)
						->Surface des diff�rents projets
							(en bas � gauche)
						->�diles
							(� droite, d�filant s'ils sont trop nombreux)
					-Corps
						->Billets et commentaires (mod�r� par les s�nateurs)
					-Annexe
						->Proposer un projet*/
?>
<!DOCTYPE html>
<html>
    <head lang="fr">
		
		<!--[idf lt IE 9]
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js></script>
		[endif]-->
		
		<meta name="Description" content=""/>
		<meta name="Keywords" content="Serveur, Minecraft, Gratuit, Politique, D�mocratie, FTB, Feed The Beast"/>
		<meta name="Author" content="Foenyx"/>
		
		<meta name="Gentator" content="Maquette"/>
		<meta name="Robots" content="index, folow, archive"/>
		<meta name="Robots" content="all"/>
		<meta name="Rating" content="General"/>
		<meta name="Revisit-after" content="14 days"/>
		
		<link rel="stylesheet" href="style.css"/>

        <title>Foenyx</title>
    </head>

    <body>
		<div id="page"/>
			
			<div id="ligne_verticale"></div>
			<div id="ligne_horizontale"></div>
			
			<header>
				<div id="conteneur_screens">
				</div>
				
				<div id="conteneur_avatar">
				</div>
				
				<div id="conteneur_informations_entete">
				</div>
				
				<div id="conteneur_messages_entete">
				</div>
				
				<div id="conteneur_utilisateurs_connectes_entete">
				</div>
			</header>
			
			<nav>
				<div id="premier_menu">
					<div class="titre_menu">
						<h1><a href="index.php">Organisation</a></h1>
					</div>
					<div class="ligne_menu">
						<table>
							<tr>
								<th>
									<p><a href="index.php">Consulat</a></p>
								</th>
							</tr>
						</table>
					</div>
					<div class="ligne_menu_fermiers">
						<table>
							<tr>
								<th>
									<p><a href="index.php">Fermiers</a></p>
								</th>
								<td>
									<p><a href="index.php">Lev�e</a></p>
								</td>
							</tr>
						</table>
					</div>
					<div class="ligne_menu">
						<table>
							<tr>
								<th>
									<p><a href="index.php">Comices</a></p>
								</th>
							</tr>
						</table>
					</div>
				</div>
				
				<div id="deuxieme_menu">
					<div class="titre_menu">
						<h1><a href="index.php">�conomie</a></h1>
					</div>
					<div class="ligne_menu_intendance">
						<table>
							<tr>
								<th>
									<p><a href="index.php">Intendance G�n�rale</a></p>
								</th>
								<td>
									<p><a href="index.php">Activit�s publiques</a></p>
								</td>
							</tr>
							<tr>
								<td></td>
								<td>
									<p><a href="index.php">Activit�s particuli�res</a></p>
								</td>
							</tr>
						</table>
					</div>
				</div>
				
				<div id="troisieme_menu">
					<div class="titre_menu">
						<h1><a href="index.php">Civisation</a></h1>
					</div>
					<div class="ligne_menu">
						<table>
							<tr>
								<th>
									<p><a href="index.php">Archives</a></p>
								</th>
							</tr>
						</table>
					</div>
					<div class="ligne_menu">
						<table>
							<tr>
								<th>
									<p><a href="index.php">Urbanisme</a></p>
								</th>
							</tr>
						</table>
					</div>
				</div>
			</nav>
			
			<div id="section_gauche">
				<div class="billet_gauche">
					<h1>Billet de banque</h1>
					<p>Le billet de banque a �t� invent� par Louis XIV pour simplifier les transactions : les banques concervaient l'or dans des coffres-forts, et offraient aux d�positaires un re�u cens� garantir l'existence de l'or dans les coffres, de telle sorte qu'il suffisait de se pr�senter � la banque arm� de son billet pour recevoir la somme d'or pr�cis�e sur le billet. Mais le manque de minerais et l'essor �conomique de l'�re moderne a grandement compliqu� l'usage des pi�ces d'or, si bien que tr�s vite, on a pris ces billets pour l'or qu'ils repr�sentaient, et le billet de banque a peu � peu remplac� l'�talon d'or.</p>
					<p>
						<strong>Marius</strong>
						<hr/>
						<em>24/10/2014, 9:51</em>
					</p>
					<div class="commentaire_gauche">
						<p>
							<hr/>
							<strong>John Doe :</strong>
							Bah c'est moins abscons quand c'est en fran�ais !
							<em>24/10/2014, 9:53</em>
						</p>
						<p>
							<hr/>
							<strong>Jean Smith :</strong>
							C'est toi qu'es con oui !
							<em>24/10/2014, 9:55</em>
						</p>
						<p>
							<hr/>
							<strong>Doe John :</strong>
							Abscons c'est plus-ou-moins synonyme de "tordu" ou "difficile � comprendre" en philosophie, Jean : c'est pas contre toi ! <br/>
							Mais c'est surtout moins abscons quand tous les mots sont l�...
							<em>24/10/2014, 9:57</em>
						</p>
						<p>
							<hr/>
							<strong>Jean Smith :</strong>
							Enfin n'emp�che que John il est con.
							<em>24/10/2014, 9:55</em>
						</p>
						<p>
							<hr/>
							<strong>Lambda Dupont</strong>
							F'aut dire qu'il ne s'est pas foul� pour chercher son pseudo !
							<em>24/10/2014, 10:03</em>
						</p>
						<form method="POST" action="index.php">
							<fieldset>
								<input type="Hidden" name="article" value="1"/>
								<textarea style="resize:none" placeholder="Commentez !"></textarea>
								<input type="Submit" value="Commenter"/>
							</fieldset>
						</form>
					</div>
				</div>
				<div class="billet_gauche">
					<h1>Titre du billet</h1>
					<p>Omitto iuris dictionem in libera civitate contra leges senatusque consulta; caedes relinquo; libidines praetereo, quarum acerbissimum extat indicium et ad insignem memoriam turpitudinis et paene ad iustum odium imperii nostri, quod constat nobilissimas virgines se in puteos abiecisse et morte voluntaria necessariam turpitudinem depulisse. Nec haec idcirco omitto, quod non gravissima sint, sed quia nunc sine teste dico.</p>
					<p>
						<strong>Marius</strong>
						<hr/>
						<em>24/10/2014, 09:36</em>
					</p>
					<div class="commentaire_gauche">
						<p>
							<hr/>
							<strong>John Doe :</strong>
							Pas la peine de parler latin, personne ne sait le lire !
							<em>24/10/2014, 9:40</em>
						</p>
						<p>
							<hr/>
							<strong>Doe John :</strong>
							D'autant que c'est pas du latin, dans la mesure o� il manque les trois quarts des mots.
							<em>24/10/2014, 9:42</em>
						</p>
						<form method="POST" action="index.php">
							<fieldset>
								<input type="Hidden" name="article" value="1"/>
								<textarea style="resize:none" placeholder="Commentez !"></textarea>
								<input type="Submit" value="Commenter"/>
							</fieldset>
						</form>
					</div>
				</div>
			</div>
			
			<section>
				<div id="bannierre">
				</div>
				
				<div id="corps">
				</div>
				
				<div id="annexes">
				</div>
			</section>
			
			<footer>
			</footer>
		</div>
			
		<div id="section_pub">
		</div>
	
	</body>
</html>