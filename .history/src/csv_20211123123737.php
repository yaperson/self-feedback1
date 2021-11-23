<?php
header('Content-Type: text/csv;');
header('Content-Disposition: attachment; filename="Inventaire.csv"');
include('conf.php');

try {
    $db = new PDO($dsn, $usr, $pwd);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
} catch (PDOException $e) {
    print($e->getMessage());
}
$Requete = $db->prepare("SELECT *
                         FROM classes");
$Requete->execute();
$data = $Requete->fetchAll();
?>
"Élève";"Classe";"Note Repas";"Note Environnement";"Commentaire"
<?php
foreach ($data as $d) {
    echo '"' . $d->classe_libelle. '"' . "\n";
}
?>