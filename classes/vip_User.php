<?php 
class vip_user extends User {
    protected int $level;
    protected int $discount;

    public function __construct($_name,$_surname,$_age,$_level)
    {
        parent::__construct($_name,$_surname,$_age);
        try {
            $this->setLevel($_level);
        } catch (Exception $e) {
            echo 'Eccezione: ' . $e->getMessage();
        }
        $this->setDiscount();
    }


    public function setDiscount(){
        $this->discount = $this->level * 10;
    }

    public function getDiscount(){
        return $this->discount;
    }

    public function setLevel($_level){
        if(is_int($_level) && 0 < $_level < 10){
            $this->level = $_level;
        } else {
            throw new Exception ('Level value no valid');
        }
    }

    public function getLevel(){
        return $this->level;
    }
}


?>