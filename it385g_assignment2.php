<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Big trucks</title>
<style>
    body {
        font-family: sans-serif;
        background-color:lightslategrey;
    }
    form {
        width:500px;
        background-color: lightgrey;
        padding:50px;
        margin:auto;
        box-shadow: 2px 2px 4px 2px;
    }
    #f_Body {
        Width:300px;
        margin:auto;
        font-weight:bold;
        font-size:15px;
    }
    #head {
        background-color: black;
        color:white;
        font-size: 200%;
        font-weight: 700;
        letter-spacing: 10px;
        text-align: center;
        text-transform: uppercase;
        padding:10px;
    }

</style>

<body>
<pre>
<?php
$trucks = array(
    array(),
    array(
        "KrAZ", "Kremenchuk", "Ukraine",
        array(
            array("KrAZ-65055", "6x6", "330Hp"),
            array("KrAZ-6130C4", "6x6", "330Hp"),
            array("KrAZ-5133H2", "4x2", "330Hp"),
            array("KrAZ-7140H6", "8x6", "400Hp")
        )
    ),
    array(
        "EBIAM", "Thessaloniki", "Greece",
        array(
            array("EBIAM MVM", "4x4", "86Hp")
        )
    ),
    array(
        "KaMAZ", "Naberezhnye Chelny", "Tatarstan",
        array(
            array("KAMAZ 54115", "6x4", "240Hp"),
            array("KAMAZ 6560", "8x8", "400Hp"),
            array("KAMAZ 5460", "8x8", "340Hp")
        )
    ),
    array("LIAZ", "Rynovice", "Czechoslovakia", array(
        array("LIAZ 706 RT", "2x4", "160Hp")
    )),
    array(
        "IRUM", "Brasov", "Romania",
        array(
            array("TAF 690", "2x4", "90Hp")
        )
    ),
    array(
        "MAZ", "Minsk", "Belarus",
        array(
            array("MAZ 535", "8x8", "375Hp"),
            array("MAZ 7310", "8x8", "525Hp"),
            array("MAZ 7907", "4x12", "1250Hp"),
            array("MAZ 6317", "6x6", "425Hp"),
            array("MAZ 6430", "6x6", "360Hp"),
            array("MAZ 5551", "4x2", "160Hp")
        )
    ),
    array(
        "BelAz", "Zohodino", "Belarus",
        array(
            array("Belaz 75600", "4x4", "3400Hp")
        )
    ),
    array(
        "Oshkosh", "Oshkosh", "USA",
        array(
            array("Oshkosh P-15", "8x8", "840Hp"),
            array("Oshkosh MK-36", "6x6", "425Hp")
        )
    ),
    array(
        "Tatra", "Koprivnice", "Czechoslovakia",
        array(
            array("Tatra T 813", "4x4", "266Hp"),
            array("Tatra T 815", "10x10", "436Hp"),
        )
        )
);
echo "<h1 id='head'>Big Trucks information database</h1>";
echo "<form method='post' action='respond_it385g_assignment2.php'>";
    echo "<div id='f_body'>";
    echo "<label>Select country </label><select name='country'>";
    foreach ($trucks as $country) {
        echo "<option value='".$country[2]."' >".$country[2]."</option>";
    }
    echo "</select>";
    echo "<input style='margin-left:10px'; type='submit' name='submitbutton' value='Show result'>";
    echo "</form>";
    echo "</div>";
?> 
</pre>
</body>
</html>