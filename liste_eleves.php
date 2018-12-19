<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 18/12/2018
 * Time: 15:27
 */


$Liste= [

    0=>["Truc", "Brian", "36", "Fontaine-les-vervins",
        "passions"=>["sex", "drugs", "rockNroll"]],
    1=>["Spilmont", "André", "31", "Wignehies",
        "passions"=>["jeux vidéos", "bouffe", "voitures"]],
    2=>["Bon", "Romain", "26", "Berlaimont",
        "passions"=>["foot", "jeux vidéos", "cuisine"]],
    3=>["Durvin", "James", "23", "Avesneslles",
        "passions"=>["sex", "drugs", "rockNroll"]],
    4=>["Dohen", "Geoffrey", "24", "Marpent",
        "passions"=>["batterie", "musique", "netflix"]],
    5=>["Labaeye", "Amandine", "17","Etroeungt",
        "passions"=>["foot", "netflix", "jeux vidéos"]],
    6=>["Soudain", "Florence", "33", "Leval",
        "passions"=>"Japon","mangas", "jeux vidéos"],
    7=>["Ducamp", "Maxime", "30", "Beaudignies",
        "passions"=> "fromage", "sci-fi", "guitare"],
    8=>["Bouret", "Sébastien", "40", "Glageon",
        "passions"=>["jeux vidéos", "mangas", "vin"]],
    9=>["Machin", "Bryan", "26", "Fourmies",
        "passions"=>["les filles", "la nourriture", "les soirées"]],
    10=>["Claisse", "Sophie", "34", "Fourmies",
        "passions"=>["musique", "littérature", "langues étrangères"]],
    11=>["Pronnier", "David", "32", "Fourmies",
        "passions"=>["photographie", "informatique", "sonorisation"]],
    12=>["Carpentier", "Benoit", "39", "Fourmies",
        "passions"=>["informatique", "astronomie", "tricot"]],
    13=>["Carpentier", "Romain", "27", "Jeumont",
        "passions"=>["musique", "mangas", "informatique"]],
    14=>["Duthoit", "Arnaud", "29", "Wignehies",
        "passions"=>["lecture", "promenade", "cacahuètes"]],
    15=>["Leclercq", "Cyriak", "27", "Fourmies",
        "passions"=>[ "jeux vidéos", "séries", "mangas"]],
    16=>["Dorchies", "Stevens", "23", "Floyon",
        "passions"=>["south park", "jeux vidéos", "mangas"]],
    17=>["Meunier", "Lubin", "30", "Marcy sous Marle",
        "passions"=>["gateaux", "bonbons", "boire du chocolat chaud"]],
    18=>["Caron", "Gregory", "40", "Fourmies",
        "passions"=>["jeu vidéos", "informatique", "la vie"]],
    ];



?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


<?php

foreach($Liste as $i => $i_name)//pour chaque [tableau] as i(num index tab) => i_name (nouvelle variable)
{
    echo "<a href=\"Liste2.php\">";
    echo $i_name[0] . ' ' . $i_name[1]."<br/>";// nouvelle variable tab dans tab [0] index etc...
    echo "<br/><br/>";
}

?>


</body>
</html>











