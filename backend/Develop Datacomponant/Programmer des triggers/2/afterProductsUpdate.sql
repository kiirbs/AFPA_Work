DELIMITER $$

DROP TRIGGER if EXISTS afterProductsUpdate $$

CREATE TRIGGER afterProductsUpdate
AFTER UPDATE ON products
FOR EACH ROW
BEGIN
	DECLARE idc INT;
	DECLARE stock INT;
	DECLARE stockMax INT;
	SET idc = NEW.pro_id;
	SET stock = NEW.pro_stock;
	SET stockMax = (SELECT pro_stock_alert FROM products WHERE pro_id = idc);
	if (stock < stockMax) then INSERT INTO commanderArticle(codart, qte, daydate) VALUES (idc, stock, NOW());
	END if;
END$$

DELIMITER ;