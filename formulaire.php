<?php

if (isset( $_POST['formenvoi'] ) ) {

    $nom = $_POST['nom'] ;
    $telephone = $_POST['telephone'] ;
    $mail = $_POST['mail'] ;
    $adresse = $_POST['adresse'] ;
    $ville = $_POST['ville'] ;
    $codepostal = $_POST['codepostal'] ;
    $message = $_POST['message'] ;

    $mailTo = "mesbah.ismahene@gmail.com";
    $subject = "mail from mon Portfolio";
    $headers = 'From: "'.$mail.'"' . "\r\n" .
     'Reply-To: webmaster@example.com' . "\r\n" .
     'X-Mailer: PHP/' . phpversion() . "\r\n" .
     'Content-type: text/html; charset=iso-8859-1'; 
    $txt = "<h1 style='color:red;font-size:18px;text-align:center;'>tu as recu un email de mr ou mme : <span style='color:blue;'>".$nom. "</span></h1><br>";
    $txt .= "<h3 style='text-decoration:underline;'>Infos concernant " .$nom. "</h3><br>";
    $txt .= "<ul style='list-style:none;'>";
    $txt .= " <li>ville : ".$ville. " </li>";
    $txt .= " <li> code postal : ".$codepostal. "</li>";
    $txt .= " <li> adresse : ".$adresse. "</li>";
    $txt .= " <li>telephone : " .$telephone. "</li>";
    $txt .= " <li>mail : ".$mail. "</li><br>";
    $txt .= " <h3 style='text-decoration:underline;'>son message : </h3><br>";
    $txt .= "<p style='font-style:italic;'>".$message. "</p>";

    mail($mailTo, $subject, $txt, $headers);
    header('location: https://ismahene-mesbah.com/index.html');
}
