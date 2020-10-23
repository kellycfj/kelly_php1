<?php include 'header.php' ?>

<link rel="stylesheet" href="../css/main.css" type="text/css">
<link rel="stylesheet" href="../css/forms.css" type="text/css">

<!-- starts container - page content------------------>
<div class="container">

    <div> &nbsp;
        <h1 id="title-toppage">Find a Flight</h1>
        <p id="subtitle-toppage">Where will be your next trip?</p>
    </div><br>

    <!-- starts search ------------------------->
    <?php
        // array associative array
        $country=array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", 
        "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", 
        "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", 
        "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", 
        "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", 
        "Hungary"=>"Budapest", "Latvia"=>"Riga","Malta"=>"Valetta", "Austria" => "Vienna", 
        "Poland"=>"Warsaw") ;
    ?> 

    <form class="findaflight" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <select id="count2" name="selectflight">
        <option value="0">Select a country</option>
        <option value="1">Brazil</option>
        <option value="1">Uruguay</option>
        <option value="1">Russia</option>
        <option value="1">United States</option>
        <option value="1">Iran</option>
        <option value="1">Canada</option>
        <option value="1">New Zeland</option>
    
        <?php
        //loop using array to create options for select dropdown just with country
        //escaping the quotes and includinding a line feed 
        foreach($country as $flights=>$destine){
        echo "<option value=\"$flights\">$flights</option>\n"; 
        //option line to print country and capital inside the dropdown => echo "<option value=\"$flights\">$destine, $flights</option>\n"; <=
        //I decided to use inside welcome.php page    
        }
        ?>
    
        </select> 
        <input type="submit" name="search" class="form-btnsearch" value="Search">
    </form>
 
    <div class="reply">
        <?php
        // display form if not submitted
        if(!isset($_POST['search'])){
        //process input when submits form
        }else if(isset($_REQUEST['selectflight']) && $_REQUEST['selectflight'] == '0')
        { //ask user to choose a country
        echo '<div class="searchreply"><p>Please select your next destination.</p><br></div>';              
        } 
        else if (isset($_REQUEST['selectflight']) && $_REQUEST['selectflight'] == '1')
        {//reply user if the country is not listed in the array
        echo '<div class="searchreply"><p>Sorry, we are not flying to this country at the moment.</p><br></div>'; 
        }
        else{
        //repites the chosen destination (country including capital)
        $co=$_POST['selectflight'];
        //assossiate array corresponding key in associative array
        $destination=$country[$co];
        //print the information country and capital back to the user, based on selected country
        echo "<div class='searchreply'><p> You chose <b> $co </b>,
        we have flights to the capital, <b> $destination. </b></p></div>"; 

        echo '<a href="welcome.php"><input type="submit" name="reservation"
        id="btnbook" value="Reservation"></a>';
        }
        ?>
    </div>

</div>
<!-- Container ends--------------------------------->

<?php
    //back button link
    echo '<div class="titles"><p><a href="index.php">Back</a></p><br></div>';
?>

<?php include 'footer.php' ?>

