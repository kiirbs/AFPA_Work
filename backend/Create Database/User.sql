CREATE USER 'util1'@'localhost' IDENTIFIED BY 'mdpforutil1';

CREATE USER 'util2'@'localhost' IDENTIFIED BY 'mdpforutil2';

CREATE USER 'util3'@'localhost' IDENTIFIED BY 'mdpforutil3';

GRANT ALL PRIVILEGES ON gescom_afpa.*
TO 'util1'@'localhost' 
IDENTIFIED BY 'mdpforutil1';

GRANT SELECT 
ON gescom_afpa.*
TO 'util2'@'localhost' 
IDENTIFIED BY 'mdpforutil2';

GRANT SELECT
ON gescom_afpa.suppliers
TO 'util3'@'localhost' 
IDENTIFIED BY 'mdpforutil3';

