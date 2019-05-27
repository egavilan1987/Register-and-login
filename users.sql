CREATE DATABASE register;

USE register;

CREATE TABLE users(
				id INT(11) NOT NULL AUTO_INCREMENT,
  
				firstname VARCHAR(50) NOT NULL,
        			lastname VARCHAR(50) NOT NULL,
				email VARCHAR(50) NOT NULL,
				username VARCHAR(50) NOT NULL,
				password text(50) NOT NULL,  
        			address VARCHAR(100) NOT NULL,
        			Mobile VARCHAR(20) NOT NULL,
        			Gender VARCHAR(10) NOT NULL,  
				birthday VARCHAR(10) NOT NULL,
				created_date DATETIME NOT NULL,
				PRIMARY KEY(id)
					);
