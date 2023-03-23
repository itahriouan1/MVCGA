<?php
$html = '
<form method="post" action="?action=modifier_personne">
    nom: <input type="text" name="nom" value="'.$personne->getNom().'">
    <br>
    prenom: <input type="text" name="prenom" value="'.$personne->getPrenom().'">
    <br>
    email: <input type="text" name="email" value="'.$personne->getEmail().'">
    <br>
    <input type="hidden" name="id" value="'.$personne->getId().'">
    <input type="submit" value="enregistrer">
</form>';

echo $html;