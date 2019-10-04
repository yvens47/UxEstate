
<?php

class Database {

    private $host;
    private $user;
    private $password;

    private $db;


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
    function __construct($host, $user, $password, $db){
        //echo $database;

        $this->host = $host;
        $this->user = $user;
        $this->password = $password;
        $this->$db = $db;
       
       


    }

    /**
     * db_connect
     *
     * @return $link database connection
     */
    function  db_connect(){
       
        $link = new mysqli('localhost', 'root','','UxEstate');

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

       return  $this->db_connect()->query($sql);

    }

    function  assoc_resultset_row($query){
       
        if($query->num_rows == 0){

        }

        else if($query->num_rows  == 1 ){
             return $query->fetch_assoc();
        }else{
            $rows =array();
            while($row = $query->fetch_assoc()){
                $rows[] = $row;
            }

            return $rows;

        }
    }
}