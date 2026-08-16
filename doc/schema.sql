
CREATE TABLE roles (
    id SERIAL PRIMARY KEY,
    nom VARCHAR(50) NOT NULL UNIQUE
);

INSERT INTO roles (nom) VALUES
('Admin Boutique'),
('Chargé de Vente'),
('Chargé de Stock'),
('Inventaire');


CREATE TABLE utilisateurs (
    id SERIAL PRIMARY KEY,
    nom_complet VARCHAR(100) NOT NULL,
    email VARCHAR(50) NOT NULL UNIQUE,
    mot_passe VARCHAR(50) NOT NULL,
    adresse VARCHAR(50),
    tel VARCHAR(20),
    role_id INT REFERENCES roles(id) 
);

INSERT INTO utilisateurs
(nom_complet, email, mot_passe, adresse, tel, role_id)
VALUES
('Admin Boutique', 'admin@storemanager.sn', 'demo1234', NULL, NULL, 1),
('Chargé de Vente', 'vente@storemanager.sn', 'demo1234', NULL, NULL, 2),
('Chargé de Stock', 'stock@storemanager.sn', 'demo1234', NULL, NULL, 3),
('Inventaire', 'inventaire@storemanager.sn', 'demo1234', NULL, NULL, 4);

CREATE TABLE modepaiement (
    id SERIAL PRIMARY KEY,
    mode VARCHAR(50) NOT NULL UNIQUE
);

INSERT INTO modepaiement (mode) VALUES
('Wave'),
('Orange Money'),
('Especes'),
('Virement Bceao');

CREATE TABLE commandes (
    id SERIAL PRIMARY KEY,
    dateCommande DATE NOT NULL DEFAULT CURRENT_DATE,
    montantInitial NUMERIC(10,2) NOT NULL,
    montantAvance NUMERIC(10,2) NOT NULL ,
    client_id INT REFERENCES clients(id) ,
    utilisateur_id INT REFERENCES utilisateurs(id) ,
    modepaiement_id INT REFERENCES modepaiement(id) 
);

INSERT INTO commandes
(dateCommande, montantInitial, montantAvance, client_id, utilisateur_id, modepaiement_id)
VALUES
('2026-08-01', 58000, 58000, 8, 1, 1),
('2026-08-07', 44000, 10000, 3, 1, 2),
('2026-08-07', 74000, 24000, 9, 1, 1),
('2026-08-07', 15000, 0, 2, 1, NULL);

CREATE TABLE clients (
    id SERIAL PRIMARY KEY,
    nom VARCHAR(50) NOT NULL,
    prenom VARCHAR(50),
    email VARCHAR(50) UNIQUE,
    tel VARCHAR(20)
);

INSERT INTO clients (nom, prenom, email, tel) VALUES
('Cisse', 'Awa', 'cisse@gmail.com', '783332211'),
('Diallo', 'Maimouna', 'diallo@gmail.com', '701122334'),
('Diouf', 'Fama', 'diouf@gmail.com', '781234567'),
('Fall', 'Fatou', 'fall@gmail.com', '789998877'),
('Faye', 'Babacar',' faye@gmail.com', '762221100'),
('Gueye', 'Ibrahima', 'gueye@gmail.com', '778887766'),
('Mbacke', 'Khady',' mbacke@gmail.com', '704443322'),
('Ndiaye', 'Abdou', 'ndiaye@gmail.com', '776543210'),
('Sarr', 'Moussa', 'sarr@gmail.com', '769876543'),
('Sow', 'Ousmane', 'sow@gmail.com', '775554433');

CREATE TABLE produits (
    id SERIAL PRIMARY KEY,
    libelle VARCHAR(150) NOT NULL,
    prix_vente NUMERIC(10,2) NOT NULL ,
    stock_initial NUMERIC(10,2) NOT NULL 
);

INSERT INTO produits (libelle, prix_vente, stock_initial) VALUES
('Bidon d''huile 5L', 8000, 5),
('Carton de lait', 15000, 40),
('Carton de savon', 12000, 3),
('Huile de palme 1L', 2000, 0),
('Paquet de sucre 1kg', 1500, 200),
('Sac de riz 50kg', 25000, 100);


