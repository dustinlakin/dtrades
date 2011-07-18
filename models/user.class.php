<?php
class user {

    public $id,$name,$email,$ft,$iso;
    private $salt = "asd5Asd9SDV1Bpd3114IujfPlklEqnmDoksl";
    
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
    
    public function login($name,$password){
        $cursor = $db->users->findOne(array("name"=>$name,"password"=>  md5($password.$salt)));
        if($cursor != NULL){
            $_SESSION[id] = $cursor->id;
        }
    }
    
    public function getFt() {
        
    }
    
    public function getIso(){
        
    }
    
    public function createUser($usr){        
        $db = getMongo();
        $db->users->insert($usr);
    }

}



?>