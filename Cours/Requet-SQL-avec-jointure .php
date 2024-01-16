
Requet SQL avec jointure : !!!!! Toujour recupere la clés pour eviter toute erreurs !!!!! count(*)compte compte le nombre de ligne sum compte la colonne 

SELECT clients.num_client, clients.nom_client, commandes.num_commande, commandes.date_commande -> tu recherche tous ces attribut 
FROM clients, commandes                                                                        -> dans la table clients et la table 
WHERE YEAR(commandes.date_commande)=2023                                                       -> ou année(commandes.date_....)
AND clients.num_client = commandes.num_client                                                  -> et la table et l'attribut et egale a cette table et cette attribut 
ORDER BY clients.num_client ASC;   							       -> par ordre table attribut ascendant 


     INNER JOIN : jointure interne pour retourner les enregistrements quand la condition est vrai dans les 2 tables. C’est l’une des jointures les plus communes.
Permet de trouver tout les client qui ont un nul et suppr ou modifier ou autre 

SELECT nom_client, prenom_client
FROM clients 
INNER JOIN commandes ON clients.num_client = commandes.num_client
ORDER BY nom_client;

SELECT clients.num_client, clients.nom_client, clients.prenom_client, clients.code_ville, clients.num_client, commandes.num_commande
FROM clients
JOIN commandes ON clients.num_client = commandes.num_client
ORDER BY nom_client;

SELECT DISTINCT clients.nom_client, clients.prenom_client  -------->!!!! Distinc enleve les doublon mais faire attention car sa peut retirer deux client du meme nom !!!!
FROM clients
INNER JOIN commandes ON clients.num_client = commandes.num_client 
WHERE YEAR(commandes.date_commande)=2023;

SELECT famille_article.nom_famille , COUNT(*) AS "nb article" ----> COUNT combient de famille_article
FROM famille_article
INNER JOIN article ON famille_article.num_famille = article.num_famille
GROUP BY famille_article.nom_famille;
    CROSS JOIN : jointure croisée permettant de faire le produit cartésien de 2 tables. En d’autres mots, permet de joindre chaque lignes d’une table avec chaque lignes d’une seconde table. Attention, le nombre de résultats est en général très élevé.





    LEFT JOIN (ou LEFT OUTER JOIN) : jointure externe pour retourner tous les enregistrements de la table de gauche (LEFT = gauche) même si la condition n’est pas vérifié dans l’autre table.




    RIGHT JOIN (ou RIGHT OUTER JOIN) : jointure externe pour retourner tous les enregistrements de la table de droite (RIGHT = droite) même si la condition n’est pas vérifié dans l’autre table.





    FULL JOIN (ou FULL OUTER JOIN) : jointure externe pour retourner les résultats quand la condition est vrai dans au moins une des 2 tables.








    SELF JOIN : permet d’effectuer une jointure d’une table avec elle-même comme si c’était une autre table.



    NATURAL JOIN : jointure naturelle entre 2 tables s’il y a au moins une colonne qui porte le même nom entre les 2 tables SQL

    UNION JOIN : jointure d’union