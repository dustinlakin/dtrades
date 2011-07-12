<?
// connect
$m = new Mongo();

// select a database
$db = $m->dtrades;

// select a collection (analogous to a relational database's table)
$collection = $db->users;

/*$doc = array( 
    "id" => 1,
    "name" => "dustin",
    "email" => "dustin.lakin@gmail.com"
);

$collection->insert($doc);
 */

$cursor = $collection->find();

// iterate through the results
foreach ($cursor as $obj) {
    print_r($obj);
}

?>