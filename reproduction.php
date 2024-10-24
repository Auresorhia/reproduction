<?php

$reproduction = array(
"0" => array("nom" => "Durant","prenom" => "Loic","age" => "29","metier" => "Webmaster","site" => "openclassroom","lien" => "http://www.openclassrooms.com/"),
"1" =>array("nom" => "Dupont","prenom" => "Michel","age" => "55","metier" => "Intégrateur","site" => "alsacreations","lien" => "http://www.alsacreations.com/"),
"2" =>array("nom" => "Martin","prenom" => "Yannick","age" => "25","metier" => "Développeur","site" => "créative juiz","lien" => "http://www.creativejuiz.fr/")
);

echo '<pre>';
print_r($reproduction);
echo '</pre>';

$lgreproduction = count($reproduction);
echo '<table border="1" width="50%"><tr><th>NOM</th><th>PRENOM</th><th>AGE</th><th>PROFESSION</th><th>SITE WEB</th></tr>';
for($p = 0; $p < $lgreproduction; $p++) {
    echo '<tr>';
    echo '<td>' . $reproduction[$p]['nom'] . '</td>';
    echo '<td>' . $reproduction[$p]['prenom'] . '</td>';
    echo '<td>' . $reproduction[$p]['age'] . '</td>';
    echo '<td>' . $reproduction[$p]['metier'] . '</td>';
    echo '<td>' . $reproduction[$p]['site'] . '</td>';
    echo '</tr>';
}
echo '</table>';

echo '<style>
table{
    border-collapse: collapse;
    border: 1px solid black;
}
tr,td{
    background-color: red;
    color: white;
}
th{
    background-color: black;
    color: white;
}'

?>