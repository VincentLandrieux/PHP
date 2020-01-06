<?php
//Connection
include("model/connect.php");

echo "<div class='content_list'>";
//Query
$sql =  'SELECT id, description_courte FROM competences_professionnelles';
try{
    foreach  ($conn->query($sql) as $row) {
        
        echo
        "<div class='card'>" .
            "<p class='card_title'>" .
                $row['id'] . "\t" .
            "</p>" .
            "<p class='card_content'>" .
                $row['description_courte'] .
            "</p>" .
            "<a class='card_link' href='index.php?loc=one&id=" . $row['id'] . "'>read more ></a>" .
        "</div>";
    }
}catch(PDOException $e){
    echo "Query failed: " . $e->getMessage();
}

echo "</div>";

// Following command close the connection.
$conn = null;

?>
