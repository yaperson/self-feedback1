<?php
namespace App\Classes\Manager;

use PDO;
use App\Classes\Entity\Feedback;

class FeedbackManager
{
    private $_db;

    public function __construct(PDO $db)
    {
        $this->setDb($db);
    }

    public function setDb($db): FeedbackManager
    {
        $this->_db = $db;
        return $this;
    }

    public function addNote($valeur_repas, $valeur_env, $commentaire, $classe_id, $date)
    {
        // Netoyge des donnés envoyées
        // $email = strip_tags($_POST['email']);
        // $password = strip_tags($_POST['password']);
        $stmt = $this->_db->prepare("INSERT INTO notes (note_Valeur_Repas, note_Valeur_Environnement, note_Commentaire, classe_Id, note_date) VALUE (?, ?, ?, ?,?);");
        $stmt->bindParam(1, $valeur_repas);
        $stmt->bindParam(2, $valeur_env);
        $stmt->bindParam(3, $commentaire);
        $stmt->bindParam(4, $classe_id);
        $stmt->bindParam(5, $date);
        // Appel de la procédure stockée
        $stmt->execute();
    }

    public function delete($id)
    {
        $requete = $this->_db->query('SELECT note_Id, note_Valeur_Repas, note_Valeur_Environnement, note_Commentaire, classe_Id FROM notes;');
        while ($ligne = $requete->fetch(PDO::FETCH_ASSOC)){
            if ($id == $ligne['note_Id']){
                //requete pas test
                $stmt = $this->_db->prepare('DELETE FROM notes WHERE  note_Id= ?;');
                $stmt->bindParam(1,$id);
                $stmt->execute();
                print("La vilaine note toute pas belle à étais supprimé ! !<br>");
                print("<a class='btn btn-primary' href='dashbord.php'>dashbord</a><br>");
            }
    }
    }

    public function update($id) //:bool
    {
          // A re-travailler
          $requete = $this->_db->query('SELECT note_Id, note_Valeur_Repas, note_Valeur_Environnement, note_Commentaire, classe_Id FROM notes;');
          while ($ligne = $requete->fetch(PDO::FETCH_ASSOC)){
              if ($id == $ligne['note_Id']){
                  print("<form method='POST'>");
                  print("<label for='modif'>Note repas : </label>");
                  print("<input type='text' name='modif1' value=".$ligne['note_Valeur_Repas']."><br><br>");
                  print("<label for='modif'>Note environnement : </label>");
                  print("<input type='text' name='modif2' value=".$ligne['note_Valeur_Environnement']."><br><br>");
                  print("<label for='modif'>Commentaire : </label>");
                  print("<textarea name='modif3' rows='25' cols='25' value=".$ligne['note_Commentaire']."><br><br>");
                  print("<input type='submit' value='Valider'>");
                  print("</form>");
                  // requete update normalement tester et fonctionnel
                  $stmt = $this->_db->prepare('UPDATE notes SET note_Valeur_Repas = ?, note_Valeur_Environnement = ?, note_Commentaire = ? WHERE note_Id = ?;');
                  $stmt->bindParam(1, $_POST['modif1']);
                  $stmt->bindParam(2, $_POST['modif2']);
                  $stmt->bindParam(3, $_POST['modif3']);
                  $stmt->bindParam(3, $_POST['note_Id']);
                  $stmt->execute();
              }
                 }
    }
    public function afficher(){
        $requete = $this->_db->query('SELECT notes.note_Id, notes.note_Valeur_Repas, notes.note_Valeur_Environnement, notes.note_Commentaire, classes.classe_libelle FROM notes, classes WHERE notes.classe_Id = classes.classe_Id;');
        //requete fonctionnel je l'ai test
        //l'affichage à tester
        while ($ligne = $requete->fetch(PDO::FETCH_ASSOC)){
            print("<tr><th>Id : ".$ligne['note_Id']."</th>");
            print("<th>Note Environement : ".$ligne['note_Valeur_Environnement']."</th>");
            print("<th>Commentaire : ".$ligne['note_Commentaire']."</th>");
            print("<th>Classe : ".$ligne['classes.classe_libelle']."</th>");
            print("<th><a class='btn btn-primary' href='update.php?id=".$ligne['note_Id']."'>modifier</a></th>");
            print("<th><a class='btn btn-primary' href='delete.php?id=".$ligne['note_Id']."'>supprimer</a></th></tr>");
        }
        }
    public function getList(): array
    {
        $Feedbacklist = array();

        $request = $this->_db->query('SELECT note_Id, note_Valeur_Repas, note_Valeur_Environnement, note_Commentaire, classe_libelle, note_date FROM notes, classes WHERE notes.classe_Id = classes.classe_Id;');
        while ($ligne = $request->fetch(PDO::FETCH_ASSOC)) {
            $Feedback = new Feedback($ligne);
            $Feedbacklist[] = $Feedback;
        }
        return $Feedbacklist;
    }
}
 
 
?>