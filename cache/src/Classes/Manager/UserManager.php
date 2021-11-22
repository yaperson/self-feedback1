<?php
namespace App\Classes\Manager;

use PDO;
use App\Classes\Entity\User;

class UserManager
{
    private $_db;

    public function __construct(PDO $db)
    {
        $this->setDb($db);
    }

    public function setDb($db): UserManager
    {
        $this->_db = $db;
        return $this;
    }

    public function addUser($user_Name, $user_Password)
    {
        $stmt = $this->_db->prepare("INSERT INTO users (`user_Name`, `user_Password`) VALUE (?, ?);");
        $stmt->bindParam(1, $user_Name);
        $stmt->bindParam(2, $user_Password);
        $stmt->execute();
    }

    public function delete(User $user) //:bool

    {
        // TODO
    }

    public function update(User $user) //:bool

    {
        // TODO
    }

    public function connectUser($user_Name, $user_Password)
    {
        session_start();
        $_SESSION["connecter"] = FALSE;
        $request = $this->_db->query('SELECT `user_Id`, `user_Name`, `user_Password` FROM users');
        while ($ligne = $request->fetch(PDO::FETCH_ASSOC)){ 
            if ($user_Name == $ligne['user_Name']){
               $hash = $ligne['user_Password'];
               if (password_verify($user_Password, $hash)) {
                   echo 'Le mot de passe est valide !';
                   $_SESSION['connecter'] = TRUE;
                } else {
                   session_destroy();
                   echo '<div class="error">Le mot de passe est invalide.</div>';
                }
            }
        }
    }

    public function getList(): array
    {
        $userList = array();

        $request = $this->_db->query('SELECT `user_Id`, `user_Name` FROM users;');
        while ($ligne = $request->fetch(PDO::FETCH_ASSOC)) {
            $user = new User($ligne);
            $userList[] = $user;
        }
        return $userList;
    }
}
 
 
?>