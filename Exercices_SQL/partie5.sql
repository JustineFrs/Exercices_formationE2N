# EXO 1
# Modifier le nom de famille de Juliette Masson. Le remplacer par "Maçon".
UPDATE clients
SET nom ='Maçon'
WHERE id = 1;

# EXO 2
# Modifier le nom de Julien ALLMEIDA. Le remplacer par "Allmeida".
UPDATE clients
SET nom ='Allmeida'
WHERE id = 16;

# EXO 3
# Modifier le prix de tous les billets au tarif "Etudiants". Ils passent de 13€ à 10€.
UPDATE billets
SET prix = 10
WHERE type = 'Etudiants';

# EXO 4
# Modifier le montant de la réduction des possesseurs de cartes de fidélité. La réduction passe de 0.5 à 1.
UPDATE clients
SET reduction = 1
WHERE carte_fidelite = 1;

# EXO 5
# Tous les spectacles ayant lieu dans la salle 5 doivent changer de salle. Leur attribuer la salle 3.
UPDATE spectacles
SET salle_id = 3
WHERE salle_id = 5;

# EXO 6
# Modifier le 23ème client. Son prénom sera "Sophie" et son nom de famille sera "Lemaire".
UPDATE clients
SET prenom = 'Sophie', nom = 'Lemaire'
WHERE id = 23;

# EXO 7
# Tous les clients dont le nom se termine par "ski" obtiennent une réduction de 0.5.
UPDATE clients
SET reduction = 0.5
WHERE nom LIKE '%SKI%';
