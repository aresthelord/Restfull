<?php


class Connection {

    private $connection;
    private $server = 'localhost';
    private $user = 'dbadmin';
    private $pass = 'Ankara12';
    private $port ='3306';

    function __construct() {
        
    }
    

    function getConnection($dbName) {
        //check whether there is a connection alive
        //if there is return it
        
        if ($this->connection != null && mysql_ping($this->connection)) {
            mysql_select_db($this->connection);
            return $this->connection;
        } else {
            //get a connection from mysql server
            $this->connection = mysql_connect($this->server.':'.$this->port, $this->user, $this->pass);
            //select the database
            mysql_select_db($dbName, $this->connection);
            //return the connection
            if (!$this->connection) {
                return null;
            }
            return $this->connection;
        }
    }

    function closeConnection() {
        //check whether connection still alive
        if (mysql_ping($this->connection)) {
            mysql_close($this->connection);
        }
    }

}


