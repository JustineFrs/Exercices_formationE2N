CREATE TABLE billets (
  id SMALLINT UNSIGNED AUTO_INCREMENT,
  type VARCHAR(45) NOT NULL,
  prix VARCHAR(45) NOT NULL,
  reservations_id INT NOT NULL,
  PRIMARY KEY (id)
)
ENGINE=INNODB;

INSERT INTO billets
VALUES (1,"Plein",26,5),
(2,"Plein",41,1),
(3,"Etudiants ",19,2),
(4,"Etudiants ",32,1),
(5,"Etudiants ",28,4),
(6,"Enfants ",34,5),
(7,"Etudiants ",41,5),
(8,"Etudiants ",19,3),
(9,"Plein",13,5),
(10,"Etudiants ",20,1);
