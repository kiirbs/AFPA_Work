DELIMITER $$

CREATE TRIGGER maj_total 
AFTER INSERT ON lignedecommande
FOR EACH ROW
BEGIN
    DECLARE id_c INT;
    DECLARE tot DOUBLE;
    SET id_c = NEW.id_commande;
    SET tot = (SELECT sum(prix*quantite) FROM lignedecommande WHERE id_commande=id_c);
    UPDATE commande SET total=tot WHERE id=id_c;
END$$

DELIMITER ;