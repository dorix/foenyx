<?php
	/*Idée graphique (discussion en cours) :
		L'idée est de refléter une ambiance de réflexion
			=> graphisme sobre et épuré
			Couleurs à dominances noires et blanches avec des touches pourpres pour remonter la couleur ?
	
	Plan général du site :
		Accueil
			-Présentation du site
		Comices
			Consul
				-Informations diverses
				-Date des prochaines réunions des Comices
				-Date des prochaines séances du Collège
				Collège Consulaire
					-Liste des membres
					-Actualités
						-Dernières décisions
						-Prochaines séances
						-Débats en cours
					Réglement
				Stratège
					-Organisation des jeux
					-Plan de défense (présentation et propositions)
					Fermiers Généraux
						-Liste
						-Dépôt de plaintes
						if(visiteur=Fermier Général) {
							-Listes des impôts
							-Plaintes
							-Enquête WHERE enquêteur=visiteur
						} else if(visiteur=Sénateur) {
							-Enquêtes en cours
						} else if(visiteur=nom) {
							-Impôts WHERE contribuable=visiteur
						}
				Censorats
					Économie
						-Actualités et projets
						-Indication du PIB, de la masse monétaire etc.
						Intendance Générale de l'Activité
							foreach(Activité Générale) {
								-Secrétaire Général
								-Liste des ouvriers
								-Description des activités
								-Produits
								-Interface de contrats
								-Interface de candidature
								-Interface de déclaration de revenus
							} foreach(Activté Individuelle) {
								-Liste des ouvriers
								-Déclaration d'activités
								-Liste de produits
								-Interface de contrats
								-Interface de candidature
								-Interface de délcaration de revenus
							}
							-Interface de création d'entreprise
					Urbanisme
						-Actualités et projets
						foreach(Édilat) {
							-Édile(s)
							-Description du projet
							-Forum
						}
					//{Intégration et Histoire}(Intitulé à modifier)
						-Actualités
						-Historique
						-Inscriptions et candidatures*/
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title> Test </title>
		<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
	</head>
	<body>
		<button type="button" class="btn btn-primary">Primary</button>
	</body>
</html>