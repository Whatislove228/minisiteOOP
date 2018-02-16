<?php

class RegistrationForm
{
    private $email;
    private $username;
    private $password;
    private $passwordConfirm;

    function __construct()
    {
        $this->email =  isset($data['email']) ? $data['email'] : null;
        $this->username = isset($data['username']) ? $data['username'] : null;
        $this->password = isset($data['password']) ? $data['password'] : null;
        $this->passwordConfirm = isset($data['passwordConfirm']) ? $data['passwordConfirm'] : null;
    }

    public function passwordMatch()
    {
        return $this->password == $this->passwordConfirm;
    }
    public function validate() {
        return !empty($data['password']) && !empty($data['email']) && !empty($data['username']) && !empty($this->passwordConfirm) && $this->passwordMatch();
    }

    /**
     * @return null
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param null $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return null
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param null $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return null
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param null $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return null
     */
    public function getPasswordConfirm()
    {
        return $this->passwordConfirm;
    }

    /**
     * @param null $passwordConfirm
     */
    public function setPasswordConfirm($passwordConfirm)
    {
        $this->passwordConfirm = $passwordConfirm;
    }
}