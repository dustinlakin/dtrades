<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        $mongo = new Mongo();
        $collection = $mongo->selectDB("foo")->selectCollection("bar"); 
        print_r($collection);

        ?>
    </body>
</html>
