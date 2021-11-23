<?php
namespace App\Classes\Manager;

use PDO;
use App\Classes\Entity\Classe;

class ClasseManager
{
    private $_db;

    public function __construct(PDO $db)
    {
        $this->setDb($db);
    }

    public function setDb($db): ClasseManager
    {
        $this->_db = $db;
        return $this;
    }

    public function addClasse($classe_libelle)
    {
        $stmt = $this->_db->prepare("INSERT INTO classes (classe_libelle) VALUE (?);");
        $stmt->bindParam(1, $classe_libelle);
        // Appel de la procédure stockée
        $stmt->execute();
    }

    public function delete($id)
    {
        $requete = $this->_db->query('SELECT classe_Id, classe_libelle FROM classes;');
        while ($ligne = $requete->fetch(PDO::FETCH_ASSOC)){
            if ($id == $ligne['classe_Id']){
                $stmt = $this->_db->prepare('DELETE FROM classes WHERE  classe_Id= ?;');
                $stmt->bindParam(1,$id);
                $stmt->execute();
            }
    }
    }

    public function update($id) //:bool
    {
                  $stmt = $this->_db->prepare('UPDATE classes SET classe_libelle = ? WHERE classe_Id = ?;');
                  $stmt->bindParam(1, $_POST['modif1']);
                  $stmt->bindParam(2, $_POST['classe_Id']);
                  $stmt->execute();
    }
    public function getList(): array
    {
        $Classelist = array();

        $request = $this->_db->query('SELECT classe_Id, classe_libelle FROM classes;');
        while ($ligne = $request->fetch(PDO::FETCH_ASSOC)) {
            $Classe = new Classe($ligne);
            $Classelist[] = $Classe;
        }
        return $Classelist;
    }
}
 
 
?>