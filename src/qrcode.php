<?php
require_once '../vendor/autoload.php';
include('phpqrcode/qrlib.php'); //On inclut la librairie au projet
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

$lien='https://github.com/ndlaprovidence/self-feedback1'; // Vous pouvez modifier le lien selon vos besoins
QRcode::png($lien, 'image-qrcode.png'); // On crée notre QR Code
require_once("conf.php");

try {
    $db = new PDO($dsn, $usr, $pwd);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $FeedbackManager = new FeedbackManager($db);

    $notes = $FeedbackManager->getList();

} catch(PDOException $e) {
    $error = 'erreur de connection : ' . $e->getMessage();
}
echo $twig->render('qrcode.html.twig', [
    'title' => 'QR code',
    'qrcode' => "image-qrcode.png", 
    'text' => "Scannez ce QR code avec un smartphone pour accéder au formulaire", 
    'error' => $error,
    ]
);  

//<img src="image-qrcode.png" alt="">