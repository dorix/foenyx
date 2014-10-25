<?php
	/*CAHIER DES CHARGES*/
		/*Charte graphique :
			Ambiance : Calme, rigueur, sérieux (type journal/thèse)
				Blanc et noir relevé de pourpre
				pourpre 1 : #800080
				pourpre 2 : #350035
				
			Proposition de plan de page :
				Barre horizontale fixée en haut délimitée par une barre horizontale épaisse noire
					->Informations personnelles, membres connectés etc. (si l'utilisateur est connecté)
					->Informations générales et lien d'inscription/champs de connexion (si l'utilisateur n'est pas connecté)
				Barre verticale fixée à droite délimitée par une barre verticale épaisse noire
					->Dernières actualités en mode billets (si l'utilisateur est connecté)
				Menu déroulant pourpre en parties séparées mais très proches
					->fixé contre la barre horizontale du haut, à gauche
				En-tête de page pourpre
					->Informations générales de la page (exemple : membres du Collège etc.)
				Contenu en deux colonnes séparées par un trai noir sans fond
					->A gauche, le corps principal de la page
					->A droite, les annexes ("asides")
				Pied de page en position normale en bas de page, noir de toute la largeur.
					->Informations légales
					->Plan du site
					->Liens externes
				Marge du gabarit à droite
					->Publicités ?*/
		/*Plan résumé :
				/
					index
					/Organisation
						index
						Consulat
						/Fermiers
							index
							Levée
						Comices
					/Economie
						index
						/Intendant_General
							index
							{Activités Publiques}
							{Activités Particulières}
					/Civilite
						index
						Archives
						Urbanisme*/
		/*Plan détaillé :
			Accueil
				-En-tête
					->
				-Corps
					->
				-Annexes
					->
			/Organisation
				Accueil
					-En-tête
						->Consul, Stratège, Intendant Général des Activités
							(avatars et pseudonymes en haut à gauche)
						->Censeurs Généraux
							(avatars et pseudonymes au milieu à gauche)
						->Date des séances des Comices et du Collège Consulaire
							(en bas à gauche)
						->Autres censeurs
							(avatars à droite)
					-Corps
						->
					-Annexes
						->
				Consulat
					-En-tête
						->Sénateurs
							(avatars et pseudonymes en haut à gauche)
						->Tribuns
							(avatars au milieu à gauche)
						->Description
							(en bas à gauche)
						->Consul
							(avatar et pseudonyme en haut à droite)
						->Séances à venir
							(à droite)
					-Corps
						->Console du règlement
						->Billets et commentaires (publication des Tribuns, et Sénateurs d'une autre couleur, modération par les Sénateurs et le Consul)
					-Annexes
						-> <iframe src="https://lite4.framapad.org/p/7C7VNgD3sS">
						-> Poster une demande (pour les utilisateurs connectés uniquement) / Voir les demandes (Pour les membres du Collège et pendant les séances du Collège)
				/Fermiers Généraux
					Accueil
						-En-tête
							->Stratège
								(avatar et pseudonyme en haut à gauche)
							->Screen de l'arène
								(au milieu à gauche)
							->Date des jeux
								(enbas à gauche)
							->Fermiers Généraux
								(avatars à droite)
						-Corps
							->Billets et commentaires (modération par les Sénateurs, le Stratège et les Fermiers Généraux)
						-Annexes
							->Porter plainte
					Levée
						-En-tête
							->Masse monétaire du serveur, PIB de la colonie, Budget de la colonie
								(En haut à gauche)
							->Fermiers Généraux
								(Avatars à droite)
						-Corps
							(Pour les Fermiers Généraux)
								->Liste des membres et de leur dû
									(Date de la dernière levée, pseudo du Fermier qui s'en est porté garant, date de la prochaine levée et moyen de valider une levée)
							(Pour les membres normaux)
								->Informations personnelles
						-Annexes
							->Détail du fonctionnement de la levée
				/Comices
					Accueil
						-En-tête
							->Consul, Stratège, Intendant Général des Activités
								(avatars et pseudonymes en haut à gauche)
							->Censeurs Généraux
								(avatars et pseudonymes au milieu à gauche)
							->Date des séances des Comices et du Collège Consulaire
								(en bas à gauche)
							->Autres censeurs
								(avatars à droite)
						-Corps
							->Billets et commentaires (modérés par les Tribuns, Sénateurs et Consul)
						-Annexes
							->Donner des points positifs et négatifs aux responsables
			/Économie
				Accueil
					-En-tête
						->Masse monétaire du serveur, PIB de la colonie, Budget de la colonie
							(En haut à gauche)
						->(...)
						->Censeur Général de l'Économie, Censeurs de l'Économie
							(Avatars à droite)
					-Corps
						->Billets et commentaires (modérés par les Sénateurs, le Consul et les Censeurs)
					-Annexes
						->Créer une activité
				/Intendant Général des Activités
					Accueil
						-En-tête
							->Masse monétaire du serveur, PIB de la colonie, Budget de la colonie
								(En haut à gauche)
							->Nombre d'activités générales, Chiffre d'Affaire des activités générales, Nb d'associés aux activités générales,
								(Au milieu à gauche)
							->Nombre d'activités particulières, Nombre d'associés aux activités particulières
								(En bas à gauche)
							->IGA, Secrétaires Généraux
								(Avatars à Droite)
						-Corps
							Billets et commentaires (modérés par les Sénateurs de l'IGA)
						-Annexes
							->Donner des points positifs et négatifs aux Secrétaires Généraux
					{Activités Générales}
						-En-tête
							->Conseil d'Administration de l'Activité
								(Avatars en haut à gauche)
							->Chiffre d'affaire, nombre d'associés, nombre d'usines, surface occupée
								(au milieu à gauche)
							->Description de l'activité
								(en bas à gauche)
							->Associés
								(Avatars à droite)
						-Corps
							->Présentation détaillée
							->Catalogue (avec possibilité de commander certains produits depuis le site, + gestion du stock pour les Conseillers)
						-Annexes
							->Formulaire de candidature (/Valider ou refuser les candidatures pour les Secrétaires généraux et les membres du CA)
							->Envoyer un message au CA
							->Déclarer les revenus (pour le Secrétaire Général)
					{Activités Particulières}
						-En-tête
							->Directeur, titre de l'activité
								(Avatar en haut à gauche)
							->Description libre
								(à gauche)
							->Associés
								(avatars à droite)
						-Corps
							->Présentation libre
							->Catalogue (avec possibilité de commander certains produits depuis le site + gestion du stock pour le Directeur et ceux qu'il voudra)
						-Annexes
							->Envoyer un message au CA
							->Déclarer les revenus (pour le Directeur)
			/Civilité
				Accueil
					-En-tête
						->Censeur Général de la Civilité, Censeurs de la Civilité
							(en haut et au milieu à gauche)
						->Nombre de membres, Âge du serveur, description rapide
							(en bas à gauche)
						->Derniers membres inscrits
							(à droite)
					-Corps
						->Conditions d'inscription
						->Résumé des règles
						->Résumé des actualités
					-Annexes
						->Formulaire d'inscription
				Archives
					-En-tête
						->Censeur Général de la Civilité, Censeurs de la Civilité
							(en haut et au milieu à gauche)
						->Âge du serveur, nombre de billets postés, nombre de modifications du réglement
							(en bas à gauche)
						->Derniers membres inscrits
							(à droite)
					-Corps
						->Articles par le Censorat
					-Annexes
						->Billets et commentaires (modérés par le censorat et les sénateurs)
						->Derniers articles publiés
						->Rechercher un article écrit par le censorat par menu déroulant (qui s'affichera dans le corps)
				Urbanisme
					-En-tête
						->Censeur Général de l'Urbanisme, Censeurs de l'Urbanisme
							(en haut à gauche)
						->Surface occupée
							(au milieu à gauche)
						->Surface des différents projets
							(en bas à gauche)
						->Édiles
							(à droite, défilant s'ils sont trop nombreux)
					-Corps
						->Billets et commentaires (modéré par les sénateurs)
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
		<meta name="Keywords" content="Serveur, Minecraft, Gratuit, Politique, Démocratie, FTB, Feed The Beast"/>
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
									<p><a href="index.php">Levée</a></p>
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
						<h1><a href="index.php">Économie</a></h1>
					</div>
					<div class="ligne_menu_intendance">
						<table>
							<tr>
								<th>
									<p><a href="index.php">Intendance Générale</a></p>
								</th>
								<td>
									<p><a href="index.php">Activités publiques</a></p>
								</td>
							</tr>
							<tr>
								<td></td>
								<td>
									<p><a href="index.php">Activités particulières</a></p>
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
					<p>Le billet de banque a été inventé par Louis XIV pour simplifier les transactions : les banques concervaient l'or dans des coffres-forts, et offraient aux dépositaires un reçu censé garantir l'existence de l'or dans les coffres, de telle sorte qu'il suffisait de se présenter à la banque armé de son billet pour recevoir la somme d'or précisée sur le billet. Mais le manque de minerais et l'essor économique de l'ère moderne a grandement compliqué l'usage des pièces d'or, si bien que très vite, on a pris ces billets pour l'or qu'ils représentaient, et le billet de banque a peu à peu remplacé l'étalon d'or.</p>
					<p>
						<strong>Marius</strong>
						<hr/>
						<em>24/10/2014, 9:51</em>
					</p>
					<div class="commentaire_gauche">
						<p>
							<hr/>
							<strong>John Doe :</strong>
							Bah c'est moins abscons quand c'est en français !
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
							Abscons c'est plus-ou-moins synonyme de "tordu" ou "difficile à comprendre" en philosophie, Jean : c'est pas contre toi ! <br/>
							Mais c'est surtout moins abscons quand tous les mots sont là...
							<em>24/10/2014, 9:57</em>
						</p>
						<p>
							<hr/>
							<strong>Jean Smith :</strong>
							Enfin n'empêche que John il est con.
							<em>24/10/2014, 9:55</em>
						</p>
						<p>
							<hr/>
							<strong>Lambda Dupont</strong>
							F'aut dire qu'il ne s'est pas foulé pour chercher son pseudo !
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
							D'autant que c'est pas du latin, dans la mesure où il manque les trois quarts des mots.
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