<?php
	/*Id�e graphique (discussion en cours) :
		L'id�e est de refl�ter une ambiance de r�flexion
			=> graphisme sobre et �pur�
			Couleurs � dominances noires et blanches avec des touches pourpres pour remonter la couleur ?
	
	Plan g�n�ral du site :
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
?>