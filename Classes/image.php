<?php 



class Image {

    private $image_file_array;
    protected $db;
    
      const UPLOAD_DIRECTORY =  '/UxEstate/Account/Images/';

    function __construct(array $image, $db){


        $this->image_file_array = $image;
        $this->db = $db;

    }
    
    function is_uploaded($temp, $files_arr){     

        $dir = dirname(__DIR__)."/Account/Images/";

        if(move_uploaded_file($temp, "$dir".$files_arr)){

            return true;
        }
        return false;
    }


    function upload(){
        $is_success = false;      

        $number_image = count($this->image_file_array['name']);
        
        for($i=0; $i<$number_image; $i++){        

           if( $this->is_uploaded(
                $this->image_file_array['tmp_name'][$i],
                $this->image_file_array['name'][$i]
            ) == TRUE){
                $is_success = TRUE;
            }


        }

        return $is_success;

    }

    function  insert_to_db($property_id){

        if($this->upload()){
            $date = date('Y-m-d');
            // loop thru all image name
            for ($i=0; $i < count($this->image_file_array['name']) ;$i++){



                $name = ($this->image_file_array['name'][$i]);
               
                   // save to database
                    $sql  = "INSERT INTO `property_image` (`image_id`, `property_id`, `image_name`, `date`) 
                        VALUES (NULL, '$property_id', '$name', '$date');";

                
                $result = $this->db->query($sql);
                

            }
        }

    }
}

?>