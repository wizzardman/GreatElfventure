<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../Winged.css">
    <title>
        Winged Elf Year 3 - Spring
    </title>
</head>

<body>
    <h1>Year 3 - Spring</h1>
    <table style="width:100%">
        <tr>
            <th>Stress</th>
            <td>Economic 0/5</td>
            <td>Morale 0/5</td>
            <td>Property 0/5</td>
            <td>Military 0/6</td>
        </tr>
        <tr>
            <th>Fate Points</th>
            <td>3/3 Refresh</td>
            <td>0 Bonus</td>
        </tr>
        
    </table>
    <h3 id="jump">Roleplay Event 3.4.1: <a href="../Bonus/12_A Scholarly Pursuit.php">A Scholarly Pursuit</a></h3>
    <p>placeholder</p>
    <p><b>Economic:</b> placeholder</p>
    <p><b>Political:</b> placeholder</p>
    <p><b>Military: </b>placeholder</p>
    <p><b>Mental:</b> placeholder</p>
    <h2>Results</h2>
    <p><b>Economic:</b> placeholder</p>
    <p><b>Political:</b> placeholder</p>
    <p><b>Military:</b> placeholder</p>
    <p><b>Mental:</b> placeholder</p>
    <h3><a href="../../Events/04_0.php">The Elves Gather for Their Annual Potluck</a></h3>
    <?php
        include '../../settarget.php'; 
        settarget("Winged",13,5,12);
        if($_SESSION["YEAR"]<4){
            $_SESSION["YEAR"] = 4;
        }
        include '../footer.php';
        echo getflapstory(null,"../Bonus/????.php");
        echo getarrows("03_3_Winged.php","04_1_Winged.php");
        setlast("Year/03_4_Winged.php");
    ?>
</body>
