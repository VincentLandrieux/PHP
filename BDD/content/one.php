<?php

echo "<a class='return' href='index.php?loc=all'>< return</a>";

echo "<div class='content_one'>";

$id = filter_input(INPUT_GET, "id");
//Connection
include("model/connect.php");


//Query
$sql =  'SELECT competences_professionnelles.id, competences_professionnelles.nom, competences_professionnelles.description_courte, competences_professionnelles.description_long,
        activités_types.descrip_courte, activités_types.descrip_long
        FROM competences_professionnelles
        LEFT JOIN activités_types
        ON id_type = activités_types.id
        WHERE competences_professionnelles.id = :id';
try{
    $sth = $conn->prepare($sql);
    $sth->execute(array(':id' => $id));
    $result = $sth->fetch();

    echo
    "<h2>" . $result['nom'] . "</h2>" .
    "<p class='one_id'>" .
        $result['id'] . "<br><br>" .
    "</p>" .
    "<p>" .
        $result['description_courte'] . "<br><br>" .
        $result['description_long'] . "<br><br><br><br>" .
    "</p>" .
    "<p class='one_activite'>" .
        $result['descrip_courte'] . "<br>" .
        $result['descrip_long'] .
    "</p>";

}catch(PDOException $e){
    echo "Query failed: " . $e->getMessage();
}

echo "</div>";
// Following command close the connection.
$conn = null;

?>
