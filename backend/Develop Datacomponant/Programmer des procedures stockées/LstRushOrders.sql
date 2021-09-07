DELIMITER $$

DROP PROCEDURE if EXISTS LstRushOrders $$

CREATE PROCEDURE LstRushOrders ()

BEGIN 
	SELECT * FROM orders
	WHERE ord_status = 'commande urgente';
END $$

DELIMITER ;

CALL LstRushOrders();