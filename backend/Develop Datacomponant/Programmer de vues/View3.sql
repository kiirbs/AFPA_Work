CREATE VIEW ListeResa
AS 
SELECT reservation.*, CONCAT (cli_nom, ' ', cli_prenom) AS NomComplet FROM reservation, clients
WHERE cli_id = res_cli_id;