DROP VIEW IF EXISTS v_catalogue_products;

CREATE VIEW v_catalogue_products
AS
SELECT DISTINCT cat_id, cat_name, pro_id, pro_ref, pro_name 
FROM categories, products
WHERE pro_cat_id = cat_id;