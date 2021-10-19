<!-- Snack 2
Passare come parametri GET name, mail e age 
e verificare (cercando i metodi che non conosciamo nella documentazione) 
che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. 
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php 
    if( !empty($_GET['email']) && !empty($_GET['name']) && !empty($_GET['age'])){
        $email = $_GET['email']; 
        $name = $_GET['name']; 
        $age = $_GET['age'];
        if (strpos($email, '@') && strpos($email, '.') && strlen($name) > 3 && is_numeric($age)){
            echo "Accesso riuscito";
        }
    } else {
        echo "Accesso negato";
    }
?>
