<?php

class User 
{
    
    private $id;
    private $username;
    private $email;
    private $first_name;
    private $last_name;
    private $password;
    private $ip_address;
    protected $db;

    private $user_type = [ 'Free', 'Premium', ];

    function __construct($db){

            $this->db = $db;

    }
    


    /**
     * user_full_name
     *
     * @return full name of the user
     */
    
    function user_full_name(){

        return  $this->first_name + " "+ $this->last_name;
    }

    
    /**
     * login
     * take user data as a parameter containing email or username, and password
     * of a user trying to log into the system
     * @param  mixed $user_data
     *
     * @return void
     */
    function login(array $user_data){
         
        $sql = "select * from member where username='?' and password='?'";
           
        $result =  $this->db->query($sql);
        $statement =  $result->bind_param('ss', $username, $password);

        
        $statement->execute();

        // check if at least one user record exist





        // close connection and  statement
        $statement->close();
        $this->db->connection()->close();

            


    }

    /**
     * register
     * take array that has user registration data such as username, email password and etc..
     * @param  mixed $user_registration_data
     *
     * @return void
     */
    function register(array $user_registration_data){
        
        $sql = '';
        $result =  $this->db->query($sql);


    }
    
    /**
     * edit_account
     *
     * @param  mixed $user_id
     *
     * @return void
     */
    function edit_account($user_id){

    }
    
    /**
     * delete_account
     *
     * @param  mixed $user_id
     *
     * @return void
     */
    function delete_account($user_id){

    }

    /**
     * forgot_password
     *
     * @param  mixed $email
     *
     * @return void
     */
    function forgot_password($email){
        
    }
    
}
?>