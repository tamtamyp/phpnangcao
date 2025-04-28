<?php
class User{
    public $code;
    public $fullname;
    public $birthdate;
    public $gender;
    public function __construct($code, $fullname, $birthdate, $gender) {
        $this->code = $code;
        $this->fullname = $fullname;
        $this->birthdate = $birthdate;
        $this->gender = $gender;
    }
}