CREATE TABLE fournisseurs (
    id SERIAL PRIMARY KEY,
    nom VARCHAR(50) NOT NULL,
    email VARCHAR(50),
    tel VARCHAR(20),
    adresse VARCHAR(50)
);

INSERT INTO fournisseurs (nom, email, tel, adresse) VALUES
('Comptoir Céréalier Sénégalais', 'cerealier@comptoir.sn', '338245678', 'Port de Dakar, Hangar 4'),
('Grossiste Diop & Frères', 'grossiste@diop.sn', '773456789', 'Marché Grand Yoff, Lot B'),
('Sénégal Import-Export', 'senegal@impexp.sn', '338211010', 'Zone Industrielle de Hann');

CREATE TABLE statutsAppro (
    id SERIAL PRIMARY KEY,
    nom VARCHAR(50) NOT NULL UNIQUE
);

INSERT INTO statutsAppro (nom) VALUES
('EN COURS'),
('REÇU');


CREATE TABLE approvisionnements (
    id SERIAL PRIMARY KEY,
    ref_bl VARCHAR(50) NOT NULL UNIQUE,
    date_appro DATE NOT NULL DEFAULT CURRENT_DATE,
    fournisseur_id INT REFERENCES fournisseurs(id) ,
    utilisateur_id INT REFERENCES utilisateurs(id) ,
    statut_appro_id INT REFERENCES  statutsAppro(id) 
);


INSERT INTO approvisionnements
(ref_bl, fournisseur_id, utilisateur_id, statut_appro_id)
VALUES
('BL-SEN-102',3,1,1),
('BL-CCS-101',1,1,1),
('BL-CCS-098',1,1,2);
CREATE TABLE dettes (
    id SERIAL PRIMARY KEY,
    refDette VARCHAR(50) NOT NULL UNIQUE,
    dateDette DATE NOT NULL DEFAULT CURRENT_DATE,
    montantInitial NUMERIC(10,2) ,
    montantPaye NUMERIC(10,2) ,
    resteDu NUMERIC(10,2),
    commande_id INT UNIQUE REFERENCES commandes(id) 
);

INSERT INTO dettes
(refDette, dateDette, montantInitial, montantPaye, resteDu, commande_id)
VALUES
('DT-1','2026-08-07', 44000, 10000,  34000, 2),
('DT-2','2026-08-07', 74000, 24000, 50000,3),
('DT-3','2026-08-07', 15000, 0, 15000,4)
   


CREATE TABLE reglements (
    id SERIAL PRIMARY KEY,
    dateReglement DATE NOT NULL DEFAULT CURRENT_DATE,
    montant NUMERIC(10,2) NOT NULL ,
    commande_id INT REFERENCES commandes(id) 
);
INSERT INTO reglements
(dateReglement, montant, commande_id)
VALUES
('2026-08-01', 58000,1),
('2026-08-07', 10000, 2),
('2026-08-07', 24000,3);
  


CREATE TABLE ligneCommandes (
    id SERIAL PRIMARY KEY,
    qteCommande INT,
    prixReel NUMERIC(10,2),
    commande_id INT REFERENCES commandes(id) ,
    produit_id INT REFERENCES produits(id) 
);

INSERT INTO ligneCommandes
(qteCommande, prixReel, commande_id, produit_id)
VALUES
(2,25000,1,6),
( 3, 8000,2,1),
(2,12000,3,3),
(10,1500,4,5):

CREATE TABLE lignesAppro (
    id SERIAL PRIMARY KEY,
    qteAppro NUMERIC(10,2),
    qteRecu NUMERIC(10,2) ,
    prixReel NUMERIC(10,2),
    approvisionnement_id INT REFERENCES approvisionnements(id) ,
    produit_id INT REFERENCES produits(id) 
);

INSERT INTO lignesAppro
(qteAppro, qteRecu, prixReel, approvisionnement_id, produit_id)
VALUES
( 50, 0, 1000,1,5),
(10, 0, 14000,1,2),
(25, 0, 21000, 2,6),
(20, 20, 7000,3,1),
(15, 15, 12000,3,3);
 