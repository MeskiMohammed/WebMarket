INSERT INTO familles (libelle, image) VALUES
('Électronique', 'electronics.jpg'),
('Vêtements', 'clothing.jpg'),
('Meubles', 'furniture.jpg'),
('Accessoires', 'accessories.jpg'),
('Jouets', 'toys.jpg');

INSERT INTO unites (unite) VALUES
('Pièce'),
('Kilogramme'),
('Litre'),
('Mètre'),
('Centimètre');

INSERT INTO marques (marque) VALUES
('Samsung'),
('Nike'),
('Ikea'),
('Sony'),
('Apple'),
('Adidas'),
('Microsoft'),
('LG');

INSERT INTO sous_familles (libelle, image, famille_id) VALUES
('Smartphones', 'smartphones.jpg', 1),
('T-shirts', 'tshirts.jpg', 2),
('Sofas', 'sofas.jpg', 3),
('Lunettes', 'glasses.jpg', 4),
('Jeux Vidéo', 'games.jpg', 5);

INSERT INTO etats (etat) VALUES
('Neuf'),
('Reconditionné'),
('Occasion'),
('Défectueux');

INSERT INTO mode_reglements (mode_reglements) VALUES
('Carte Bancaire'),
('Espèces'),
('Virement'),
('Paypal'),
('Chèque');

INSERT INTO users (nom, prenom, adresse, ville, email, tel, admin, password) VALUES
('Dupont', 'Pierre', '12 rue de Paris', 'Paris', 'pierre.dupont@email.com', '0123456789', 1, '$2b$12$c1yEhO0/FAhQMJV9OMtsMORGKt4GyEWlILh4p.zDypVAlohIXS9tW'),
('Martin', 'Sophie', '23 avenue de Lyon', 'Lyon', 'sophie.martin@email.com', '0987654321', 0, '$2b$12$j.b/DzyFvraFRZ1zxkUUvuC9q9DPaKkbK2qQWEWCbzsiLIZ7/4iTe'),
('Lemoine', 'Julie', '45 boulevard de Nice', 'Nice', 'julie.lemoine@email.com', '0123456780', 1, '$2b$12$uEdjRbEDD7iTozduuvaXAeu2k6UGjiUcS64uQga3T.F0857jB.Y4i'),
('Bernard', 'Luc', '56 rue de Marseille', 'Marseille', 'luc.bernard@email.com', '0147258369', 0, '$2b$12$c1yEhO0/FAhQMJV9OMtsMORGKt4GyEWlILh4p.zDypVAlohIXS9tW'),
('Lefevre', 'Claire', '67 boulevard de Bordeaux', 'Bordeaux', 'claire.lefevre@email.com', '0172837465', 1, '$2b$12$j.b/DzyFvraFRZ1zxkUUvuC9q9DPaKkbK2qQWEWCbzsiLIZ7/4iTe');

INSERT INTO produits (codebarre, designation, prix_ht, tva, description, image, sous_famille_id, marque_id, unite_id, stock) VALUES
('1234567890123', 'Samsung Galaxy S21', 799.99, 20, 'Smartphone Android', 'galaxy_s21.jpg', 1, 1, 1, 50),
('9876543210987', 'Nike T-shirt', 25.99, 5, 'T-shirt en coton', 'nike_tshirt.jpg', 2, 2, 2, 100),
('4567890123456', 'Ikea Sofa', 399.99, 10, 'Sofa en tissu', 'ikea_sofa.jpg', 3, 3, 3, 20),
('6543219876543', 'Sony Headphones', 150.0, 15, 'Casque audio Bluetooth', 'sony_headphones.jpg', 1, 4, 1, 80),
('1239874561237', 'Apple iPhone 12', 999.99, 20, 'Smartphone iOS', 'iphone_12.jpg', 1, 5, 1, 30),
('5647382910283', 'Adidas Running Shoes', 80.5, 5, 'Chaussures de course', 'adidas_shoes.jpg', 2, 6, 2, 60),
('4561237895476', 'Microsoft Surface Laptop', 1200.0, 20, 'Ordinateur portable', 'surface_laptop.jpg', 1, 7, 3, 15),
('2345678923456', 'LG TV 55 inches', 600.0, 10, 'Télévision LED 4K', 'lg_tv.jpg', 1, 8, 1, 25);

INSERT INTO fournisseurs (nom) VALUES
('Fournisseur A'),
('Fournisseur B'),
('Fournisseur C'),
('Fournisseur D'),
('Fournisseur E');

