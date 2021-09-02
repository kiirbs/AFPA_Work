CREATE VIEW vVentesZoom
AS 
SELECT orders_details.*, pro_ref FROM orders_details, products
WHERE pro_ref = 'ZOOM';