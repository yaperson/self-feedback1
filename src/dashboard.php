<?php
require_once '../vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Twig\Loader\FilesystemLoader;
use Twig\Environment;
use App\Classes\Manager\FeedbackManager;

$logger = new Logger('main');

$logger->pushHandler(new StreamHandler(__DIR__.'/../log/app.log', Logger::DEBUG));  // création anonyme

$logger->info('Start noteList.php...');

$loader = new FilesystemLoader('../templates');

$twig = new Environment($loader, ['cache' => '../cache']);

$error = '';

require_once("conf.php");

try {
    $db = new PDO($dsn, $usr, $pwd);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $FeedbackManager = new FeedbackManager($db);

    $notes = $FeedbackManager->getList();

} catch(PDOException $e) {
    $error = 'erreur de connection : ' . $e->getMessage();
}
echo $twig->render('dashboard.html.twig', [
    'title' => 'Liste des feedback',
    'notes' => $notes, 
    'error' => $error,
    ]
);  