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
        $cursor = $db->users->find(array("id"=>array('$lt'=>5)));
        //print_r($collection);
        /*$cursor = $collection->find(array("id"=>1));

        // iterate through the results*/
        foreach ($cursor as $obj) {
            print_r($obj);
        }
    }
    
    public function getFt() {
        
    }
    
    public function getIso(){
        
    }

}



?>