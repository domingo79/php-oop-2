<?php
class User
{
    public $name;
    public $lastname;
    public $phone;
    public $email;
    public $userName;
    public $password;
    public function __construct(string $name, string $lastname, string $phone, string $email, string $userName, string $password)
    {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->phone = $phone;
        $this->email = $email;
        $this->userName = $userName;
        $this->password = $password;
    }
}
