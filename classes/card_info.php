<?php 
class card {
    private int $number;
    private string $expiration_date;
    private int $cvv;

    
    public function __construct($_number,$_month,$_year,$_cvv)
    {
        try{
            $this->setNumber($_number);
            $this->setDate($_month,$_year);
            $this->setDate($_month,$_year);
        } catch (Exception $e){
            echo 'Eccezione:' . $e->getMessage()."\n";
        }
    }


    public function setNumber($_number){
        if (is_int($_number)) {
            $this->number = $_number;
        } else if (strlen($_number) <> 16){
            throw new Exception('Number lenght not valid');
        } else {
            throw new Exception('Number format not valid');
        }
    }

    public function getNumber(){
        return $this->number;
    }


    public function setDate($_month,$_year){
        if (is_int($_month) && is_int($_year)) {
            $this->expiration_date = "{$_month}/{$_year}";
        } else {
            throw new Exception('Date format not acceptable');
        }
    }

    public function getDate(){
        return $this->expiration_date;
    }


    public function setCvv($_cvv){
        if (is_int($_cvv)) {
            $this->cvv = $_cvv;
        } else {
            throw new Exception('CVV format not valid');
        }
    }

    public function getCvv(){
        return $this->cvv;
    }
}


?>