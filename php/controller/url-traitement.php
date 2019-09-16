<?php


$nom = $_REQUEST['nom'] ?? "";
$email = $_REQUEST['email'] ?? ""; 
$message = $_REQUEST['contact-message'] ?? ""; 

echo "Merci $nom , votre message $message à été envoyé";



$ligne1 = "$nom,$email,$message\n"; 
file_put_contents("contact.txt", $ligne1, FILE_APPEND);


@mail("Myriammmmmmmmmmmmmmmmmmmm@monsite.fr", "nouvelle inscription newsletter", $ligne1);




?>
