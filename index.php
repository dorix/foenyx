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