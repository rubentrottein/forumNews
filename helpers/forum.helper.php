<?php

/**
 * Retourne les forums
 * de notre site depuis la BDD
 * @return string[]
 */
function getForums(): array
{
    # Récupération de ma variable $dbh depuis l'espace global PHP
    global $dbh;

    # J'effectue ma requête de récupération des catégories
    $query = $dbh->query('SELECT * FROM forum');

    # Je retourne le résultat
    return $query->fetchAll();
}

/**
 * Permet de récupérer les forums
 * de la BDD via l'ID du Forum.
 */
function getForumById(int $id) {

    global $dbh;

    # TEST Ecrire la requête SQL
    $sql = 'SELECT * FROM forum WHERE id_forum = :id';

    $query = $dbh->prepare($sql);
    $query->bindValue(':id', $id, PDO::PARAM_INT);
    $query->execute();
    return $query->fetch();
}
