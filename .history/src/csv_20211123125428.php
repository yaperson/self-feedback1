<?php
    use PDO;
    use App\Classes\Manager\ClasseManager;

    header('Content-Type: text/csv;');
    header('Content-Disposition: attachment; filename="Inventaire.csv"');

    include('conf.php');

    try
    {
        $db = new PDO($dsn, $usr, $pwd);
        $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

        $ClasseManager = new ClasseManager($db);

        $classe = $ClasseManager->getList();
    }
    
    catch (PDOException $e)
    {
        $error = 'erreur de connection : ' . $e->getMessage();
    }
?>

"Élève";"Classe";"Note Repas";"Note Environnement";"Commentaire"

<?php
    foreach ($data as $d)
    {
        echo '"' . $d->classe_libelle . '"' . "\n";
    }
?>