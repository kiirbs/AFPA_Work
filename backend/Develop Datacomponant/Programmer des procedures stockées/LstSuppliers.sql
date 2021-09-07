DELIMITER $$

DROP procedure if EXISTS LstSuppliers $$

CREATE PROCEDURE LstSuppliers ()

BEGIN 
	SELECT sup_name FROM suppliers
	WHERE EXISTS (select pro_sup_id from products where pro_sup_id = sup_id);
END $$

DELIMITER ;

CALL LstSuppliers();