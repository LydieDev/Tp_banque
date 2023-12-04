CREATE TABLE IF NOT EXISTS client(
    num INT NOT NULL AUTO_INCREMENT,
    nom VARCHAR(50) NOT NULL,
    num_phone INT,
    email VARCHAR(50) NOT NULL,
    PRIMARY KEY (num)
);
CREATE TABLE IF NOT EXISTS solde(
    id INT NOT NULL AUTO_INCREMENT,
    client_id INT NOT NULL,
    montant INT NULL,
    type_transaction VARCHAR(50) NOT NULL,
    date_transaction DATE NOT NULL,
    FOREIGN KEY (client_id) REFERENCES client(num) ON DELETE CASCADE,
    PRIMARY KEY (id)
);
CREATE TABLE IF NOT EXISTS users (
    id INT NOT NULL AUTO_INCREMENT,
    nom VARCHAR(25) NOT NULL,
    prenom VARCHAR(50) NOT NULL,
    adresse VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    passwrd VARCHAR(255) NOT NULL,
    PRIMARY KEY (id)
);
