<?php
class user {

    public $id,$name,$email,$ft,$iso;
    
    function __construct($id=null) {
        if($id!=null){
            $this->getUser($id);
        }
    }
    
    public function getUser($id){
        
    }

}



?>