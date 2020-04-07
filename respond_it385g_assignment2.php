<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Big trucks</title>
<style>
    body {
        font-family: sans-serif;
        background-color:lightslategrey;
    }
    table{
        margin:auto;
        background-color:white;
    }
    td {
        padding:0px;
    }
    button, a {
        color:black;
        text-decoration:none;
        transition: 0.8s;
        padding:5px;
        margin-bottom:10px;
        font-weight:bold;
    }
    button:hover {
        box-shadow: 0px 0px 4px 3px white;
    }
    #tbl {
        box-shadow: 2px 2px 4px 2px;
    }
    #selection {
        Background-color: black;
        width:350px;
        border: 2px solid white;
        margin:auto;
        margin-bottom: 20px;
        color: white;
        padding: 5px;
        text-align:center;
        font-weight:bold;
        font-size: 120%;
        box-shadow: 2px 2px 4px 2px black;
    }
    #caption {
        background-color: black;
        color:white;
        font-size: 200%;
        font-weight: 700;
        letter-spacing: 10px;
        text-align:center;
        text-transform: uppercase;
        padding:10px;
    }
    #head {
        Background-color: black;
        color: white;
        padding: 15px;
        font-size: 120%;
    }
    #sub {
        font-weight: bold;
        text-align: center;
        padding: 15px;
    }
    #m_head{
        Background-color: black;
        color: white;
    }
    #misc {
        width:100px;
        text-align: center;
        font-size: 12px;
        padding: 5px;
    }
</style>
<body>
<pre>
<?php
$trucks = array(
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
//Check form value
if(isset($_POST['country'])){
    $incountry=$_POST['country'];
}
//check if value is missing
if (empty($incountry)) {
        echo "<h1 id='caption'>Big Trucks information database</h1>";
        echo "<div id='selection'>";
        echo "<p>Your selection is empty</p>";
        echo "<button type='button' name='backbutton'><a href='it385g_assignment2.php' >Back</a></button>";
        echo "</div>";
// kör tabellen        
}else{
    echo "<h1 id='caption'>Big Trucks information database</h1>";
    echo "<div id='selection'>";
        echo "<p>Your selection: $incountry</p>";
    echo "</div>";
    echo "<table id='tbl' border='1px'>";
    echo "<tr><th id='head'>Manufacturer</th><th id='head'>City</th><th id='head'>Country</th><th id='head' colspan='6'>Misc</th></tr>";
    foreach ($trucks as $country) {
        if($country[2]==$incountry){  
        echo "<tr>";  
        echo "<td id='sub'>" . $country[0] . "</td>";
        echo "<td id='sub'>" . $country[1] . "</td>";
        echo "<td id='sub'>" . $country[2] . "</td>";
    
        foreach ($country[3] as $brand) {
            echo "<td>";
            echo "<table>";
            echo "<tr><th id='m_head'>Model</th></tr>";
            echo "<tr><td id='misc'>" . $brand[0] . "</td></tr>";
            echo "<tr><th id='m_head'>Drive shafts</th></tr>";
            echo "<tr><td id='misc'>" . $brand[1] . "</td></tr>";
            echo "<tr><th id='m_head'>Horsepowers</th></tr>";
            echo "<tr><td id='misc'>" . $brand[2] . "</td></tr>";
            echo "</table>";
            echo "</td>";
        } 
        echo "</tr>";   
    }
    }    
}
echo "</table>";
// Test POST
//print_r($_POST);
?>  
</pre>
</body>
</html>