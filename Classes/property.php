

<?php

class Property {

    private $street ;
    private $city ;
    private $state;
    private $zip;
    private $price;
    private $bedrooms ;
    private $bathrooms ;
    private $type ;
    private $description ;

    protected $db;




   
    /**
     * __construct
     *
     * @param  mixed $property
     *
     * @return void
     */
    function __construct(array $property, $db){

        if(!empty($property)){       
        
                $this->street = $property['street'];
                $this->city = $property['city'];
                $this->state = $property['state'];
                $this->zip = $property['postal'];
                $this->price = $property['price'];
                $this->bedrooms = $property['bedrooms'];
                $this->bathrooms = $property['bathrooms'];
                $this->type = $property['type'];
                $this->description = $property['description'];
        }
        $this->db = $db;

       
    }

    /**
     *  add  a propety to database
     *
     * @return void
     */
    function add(){
        $user_id = intval($_SESSION['logged_user_data']['id']);
        $date = date('Y-m-d');

        $sql = "INSERT INTO `property`
         (`id`, `agent_id`, `street`, `ctity`, `state`, `postal_code`, 
         `bedrrooms`, `bathrooms`, `listing_price`, `type`, `listing_date`, `listing_updated`) 
        VALUES (NULL, '$user_id', '$this->street', '$this->city', '$this->state', '$this->zip', 
        '$this->bedrooms', '$this->bathrooms',
                 '$this->price', ' $this->type ',  CONCAT(CURDATE(), ' ', CURTIME()), CURDATE());
                --";   
        
        

        $result = $this->db->query($sql);
        if($result){
            
            //$_SESSION['new_property_add_id'] = 
            // print_r( mysqli_insert_id($this->db->db_connect()));
           
        }

       




        
    }

    function view($sql ){           
        $result = $this->db->query($sql);        

        return  $this->db->assoc_resultset_row($result);        




    }

    function edit(){

    }

    function delete (){

    }
}