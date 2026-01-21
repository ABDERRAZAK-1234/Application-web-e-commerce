-- table admin
CREATE TABLE admin (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(20),
    prenom VARCHAR(20),
    email VARCHAR(100),
    telephone VARCHAR(40),
    password VARCHAR(150)
);
-- table clients
CREATE TABLE clients (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(20) NOT NULL,
    prenom VARCHAR(20) NOT NULL,
    email VARCHAR(100) NOT NULL,
    telephone VARCHAR(40) NOT NULL,
    adresse VARCHAR(100),
    password VARCHAR(150),
    id_commande INT NOT NULL,
    FOREIGN KEY (id_commande) REFERENCES commandes(id)
);
-- table categories
CREATE TABLE categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL
);
-- table produits
CREATE TABLE produits (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(150) NOT NULL,
    prixUnit DECIMAL(10, 2) NOT NULL,
    qte INT NOT NULL,
    description TEXT,
    categorie_id INT,
    FOREIGN KEY (categorie_id) REFERENCES categories(id)
);
-- table commande
CREATE TABLE commandes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100),
    totalPaiement DECIMAL(10,2) NOT NULL,
    statut VARCHAR(50),
    description TEXT
);
-- table commande_Item
CREATE TABLE cmd_item (
    id INT AUTO_INCREMENT PRIMARY KEY,
    quantity INT NOT NULL,
    prix DOUBLE NOT NULL,
    commande_id INT NOT NULL,
    produit_id INT NOT NULL,
    FOREIGN KEY (commande_id) REFERENCES commandes(id),
    FOREIGN KEY (produit_id) REFERENCES produits(id)
);