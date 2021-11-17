<?php
require_once '../vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Twig\Loader\FilesystemLoader;
use Twig\Environment;
use App\Classes\Manager\ClasseManager;

$logger = new Logger('main');

$logger->pushHandler(new StreamHandler(__DIR__.'/../log/app.log', Logger::DEBUG));  // création anonyme

$logger->info('Start ClasseManager.php...');

$loader = new FilesystemLoader('../templates');

$twig = new Environment($loader, ['cache' => '../cache']);

$error = '';
 
require_once("conf.php");

try {
    if (isset($_POST['classe_libelle'])){
        $db = new PDO($dsn, $usr, $pwd);
        $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        $newuser = new ClasseManager($db);
        $newuser->addClasse($_POST['classe_libelle']);
        header('Location: classeList.php');
    }
} catch(PDOException $e) {
    print('erreur de connection : ' . $e->getMessage());
}
echo $twig->render('classeadd.html.twig', [
    'title' => 'Nouvelle Classe',
    'error' => $error,
    ]
);    

?>