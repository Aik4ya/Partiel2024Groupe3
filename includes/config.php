<?php
// Paramètres de connexion à la base de données
$db_config = parse_ini_file('../includes/config.ini', true);

try {
/* Tentative de connexion à la base de données MySQL */
    $pdo = new PDO("mysql:host={$db_config['database']['host']};dbname={$db_config['database']['database']}", $db_config['database']['username'], $db_config['database']['password']);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    error_log("ERREUR : Impossible de se connecter. " . $e->getMessage());
    die("ERREUR : Impossible de se connecter.");
}
?>
