SELECT cus_city, cus_countries_id, cou_name
FROM customers, countries
WHERE cus_countries_id = cou_id
ORDER BY cus_city ASC 