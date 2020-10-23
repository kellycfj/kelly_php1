<?php include 'header.php' ?>

<link rel="stylesheet" href="../css/main.css" type="text/css">
<link rel="stylesheet" href="../css/forms.css" type="text/css">

<div> &nbsp;
<h1 id="title-toppage">Welcome to WeFly</h1>
<p id="subtitle-toppage">Book your Flight Now</p>
</div><br>

<div class="booknow">

    <form class="form-reservation" method="post">

        <input type="text" class="form2" placeholder="Your first name">
        <input type="text" class="form2" placeholder="Your last name">
        <input type="email" class="form2" placeholder="Your email">
        <input type="text" class="form2" placeholder="Phone number">

        <label class="country">FROM: </label>
        <select id="count"><option  select="selectFlight">Departure</option>      
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
     <?php
        //loop using array to create options for select dropdown with capital and country
        //escaping the quotes and includinding a line feed 
        foreach($country as $flights=>$destine){
          //print capital and country as option to the user
        echo "<option value=\"$flights\">$destine, $flights</option>\n";    
        }
        ?>
 
        </select>     
        <label class="checktext">Check-in:</label><input type="date" id="check"> <br>

        <label class="country">TO:</label><select id="count"><option  select="selectFlight">Destination</option> 
        <?php
        //loop using array to create options for select dropdown with capital and country
        //escaping the quotes and includinding a line feed 
        foreach($country as $flights=>$destine){
          //print capital and country as option to the user
        echo "<option value=\"$flights\">$destine, $flights</option>\n";    
        }
        ?>
        </select>  
        <label class="checktext">Check-out:</label><input type="date" id="check">

        <label class="quantity"> Adults: </label>
        <select id="quant">
            <option value="0"></option>
            <option value="1">01</option>
            <option value="2">02</option>
            <option value="3">03</option>
            <option value="4">04</option>
            <option value="5">05</option>
        </select>
        <label class="quantity"> Children: </label>
        <select id="quant">
            <option value="0"></option>
            <option value="1">01</option>
            <option value="2">02</option>
            <option value="3">03</option>
            <option value="4">04</option>
            <option value="5">05</option>
        </select>
        <label class="quantity"> Seats: </label>
        <select id="quant">
            <option value="0"></option>
            <option value="1">01</option>
            <option value="2">02</option>
            <option value="3">03</option>
            <option value="4">04</option>
            <option value="5">05</option>
        </select>
        <textarea class="form2" placeholder="Special requirement..."></textarea>
        <input type="submit" class="form-btn" value="Check Price">
    </form>

</div>
    
    <!--/ ends page content ------------------------------------------------------------------------------>

    <?php
    //back button link
    echo '<div class="titles"><p><a href="findaflight.php">Back</a></p><br></div>';
    ?>



<?php include 'footer.php' ?>