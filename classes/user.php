<?php 
class User {
    protected string $name;
    protected string $surname;
    protected int $age;
    protected array $addresses = []; 
    protected int $phone;

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

    // setter and getter for name
    public function setName($_name){
        $this->name = $_name;
    }

    public function getName(){
        return $this->name;
    }

    // setter and getter for surname
    public function setSurname($_surname){
        $this->surname = $_surname;
    }

    public function getSurname(){
        return $this->surname;
    }

    // setter and getter for age
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

    // setter and getter for phone
    public function setPhone($_phone){
        if (is_int($_phone)) {
            $this->phone = $_phone;
        } else {
            throw new Exception('Phone format not valid');
        }
    }

    public function getPhone(){
        return $this->phone;
    }
 
    // setter and getter for adresses
    public function setAddresses($_street,$_city,$_zip_code,$_country){
        if (is_string($_street) && is_string($_city) && is_int($_zip_code) && is_string($_country)) {
            $address = "{$_street}, {$_city}, {$_country}, {$_zip_code}";
            $this->addresses[] = $address;
        } else {
            throw new Exception('Address format not valid');
        }
    }
    public function getAddresses(){
        return $this->addresses;
    }


}




?>