<?php

$html = "<table>";
foreach($personnes as $personne){
    $html.= "<tr>
    <td>".$personne->getNom()."</td>
    <td>".$personne->getPrenom()."</td>
    <td>".$personne->getEmail()."</td>
    </tr>";
}
$html .= "</table>";

echo $html;