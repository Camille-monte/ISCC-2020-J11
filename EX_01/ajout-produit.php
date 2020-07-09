<?php
function connect_to_database(){
    $servername = 'localhost';
    $username = 'root';
    $password = 'root';
    $databasename = "BaseTest01";

    try {
        $pdo=new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        echo "<p> Vous êtes connecté</p>";

       $sql ="INSERT INTO
       Produits (id, nom, description, prix, quantité)

        VALUES(8,'T-shirt','T-shirt coton de couleur noire',15.50,10)";

        $pdo->exec($sql);
        echo 'Entrée ajoutée dans la table';
    }
    catch(PDOException $e) {
        echo "<p> Vous n'êtes pas connecté</p>".$e->getMessage();

    }
}
connect_to_database();



?>
