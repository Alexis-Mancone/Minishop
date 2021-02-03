<?php
/*
https://2eurhost.com/db/
db: eurh_groupe2
user: groupe2
pass: mtNs00_2
*/

try {
    $bdd = new PDO('mysql:host=2eurhost.com;dbname=eurh_groupe2;port=3306;charset=utf8',"groupe2", "mtNs00_2");
}
catch (Exception $e){
    die('Erreur MySQL, veuillez patienter ou contactez un administrateur. <br /><br />' . $e->getMessage());
}

?>