<?php
class Operator extends User
{
    public function __construct($id,  $username,$firstName, $lastName, $age, $phoneNumber, $password, $email, $type)
    {
        parent::__construct($id, $username, $firstName, $lastName, $age, $phoneNumber, $password, $email, $type);
    }
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->firstName = $id;
    }
    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }
    public function getFirstName()
    {
        return $this->firstName;
    }

    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }
    public function getLastname()
    {
        return $this->lastName;
    }

    public function setLastname($lastName)
    {
        $this->lastName = $lastName;
    }
    public function getAge()
    {
        return $this->age;
    }
    public function setAge($age)
    {
        $this->age = $age;
    }
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
    }
    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }
    public function getType()
    {
        return $this->type;
    }
    public function setType($type)
    {
        $this->type = $type;
    }
}
