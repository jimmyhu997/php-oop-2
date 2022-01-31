<?php 
class User {
    private string $name;
    private string $surname;
    private int $age;
    private array $addresses; 

    public function __construct($_name,$_surname,$_age)
    {
        $this->setName($_name);
        $this->setSurname($_surname);
        try{
            $this->setAge($_age);
        } catch (Exception $e){
            echo 'Eccezione età:' . $e->getMessage();
        }
    }

    public function setName($_name){
        $this->name = $_name;
    }

    public function getName(){
        return $this->name;
    }

    public function setSurname($_surname){
        $this->surname = $_surname;
    }

    public function getSurname(){
        return $this->surname;
    }

    public function setAge($_age){
        if (!is_int($_age)){
            throw new Exception('Is not a number');
        } else if ($_age < 18){
            throw new Exception('You must have more than 18 years old');
        } else{
            $this->age = $_age;
        }
    }

    public function getAge(){
        return $this->age;
    }
}




?>