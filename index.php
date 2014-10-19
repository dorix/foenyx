<?php
	/*CAHIER DES CHARGES
		/*Charte graphique :
			Ambiance : Calme, rigueur, s�rieux (type journal/th�se)
				Blanc et noir relev� de pourpre
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
	
	/*Id�e graphique (discussion en cours) :
		L'id�e est de refl�ter une ambiance de r�flexion
			=> graphisme sobre et �pur�
			Couleurs � dominances noires et blanches avec des touches pourpres pour remonter la couleur ?*/
	
	/*Plan g�n�ral du site :
		Accueil
			-Pr�sentation du site
		Comices
			Consul
				-Informations diverses
				-Date des prochaines r�unions des Comices
				-Date des prochaines s�ances du Coll�ge
				Coll�ge Consulaire
					-Liste des membres
					-Actualit�s
						-Derni�res d�cisions
						-Prochaines s�ances
						-D�bats en cours
					R�glement
				Strat�ge
					-Organisation des jeux
					-Plan de d�fense (pr�sentation et propositions)
					Fermiers G�n�raux
						-Liste
						-D�p�t de plaintes
						if(visiteur=Fermier G�n�ral) {
							-Listes des imp�ts
							-Plaintes
							-Enqu�te WHERE enqu�teur=visiteur
						} else if(visiteur=S�nateur) {
							-Enqu�tes en cours
						} else if(visiteur=nom) {
							-Imp�ts WHERE contribuable=visiteur
						}
				Censorats
					�conomie
						-Actualit�s et projets
						-Indication du PIB, de la masse mon�taire etc.
						Intendance G�n�rale de l'Activit�
							foreach(Activit� G�n�rale) {
								-Secr�taire G�n�ral
								-Liste des ouvriers
								-Description des activit�s
								-Produits
								-Interface de contrats
								-Interface de candidature
								-Interface de d�claration de revenus
							} foreach(Activt� Individuelle) {
								-Liste des ouvriers
								-D�claration d'activit�s
								-Liste de produits
								-Interface de contrats
								-Interface de candidature
								-Interface de d�lcaration de revenus
							}
							-Interface de cr�ation d'entreprise
					Urbanisme
						-Actualit�s et projets
						foreach(�dilat) {
							-�dile(s)
							-Description du projet
							-Forum
						}
					//{Int�gration et Histoire}(Intitul� � modifier)
						-Actualit�s
						-Historique
						-Inscriptions et candidatures*/