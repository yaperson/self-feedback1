<?php
header('Content-Type: text/csv;');
header('Content-Disposition: attachment; filename="Inventaire.csv"');
include('conf2.php');

try {
    $db = new PDO($dsn, $usr, $pwd);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
} catch (PDOException $e) {
    print($e->getMessage());
}
$Requete = $db->prepare("Select produit_ref, produit_quantite, produit_value From produit");
$Requete->execute();
$data = $Requete->fetchAll();
?>
"Refference";"Quantite";"Valeur - eu"
<?php
foreach ($data as $d) {
    echo '"' . $d->produit_ref . '";"' . $d->produit_quantite . '";"' . $d->produit_value . '"' . "\n";
}
?>