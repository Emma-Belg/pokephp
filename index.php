<?php
declare(strict_types=1);

ini_set("display_errors", "1");
ini_set("display_startup_errors", "1");
error_reporting(E_ALL);

if(empty($_GET['pokemonToGet'])) {
    $homepage = file_get_contents("https://pokeapi.co/api/v2/pokemon/1");
}
 else {
     $homepage = file_get_contents("https://pokeapi.co/api/v2/pokemon/".$_GET["pokemonToGet"]);
 }
//echo $homepage;

/*//this is to display the json as an object
var_dump(json_decode($homepage));*/

//this is to display the json as an array
$arr =json_decode($homepage, true);
//echo $arr;
//print_r($arr);
//echo $arr["moves"];
$movesArr = array();
$moves = $arr["moves"];

for ($i = 0; $i < count($arr["moves"]); $i++){
    array_push($movesArr, $arr["moves"][$i]["name"]);
}

$randMoves = array_rand($movesArr, 4);
echo implode(",", $randMoves)
//echo $arr[$randMoves[0]]."<br>";

/*
$arr2 = ['umber' => ['three' => 3,4], "two" => 2,3,4];
$arr2['umber']['three'];
$arr['abilities']['moves'];*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pokedex test</title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
<div id="searchBar">
    <form method="get" action="" name="pokemonToGet">
        <input type="text"/>
    </form>
    <button id="run">Get Pokemon</button>
</div>
<div id="pokedex">
    <div id="left">
        <div id="logo"></div>
        <div id="bg_curve1_left"></div>
        <div id="bg_curve2_left"></div>
        <div id="curve1_left">
            <div id="buttonGlass">
                <div id="reflect"> </div>
            </div>
            <div id="miniButtonGlass1"></div>
            <div id="miniButtonGlass2"></div>
            <div id="miniButtonGlass3"></div>
        </div>
        <div id="curve2_left">
            <div id="junction">
                <div id="junction1"></div>
                <div id="junction2"></div>
            </div>
        </div>
        <div id="screen">
            <div id="topPicture">
                <div id="buttontopPicture1"></div>
                <div id="buttontopPicture2"></div>
            </div>
            <!--            Where our sprites and evolved from will go-->
            <div id="picture">
                <img id="Pevolution" />
                <img id="sprite" />

            </div>
            <div id="buttonbottomPicture"></div>
            <div id="speakers">
                <div class="sp"></div>
                <div class="sp"></div>
                <div class="sp"></div>
                <div class="sp"></div>
            </div>
        </div>
        <div id="bigbluebutton"></div>
        <div id="barbutton1"></div>
        <div id="barbutton2"></div>
        <div id="cross">
            <div id="leftcross">
                <div id="leftT"></div>
            </div>
            <div id="topcross">
                <div id="upT"></div>
            </div>
            <div id="rightcross">
                <div id="rightT"></div>
            </div>
            <div id="midcross">
                <div id="midCircle"></div>
            </div>
            <div id="botcross">
                <div id="downT"></div>
            </div>
        </div>
    </div>
    <div id="right">
        <!--        Where our stats will go-->
        <div id="stats">
            <strong>Name:</strong>
            <span id="pokeName"><p>
                <?php echo $arr["name"];
                ?>
                </p>
            </span><br/>
            <strong>ID:</strong> <span id="pokeId"></span><br/>
            <span id="evolutionsInfo"></span><br/>
            <ul id="moves">
                <li id="move1">
                    <?php echo $arr["moves"]["0"]["move"]["name"];
                    ?>
                </li>
                <li id="move2">
                    <?php echo $arr["moves"]["0"]["move"]["name"];
                    ?>
                </li>
                <li id="move3">
                    <?php echo $arr["moves"]["0"]["move"]["name"];
                    ?>
                </li>
                <li id="move4">
                    <?php echo array_rand($arr["moves"],4);
                    ?>
                </li>
            </ul>
        </div>
        <div id="blueButtons1">
            <div class="blueButton"></div>
            <div class="blueButton"></div>
            <div class="blueButton"></div>
            <div class="blueButton"></div>
            <div class="blueButton"></div>
        </div>
        <div id="blueButtons2">
            <div class="blueButton"></div>
            <div class="blueButton"></div>
            <div class="blueButton"></div>
            <div class="blueButton"></div>
            <div class="blueButton"></div>
        </div>
        <div id="miniButtonGlass4"></div>
        <div id="miniButtonGlass5"></div>
        <div id="barbutton3"></div>
        <div id="barbutton4"></div>
        <div id="yellowBox1"></div>
        <div id="yellowBox2"></div>
        <div id="bg_curve1_right"></div>
        <div id="bg_curve2_right"></div>
        <div id="curve1_right"></div>
        <div id="curve2_right"></div>
    </div>
</div>
<script type="text/javascript" src="script.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
</body>
</html>
