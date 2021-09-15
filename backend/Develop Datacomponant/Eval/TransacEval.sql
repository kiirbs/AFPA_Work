START TRANSACTION; 

INSERT INTO posts VALUES (36, 'retraite');

UPDATE employees SET emp_pos_id = 36 WHERE emp_id = 59;

UPDATE employees SET emp_pos_id = 4, emp_superior_id = 22, emp_salary = emp_salary * (1 + (5/100)) WHERE emp_id = 14;
UPDATE employees SET emp_superior_id = 22 WHERE emp_pos_id = 4 AND emp_id != 14;

SELECT * FROM employees WHERE emp_id = 38;
SELECT * FROM employees WHERE emp_pos_id = 14;

COMMIT;