<?php  
class Department{
    public $id;
    public $name;
    public $email;
    public $phone;
    public $website;
    public $address;
    public $head_of_department;

    function __construct($_id, $_name){
        $this->id = $_id;
        $this->name = $_name;
    }

    public function getInfo($_email, $_phone, $_address, $_website){
        $this->email = $_email;
        $this->phone = $_phone;
        $this->address = $_address;
        $this->website = $_website;
    }
}
?>