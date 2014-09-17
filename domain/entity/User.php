<?php

class User {

    public $id;
    public $username;
    public $password;
    public $name;
    public $surname;

    public function __construct() {
        $this->id = null;
        $this->password = null;
        $this->name = null;
        $this->surname = null;
    }
}
