
<?php
$homepage = file_get_contents('https://pokeapi.co/api/v2/pokemon/1');
echo $homepage;

/*//this is to display the json as an object
var_dump(json_decode($homepage));*/

var_dump(json_decode($homepage, true));
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
    <input type="text" id="pokemonToGet"/>
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
            <strong>Name:</strong> <span id="pokeName"></span><br/>
            <strong>ID:</strong> <span id="pokeId"></span><br/>
            <span id="evolutionsInfo"></span><br/>
            <ul id="moves">
                <li id="move1"></li>
                <li id="move2"></li>
                <li id="move3"></li>
                <li id="move4"></li>
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
