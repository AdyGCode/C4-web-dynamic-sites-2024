CREATE TABLE category (
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(255)
) DEFAULT CHARACTER SET utf8 ENGINE=InnoDB;

/* Add if not already added */
CREATE TABLE jokecategory (
	jokeid INT NOT NULL,
	categoryid INT NOT NULL,
	PRIMARY KEY (jokeid, categoryid)
) DEFAULT CHARACTER SET utf8 ENGINE=InnoDB;


INSERT INTO category (id, name) VALUES
(1, 'Cross the Road'),
(2, 'Knock Knock'),
(3, 'Boomerang'),
(4, 'Lawyers'),
(5, 'Light Bulb');

INSERT INTO jokecategory (jokeid, categoryid) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 2),
(5, 4),
(5, 5);