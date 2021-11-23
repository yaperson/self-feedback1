<?php
require_once '../vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Twig\Loader\FilesystemLoader;
use Twig\Environment;
use App\Classes\Manager\FeedbackManager;
use App\Classes\Manager\ClasseManager;

$logger = new Logger('main');

$logger->pushHandler(new StreamHandler(__DIR__.'/../log/app.log', Logger::DEBUG));  // création anonyme

$logger->info('Start feedback.php...');

$loader = new FilesystemLoader('../templates');

$twig = new Environment($loader, ['cache' => '../cache']);

$error = '';
 
require_once("conf.php");

try {
    $db = new PDO($dsn, $usr, $pwd);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $ClasseManager = new ClasseManager($db);

    $classe = $ClasseManager->getList();
    //var_dump($classe);

} catch(PDOException $e) {
    $error = 'erreur de connection : ' . $e->getMessage();
}
try {
    if (isset($_POST['rating_repas'])&&(isset($_POST['rating_env']))&&(isset($_POST['classe']))){
        $db = new PDO($dsn, $usr, $pwd);
        $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        $newuser = new FeedbackManager($db);
        $newuser->addNote($_POST['rating_repas'], $_POST['rating_env'], $_POST['comment'], $_POST['classe']);
        //header('Location: connect.php');
        // print("note enregistré ".$_POST['rating_repas']." ".$_POST['rating_env']." ".$_POST['comment']." ".$_POST['classe']);
    }
} catch(PDOException $e) {
    print('erreur de connection : ' . $e->getMessage());
    $logger->error($error);
}
echo $twig->render('feedBack.html.twig', [
    'classes' => $classe,
    'error' => $error,
    ]
);    

?>