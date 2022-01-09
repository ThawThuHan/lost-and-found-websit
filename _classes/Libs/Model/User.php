<?php

namespace Libs\Model;

class User
{
    private $name;
    private $email;
    private $password;
    private $phone;
    private $address;

    public function __construct($name, $email, $password, $phone = "", $address = "")
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->phone = $phone;
        $this->address = $address;
    }

    public function toMap()
    {
        $map = [
            "name" => $this->name,
            "email" => $this->email,
            "password" => $this->password,
            "phone" => $this->phone,
            "address" => $this->address,
        ];
        return $map;
    }
}

// $user = new User("thaw@gmail.com", "password");
// $array = $user->toMap();
// print_r($array['email']);
