<?php

include_once DOMAIN . '/repository/IRepository.php';
include_once DOMAIN . '/entity/User.php';
include_once DOMAIN . '/core/Connection.php';

class UserRepository implements IRepository {

    private $user;

    public function count() {

        return 0;
    }

    public function create($user) {
       $Data = new Connection();
       $query = sprintf("insert into users (username,password,name,surname) values('%s','%s','%s','%s' )",
       mysql_real_escape_string($user->username),
       mysql_real_escape_string(MD5($user->password)),
       mysql_real_escape_string($user->name),
       mysql_real_escape_string($user->surname)
        );
       $result = mysql_query($query);
       $user->id = mysql_insert_id();
       mysql_free_result($result);
       $Data->closeConnection();
       return $user;
       
    }

    public function edit($entity) {
        
    }

    public function find($id) {
        $Data = new Connection();
        $Connection = $Data->getConnection('project');
        $query = sprintf("SELECT id,name,surname FROM users 
    WHERE id='%s' ", mysql_real_escape_string($id));

        $result = mysql_query($query);
        $this->user = new User();
        while ($row = mysql_fetch_assoc($result)) {
            $this->user->id = $row['id'];
            $this->user->name = $row['name'];
            $this->user->surname = $row['surname'];
        }
        mysql_free_result($result);
        $Data->closeConnection();
        return $this->user;
    }

    public function findAll() {
        
    }

    public function findRange($range) {
        
    }

    public function remove($entity) {
        
    }

    public function getUser($username, $password) {
        $Data = new Connection();
        $Connection = $Data->getConnection('project');
        $query = sprintf("SELECT id,username,password,name,surname FROM users 
    WHERE username='%s' AND password=MD5('%s')", mysql_real_escape_string($username), mysql_real_escape_string($password));

        $result = mysql_query($query);

        while ($row = mysql_fetch_assoc($result)) {
            $this->user = new User();
            $this->user->id = $row['id'];
            $this->user->username = $row['username'];
            $this->user->password = $row['password'];
            $this->user->name = $row['name'];
            $this->user->surname = $row['surname'];
        }
        mysql_free_result($result);
        $Data->closeConnection();
        return $this->user;
    }

}
