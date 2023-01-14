<?php

abstract class User
{
    protected $id;
    protected $username;
    protected $firstName;
    protected $lastName;
    protected $age;
    protected $phoneNumber;
    protected $password;
    protected $email;
    protected $type;


    public function __construct($id, $username,$firstName, $lastName, $age, $phoneNumber, $password, $email, $type)
    {
        $this->id = $id;
        $this->username = $username;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
        $this->phoneNumber = $phoneNumber;
        $this->password = $password;
        $this->email = $email;
        $this->type = $type;
    }
    abstract public function getId();
    abstract public function setId($id);
    abstract public function getUsername();
    abstract public function setUsername($username);
    abstract public function getFirstName();
    abstract public function setFirstName($firstName);
    abstract public function getLastname();
    abstract public function setLastname($lastName);
    abstract public function getAge();
    abstract public function setAge($age);
    abstract public function getPhoneNumber();
    abstract public function setPhoneNumber($phoneNumber);
    abstract public function getPassword();
    abstract public function setPassword($password);
    abstract public function getEmail();
    abstract public function setEmail($email);
    abstract public function getType();
    abstract public function setType($type);
}
