CREATE VIEW vDetails
AS
SELECT pro_ref, SUM(ode_quantity) AS qqtTot, SUM(ode_unit_price*ode_quantity) AS prixTot FROM products, orders_details
WHERE ode_pro_id = pro_id
GROUP BY ode_pro_id;