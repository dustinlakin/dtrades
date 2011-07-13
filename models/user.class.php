<?php
class user {

    public $id,$name,$email,$ft,$iso;
    
    function __construct($id=null) {
        if($id!=null){
            $this->getUser($id);
        }
    }
    
    public function getUser($id){
        $db = getMongo();
        $cursor = (object)$db->users->findOne(array("id"=>5));

        // iterate through the results*/
        $this->id = $cursor->id;
        $this->name = $cursor->name;
        $this->email = $cursor->email;        
        
    }
    
    public function getFt() {
        
    }
    
    public function getIso(){
        
    }
    
    public function createUser($usr){        
        $db = getMongo();
        $db->users->insert($usr);
        /*
        $doc = array( 
        "type" => "ring",
        "slot" => "ring",
        "quality" => "rare",
        "price" => 30,
        "stats" => (object)array( "fcr" => 20, "gf" => 50) );
         * 
         */
    }

}



?>