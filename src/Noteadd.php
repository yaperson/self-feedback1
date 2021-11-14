<?php
require_once '../vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Twig\Loader\FilesystemLoader;
use Twig\Environment;
use App\Classes\Manager\FeedbackManager;

$logger = new Logger('main');

$logger->pushHandler(new StreamHandler(__DIR__.'/../log/app.log', Logger::DEBUG));  // création anonyme

$logger->info('Start Noteadd.php...');

$loader = new FilesystemLoader('../templates');

$twig = new Environment($loader, ['cache' => '../cache']);

$error = '';
 
require_once("conf.php");

try {
    if (isset($_POST['rating_repas'])&&(isset($_POST['rating_env']))&&(isset($_POST['classe']))){
        $db = new PDO($dsn, $usr, $pwd);
        $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        $newuser = new FeedbackManager($db);
        $newuser->addNote($_POST['rating_repas'], $_POST['rating_env'], $_POST['comment'], $_POST['classe']);
        //header('Location: connect.php');
        print("note enregistré ".$_POST['rating_repas']." ".$_POST['rating_env']." ".$_POST['comment']." ".$_POST['classe']);
    }
} catch(PDOException $e) {
    print('erreur de connection : ' . $e->getMessage());
}
echo $twig->render('Noteadd.html.twig', [
    'title' => 'Nouvel note',
    'error' => $error,
    ]
);    

?>