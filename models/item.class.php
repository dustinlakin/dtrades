<?php

class item {
    public $type, $slot, $quality, $price, $stats, $owner, $ftOrIso;

    function __construct($id=null) {
        if($id!=null){
            $this->getItem($id);
        }
    }
    
    function addItem($arr){
        $db = getMongo();
        $db->items->insert($arr);
    }
    
    function deleteItem($id){
        $db = getMongo();
        //does this user own this item?
        $this->getItem($id);
        if($owner == $_SESSION['id']){
            $db->items->remove(array("id"=>$id));
        }
    }
    
    function getItem($id){
        $obj = (object)$db->items->findOne(array("id"=>$id));
        $this->fillData($obj);
    }
    
    function fillData($obj){
        $this->type     = $obj->type;
        $this->slot     = $obj->slot;
        $this->quality  = $obj->quality;
        $this->price    = $obj->price;
        $this->stats    = $obj->stats;
        $this->ftOrIso  = $obj->ftOrIso;
        $this->notes    = $obj->notes;
    }

}
     /*
      * 
      * type = [
      * ring
      * amulet
      * helm
      * weapon
      * sheild
      * chest
      * gloves
      * boots
      * belt
      * grand charm
      * large charm
      * small charm
      * rune
      * jewel
      * ]
      * 
        $doc = array( 
        "type" => "ring",
        "slot" => "ring",
        "quality" => "rare",
        "price" => 30,
        "stats" => (object)array( "fcr" => 20, "gf" => 50) );
         * 
         */
    
?>