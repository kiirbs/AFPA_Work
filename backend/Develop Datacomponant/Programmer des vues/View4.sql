CREATE VIEW ListeChambreHotelStation
AS 
SELECT cha_numero, hot_nom, sta_nom FROM chambre, hotel, station
WHERE sta_id = hot_sta_id AND hot_id = cha_hot_id;