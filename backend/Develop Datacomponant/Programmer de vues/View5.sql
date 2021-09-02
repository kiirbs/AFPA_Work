CREATE VIEW ListeResaClientHotel
AS 
SELECT reservation.*, CONCAT (cli_nom, ' ', cli_prenom) AS NomComplet, hot_nom FROM reservation, clients, hotel, chambre
WHERE (hot_id = cha_hot_id AND cha_id = res_cha_id AND res_cli_id = cli_id) AND cli_id = res_cli_id;