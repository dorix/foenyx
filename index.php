<?php
	/*CAHIER DES CHARGES
		/*Charte graphique :
			Ambiance : Calme, rigueur, sérieux (type journal/thèse)
				Blanc et noir relevé de pourpre
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
	
	/*Idée graphique (discussion en cours) :
		L'idée est de refléter une ambiance de réflexion
			=> graphisme sobre et épuré
			Couleurs à dominances noires et blanches avec des touches pourpres pour remonter la couleur ?*/
	
	/*Plan général du site :
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