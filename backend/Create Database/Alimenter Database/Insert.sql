INSERT INTO categories (cat_name, cat_parent_id)
VALUES ('jardin', 7),
		('bricolage', 5);

INSERT INTO customers (cus_lastname, cus_firstname, cus_address, cus_zipcode, cus_city, cus_countries_id, cus_mail, cus_phone, cus_password, cus_add_date, cus_update_date)
VALUES ('Zuuku', 'Mayzie', '8 route des bgboysclub', '80000', 'Amiens','FR','lebgdu667@gmail.com', '066733888', 'thebg667', '2015-03-21', '2019-06-02'),
		('Mr.', 'Anonymous', '5 rue de tusaitpasoucest', '80000', 'Amiens','FR','misteriousanonymous@gmail.com', '0607080999', 'motdepasseanonym', '2014-08-06', '2020-09-15');

INSERT INTO employees (emp_superior_id, emp_pos_id, emp_lastname, emp_firstname, emp_address, emp_zipcode, emp_city, emp_mail, emp_phone, emp_salary, emp_enter_date, emp_gender, emp_children)
VALUES (420, 667, 'Doc', 'Xavier', '66 chemin de la madre','80000', 'Amiens', 'docxavounet@gmail.com', '0676887678', '2600', '2017-12-16', 'femal', '2'),
		(667, 420, 'Mineur', 'Renaud', '1 rue du bigcoin','80000','Amiens', 'renaudthemineur@gmail.com', '0786765666', '1800', '2019-07-08', 'male', '7');

INSERT INTO orders (ord_order_date, ord_payment_date, ord_ship_date, ord_reception_date, ord_status, ord_cus_id)
VALUES ('2019-08-11', '2019-08-12', '2019-08-20', '2019-09-02', 'close', 1),
		('2021-07-20', '2021-07-21', '2021-07-24', '2021-08-01', 'close', 2);

INSERT INTO posts (pos_libelle)
VALUES ('insertlibellehere'),
		('insertlibellehere');

INSERT INTO suppliers (sup_name, sup_city, sup_countries_id, sup_address, sup_zipcode, sup_contact, sup_phone, sup_mail)
VALUES ('NASA', 'Amiens', 'FR', '2 route de chezeux', '80000','LOWCOSTNASA','0607080910', 'lowcostnasa@gmail.com'),
		('JAIPASDIDEE', 'Amiens', 'FR', '43 rue de labas', '80000','FAUTTROUVERUNEIDEE','0607080911', 'noidea@gmail.com'),
		('MAXCORP', 'Amiens', 'FR', '11 route de skurt', '80000','MAXCORPINDUSTRIES','0607080912', 'maxcorpp@gmail.com'),
		('TEZLA', 'Amiens', 'FR', '8 allee du courant', '80000','ELONMUSCTEZLA','0607080913', 'nico.tezla@gmail.com'),
		('OCCACAPO', 'Amiens', 'FR', '5 chemin du sky', '80000','OCCACAPOW**D','0607080420', 'occacapo.grow@gmail.com'),
		('MANGEMORTSQUAD', 'Amiens', 'FR', '667 rue de la LDOMMSEKIP', '80000', 'S/O LE FLEM', '0667336690', 'mmsldo667ekipsole8soleflem@gmail.com');








