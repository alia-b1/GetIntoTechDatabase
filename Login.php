<?php

//namespace classes;

include_once 'Connector.php';

class Login {

    use Connector;
    protected $username;
    protected $password;

    function __construct($usn, $psw) {
        $this->username = $usn;
        $this->password = $psw;
    }

    public function loginUser() {
        $pdo = $this->connect();
        $sql = "SELECT u.ID, u.first_name, u.last_name FROM library_user as u INNER JOIN login as l ON u.login_id=l.ID WHERE l.username= :user AND l.password= :psw";
        try {
            $stmt = $pdo->prepare($sql);
            $stmt->execute(['user'=> $this->username, 'psw'=> $this->password]);
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $_SESSION["id"]=$row["ID"];
                $_SESSION["firstName"]=$row["first_name"];
                $_SESSION["lastName"]=$row["last_name"];
                header("Location:memberAccount.php");
            }
        } catch (PDOException $e) {
            die("Could not login ....." . $e->getMessage());
        }
        unset($stmt);
    }

}
