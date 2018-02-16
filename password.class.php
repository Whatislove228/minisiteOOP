<?php

class password {
    const  SALT_TEXT  = "Yes, I love such style";

    private $password;
    private $hashedPassword;
    private $salt;

    function __construct($password, $saltText = null)
    {
        $this->password =$password;
        $this->salt = md5(is_null($saltText)?  self::SALT_TEXT : $saltText);
        $this->hashedPassword = md5($this->salt . $password);
    }
}