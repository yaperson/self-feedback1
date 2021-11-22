<?php
require_once '../vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Twig\Loader\FilesystemLoader;
use Twig\Environment;
use App\Classes\Manager\FeedbackManager;

header('Content-Type: text/csv;');
header('Content-Disposition: attachment; filename="Inventaire.csv"');
include('conf.php');

try {
    $db = new PDO($dsn, $usr, $pwd);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $FeedbackManager = new FeedbackManager($db);

    $notes = $FeedbackManager->getList();

} catch(PDOException $e) {
    $error = 'erreur de connection : ' . $e->getMessage();
} 

$Requete = $db->prepare("SELECT eleve_Id FROM eleve");
$Requete->execute();
$data = $Requete->fetchAll();
?>

"Eleve";"Classe";"Note Repas";"Note Environnement";"Commentaire"

<?php
foreach ($data as $d)
{
    echo '"' . $d->eleve_Id . '"' . $d->eleve_Id . '"' . $d->eleve_Id . "\n";
}
?>