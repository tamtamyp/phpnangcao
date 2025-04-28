<?php
class User{
    public $code;
    public $full_name;
    public $email;
    public $password;
    public function __construct($code, $full_name, $email, $password) {
        $this->code = $code;
        $this->full_name = $full_name;
        $this->email = $email;
        $this->password = $password;
    }
    public function getInfo() {
        return [
            'code' => $this->code,
            'full_name' => $this->full_name,
            'email' => $this->email,
            'password' => $this->password
        ];
    }
}
class Manager extends User{
    public $exp_in_year;
    public function __construct($code, $full_name, $email, $password, $exp_in_year)
    {
        parent::__construct($code, $full_name, $email, $password); 
        $this->exp_in_year = $exp_in_year;   
    }
    
    function getInfo() : array{
        $arr=parent::getInfo();
        return $arr["exp_in_year"] = $this->exp_in_year;
    }
}
class Employee extends User{
    public $pro_skill;
    public function __construct($code, $full_name, $email, $password,$pro_skill)
    {
        parent::__construct($code, $full_name, $email, $password); 
        $this->pro_skill = $pro_skill;   
    }
    
    function getInfo() : array{
        $arr=parent::getInfo();
        return $arr["pro_skill"] = $this->pro_skill;
    }
}
