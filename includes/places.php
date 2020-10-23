<?php include 'header.php' ?>

<link rel="stylesheet" href="../css/main.css" type="text/css">

<body>

<div class="informations">
    
    <div class="tableplaces">
    &nbsp;
    <?php
        echo '<h1 id="title-toppage">Places we fly </h1>';
        echo '<h2>Since 2005</h2>';
        ?>
        <table>
        <tr><th>Country</th><th>Capital</th></th>
        <?php
        $country=array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", 
        "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", 
        "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", 
        "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", 
        "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", 
        "Hungary"=>"Budapest", "Latvia"=>"Riga","Malta"=>"Valetta", "Austria" => "Vienna", 
        "Poland"=>"Warsaw") ;
        foreach($country as $cou => $capital){
        echo "<tr><td>$cou</td><td>$capital</td></tr>";
        }
        ?>
        </table>
    </div>

</div>

<!-- Container ends-------------------->
<?php
    //back button link
    echo '<div class="titles"><p><a href="index.php">Back</a></p><br></div>';
?>

</body>

<?php include 'footer.php' ?>