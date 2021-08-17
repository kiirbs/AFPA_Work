SELECT CONCAT(emp_lastname, ' ', emp_firstname) AS 'Employé', emp_children AS 'Nb_enfants'
FROM employees
ORDER BY emp_children DESC, emp_lastname ASC