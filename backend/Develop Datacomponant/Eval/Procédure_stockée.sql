
DELIMITER |

CREATE PROCEDURE facture(
					  p_id INT(4)
					  )

BEGIN
    SELECT ROUND(SUM((ode_unit_price * ode_quantity) * (1-(ode_discount/100))),2) FROM orders_details
    JOIN orders ON ode_ord_id = ord_id
    WHERE p_id = ord_id;
END |

DELIMITER ;