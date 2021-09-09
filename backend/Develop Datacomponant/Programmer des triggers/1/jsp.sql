

UPDATE lignedecommande
SET id_produit = 6, quantite = 10, prix = 80
WHERE id_commande = 1 AND id_produit = 6;

INSERT INTO lignedecommande(id_commande, id_produit, quantite, prix) VALUES (1, 2, 5, 100);