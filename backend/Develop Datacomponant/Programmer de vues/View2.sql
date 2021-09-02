CREATE VIEW ListeChambre
AS 
SELECT cha_numero, hot_nom FROM chambre, hotel
WHERE hot_id = cha_hot_id;