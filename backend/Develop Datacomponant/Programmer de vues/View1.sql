CREATE VIEW HotelListe
AS 
SELECT hot_nom, sta_nom FROM hotel, station
WHERE sta_id = hot_sta_id;
