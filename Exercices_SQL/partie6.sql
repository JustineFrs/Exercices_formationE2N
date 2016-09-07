# EXO 1
# Supprimer Juliette Maçon de la liste des clients.
DELETE FROM clients
WHERE nom = 'Maçon';

# EXO 2
# Supprimer les spectacles qui ont lieu entre 1er février et le 31 mai 2016.
DELETE FROM spectacles
WHERE date BETWEEN '2016-02-01' AND '2016-05-31';

# EXO 3
# Supprimer tous les clients dont le nom finit par "ski".
DELETE FROM clients
WHERE nom LIKE '%SKI%';

# EXO 4
# Avant de commencer merci d'éxécuter le script paradisio.sql
# Supprimer la table clients de la base paradisio.
DELETE FROM clients;

# EXO 5
# Supprimer la table langages de la base competences.
USE competences
DELETE FROM langage;

# EXO 6
# Supprimer la base competences.
DROP DATABASE competences;

# EXO 7
# Supprimer la base paradisio.
DROP DATABASE paradisio;

# EXO 8
# Supprimer la base colysee.
DROP DATABASE colysee;
