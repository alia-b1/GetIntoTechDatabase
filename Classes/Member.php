<?php
//namespace classes;
include_once'User.php';
include_once 'Connector.php';
include_once 'SearchTraits.php';
include_once 'C:\xampp\htdocs\LibraryApp\createMember.php';

class Member extends User {
    use SearchTraits;
    use Connector;

    private $borrowedBooks = [];

    public function borrowBook(...$book) {
        $this->borrowedBooks = array_merge($this->borrowedBooks, $book);
    }

    public function returnBook($book) {
        $index = array_search($book, $this->borrowedBooks);
        if ($index == 0 || $index) {
            array_splice($this->borrowedBooks, $index, 1);
        }
    }

    public function showBooks() {
        foreach ($this->borrowedBooks as $value) {
            echo "$value, ";
        }
        echo "\n";
    }
    
    public function insertNewUser() {
        $pdo = $this->connect();
        $sqllogin= "INSERT INTO login ( username, password) VALUES (:username, :password) ";
        $sqladdress="INSERT INTO address (first_line,city, county, post_code)VALUES(:first_line,:city, :county, :post_code)";
        $sqllibraryuser="INSERT INTO library_user (date_joined,dob,phone,first_name,last_name,user_type_id) VALUES (:date_joined, :dob, :phone, :first_name, :last_name, :user_type_id)";
        
        try {
            $stmt = $pdo-> prepare($sqllogin);
            $stmt->execute([
                'username'=>$_POST["username"],
                'password'=>$_POST["password"]
            ]);

        }catch (\PDOException $e) {
            echo $e->getMessage();
//            $error = $e->errorInfo();

        }        try{
            $stmt = $pdo-> prepare($sqladdress);
            $stmt-> execute ([
                'city'=>$_POST["city"],
                'county'=>$_POST["county"],
                'first_line'=>$_POST["first_line"],
                'post_code'=>$_POST["post_code"]
            ]);
       
        } catch (PDOException $e) {
            echo $e->getMessage();
//            $error = $e->errorInfo();

        }
        try {
            $stmt = $pdo->prepare($sqllibraryuser);
            $stmt->execute([
                'date_joined'=>$_POST["date_joined"],
                'dob'=> $_POST["dob"],
                'phone'=> $_POST["phone"],
                'first_name'=> $_POST["first_name"],
                'last_name'=>$_POST["last_name"],
                'user_type_id'=>$_POST["user_type_id"]
            ]);
            header("Location:NewMemberResponse.php");
        } catch (PDOException $e) {
            echo $e->getMessage();
//            $error = $e->errorInfo();

        }

                
    }
    
    }

/*
$mem= new Member('Tanya', "B", "12.10.2009","12 dell rise", "St Albans", "Herts", "al2l2", '07858484', "12.12.2009", "dhgfhd", "sdjhfdjk", "member");
echo $mem->showName()."-------------\n";
echo $mem->showAddress()."-------------\n";
$mem->borrowBook("Love Gardens", "The crime", "Flowers");
echo $mem->showBooks();
$mem->returnBook("The crime");
echo $mem->showBooks();
$mem->searchByName("Roald Dahl");
$mem->searchByTitle("matilda");
*/
