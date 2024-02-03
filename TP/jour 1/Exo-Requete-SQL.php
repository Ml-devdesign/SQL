<?php
// Requete SQL

// Liste des clients ( numéro de client , nom et prenom ) . Le résultat sera trié par ordre alphabetique :

$sql="SELECT clients.num_client, clients.nom_client 
FROM clients
ORDER BY clients.nom_client ASC";

// Liste des articles informatique :

$sql="SELECT article.num_article, article.description_article, famille_article.nom_famille
FROM article
JOIN famille_article ON article.num_famille = famille_article.num_famille
WHERE famille_article.nom_famille = 'informatique'";


// Liste des articles dont la quantité en stock est supérieurs à 100 :

$sql="SELECT article.description_article, article.num_article, article.quantite_stock 
FROM article 
WHERE article.quantite_stock > 100";

// liste des commandes  ( numero de facture , date  , num_client ) passées en janvier 2023

// Le résultat sera trié par numéro de commande :

$sql="SELECT commandes.num_commande, commandes.date_commande, commandes.num_client
FROM commandes
JOIN clients ON commandes.num_client = clients.num_client
WHERE YEAR(commandes.date_commande) = 2023 AND MONTH(commandes.date_commande) = 1
ORDER BY commandes.num_commande ASC";

// liste des commandes  ( numero de facture , date  , num_client, nom du client ) passées en janvier 2023. Le réultat sera trié par nom de client et par numéro de commande
 
$sql="SELECT commandes.num_commande, commandes.date_commande, commandes.num_client, clients.nom_client
FROM commandes
JOIN clients ON commandes.num_client = clients.num_client
WHERE YEAR(commandes.date_commande) = 2023 AND MONTH(commandes.date_commande) = 1
ORDER BY clients.nom_client ASC, commandes.num_commande ASC";

// Nombre de commandes totale 

$sql="SELECT COUNT(*) AS nombre_commandes_totales
FROM commandes";

// Nombre de commandes en 2023 

$sql="SELECT COUNT(*) AS nombre_commandes_totales
FROM commandes
WHERE YEAR(commandes.date_commande) = 2023";

// Nombre de commandes par année

$sql="SELECT YEAR(date_commande) AS annee, COUNT(*) AS nombre_commandes
FROM commandes
GROUP BY YEAR(date_commande)";

// Combien d'exemplaires de l'article 1 avons nous vendus

$sql="SELECT SUM(num_art=101) AS exemplaires_vendues
FROM `ligne_commande`";

// Quel client ( numero , nom , prenom) à commandé l'article 207 en 2023
// (là il faut travailler sur 3 tables )
SELECT clients.nom_client , clients.prenom_client, commandes.date_commande , article.num_article
FROM `clients` 
INNER JOIN commandes
WHERE YEAR(date_commande)=2023;


// Quel est le montant de la commande 1237

$sql="SELECT *
FROM commandes
WHERE num_commande = 1237";

// Quel est le chiffre d'affaires en 2023



// quel et le chiffre d'affaire par année


// quel le chiffre d'affaire par client


// quels sont les 3 meilleurs clients (LIMIT )



// liste des articles ( nom de l'article et la quantité ) achetés par le client  Meyer Julien


?>