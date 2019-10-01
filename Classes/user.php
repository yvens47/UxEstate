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
    private $isLogin = false;

    private $user_type = [ 'Free', 'Premium', 'admin' ];

    function __construct($db){

            $this->db = $db;

    }
    


    /**
     * user_full_name
     *
     * @return full name of the user
     */
    function user_full_name(){

        return  $this->first_name . " ".$this->last_name;
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

        $password = $user_data['password'];
        $email = $user_data['email'];
       
        $sql = "select * from member where email='$email' and password='$password'";        
           
        $result =  $this->db->query($sql); 
       
        // check if at least one user record exist
         if($result->num_rows ===1){
             
                $_SESSION["logged_user_data"] = $result->fetch_assoc() ;  //save user data in a session
                heade('location: /Account/');
                
         }
         else{
              header('Location:  ./login-page.php');
         }
                


    }
    
    function isLoggedIn(){

       if( isset( $_SESSION['logged_user_data']))

            return $this->isLogin = true;
       
        return $this->isLogin;
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