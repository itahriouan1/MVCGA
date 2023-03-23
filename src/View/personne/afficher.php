<?php

$html = "<table>";
foreach($personnes as $personne){
    $html.= "<tr>
    <td>".$personne->getNom()."</td>
    <td>".$personne->getPrenom()."</td>
    <td>".$personne->getEmail()."</td>
    <td><a href='?action=modifier_personne&id=".$personne->getId()."'>modifier</a></td>
    <td><a href='?action=supprimer_personne&id=".$personne->getId()."'>supprimer</a></td>
    </tr>";
}
$html .= "</table>";
$html .= "<td><a href='?action=ajouter_personne'>Nouvelle Personne</a></td>";

echo $html;