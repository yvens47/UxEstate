
<?php

class Database {

    private $host;
    private $user;
    private $password;

    private $database;


    /**
     * __construct
     *
     * @param  mixed $host
     * @param  mixed $user
     * @param  mixed $password
     * @param  mixed $database
     *
     * @return void
     */
    function __construct($host, $user, $password, $database){

        $this->host = $host;
        $this->user = $user;
        $this->password = $password;
        $this->$database = $$database;

    }

    /**
     * db_connect
     *
     * @return $link database connection
     */
    function  db_connect(){

        $link = new mysqli($this->host, $this->user, $this->password, $this->database);

        if($link->connect_errno)
                die(" could not connect to database ". $link->connect_error );

        return $link;
    }

    /**
     * query
     *
     * @param  mixed $sql
     *
     * @return query result
     */
    function query($sql){

       return  $this->db_connect()->prepare($sql);

    }
}