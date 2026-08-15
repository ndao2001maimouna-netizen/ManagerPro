-- Table clients id SERIAL PRIMARY, nom VARCHAR ,prenom VARCHAR,
-- email VARCHAR, tel VARCHAR

-- Table commandes id SERIAL PRIMARY,datCommande, montantinitial  NUMERIC(10,2),  montantAvance NUMERIC(10,2)
-- client_id INT REFERENCES clients (id)

--  Table dettes id  SERIAL PRIMARY KEY, refDette VARCHAR , date Date, montantInitial  NUMERIC(10,2),
-- montantPaye  NUMERIC(10,2), resteDu  NUMERIC(10,2), id_commande INT REFERENCES commandes(id)

--  Table reglements id SERIAL PRIMARY,dateReglement DATE, montant  NUMERIC(10,2)
-- commande_id INT REFERENCES commandes (id)

-- TABLE roles id SERIAL PRIMARY KEY,  nom VARCHAR NOT NULL UNIQUE

--  TABLE utilisateurs  id SERIAL PRIMARY KEY,    nom_complet VARCHARNOT NULL,
--  email VARCHARNOT NULL UNIQUE, mot_passe VARCHARNOT NULL,  adresse VARCHAR,
-- tel VARCHAR),  role_id INT REFERENCES roles(id)

-- TABLE produits id SERIAL PRIMARY KEY, libelle VARCHAR NOT NULL,
 -- prix_vente NUMERIC(10,2),stock_initial NUMERIC(10,2)

--   TABLE modePaiement  id SERIAL PRIMARY KEY, mode VARCHAR NOT NULL UNIQUE

-- TABLE ligneCommandes id SERIAL PRIMARY KEY, qteCommande INT , prixReel NUMERIC(10,2) ,
 -- commande_id INT  REFERENCES commandes(id),  produit_id INT REFERENCES produits(id)

-- TABLE fournisseurs  id SERIAL PRIMARY KEY,   nom VARCHAR,  email VARCHAR,
 -- tel VARCHAR, adresse VARCHAR

--  TABLE statuts_appro, id SERIAL PRIMARY KEY,  nom VARCHAR NOT NULL UNIQUE

-- TABLE approvisionnements  id SERIAL PRIMARY KEY, refBl VARCHAR,
--  date_appro DATE ,fournisseur_id INT REFERENCES fournisseurs(id),
-- utilisateur_id INT REFERENCES utilisateurs(id)

    
--  TABLE lignesAppro id SERIAL PRIMARY KEY, qteAppro NUMERIC(10,2), qteRecu NUMERIC(10,2),
-- prixReel NUMERIC(10,2), approvisionnement_id INT  REFERENCES approvisionnements(id),
 -- produit_id INT   REFERENCES produits(id)


