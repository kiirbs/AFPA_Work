	/*
	Il est necessaires de remplir les tables dans le bon ordre afin de s'assurer du bon fonctionnement du script. 
	On commence par remplir les tables ne possedant pas de 'foreign key' et celles qui ne possedent aucun liens 
	avec une autre table car elles sont a la source de toute la base de donné.
	Apres seulement, on peut s'occuper de remplir les tables possedants des foreign key car celles ci ont besoin 
	des tables auxquelles elles sont liées pour fonctionner correctement (du fait que ces dernieres utilisent des 
	informations fournis dans d'autres tables). Il faut toutefois continuer a respecter l'ordre des clefs etrangeres 
	entre les tables qui en possedent. Par exemple, si on a 3 tables (T1, T2 et T3), que T2 possede une clef 
	etrangere liée a T1, et que T3 en possede une liée a T2, alors on doit remplir les tables dans cet ordre :
		T1, puis T2, et enfin T3
	On ne peut ainsi pas remplir T3 avant T2 car T3 a besoin des elements de T2 pour fonctionner.
	*/