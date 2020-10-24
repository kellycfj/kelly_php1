<?php include 'header.php' ?>


<link rel="stylesheet" href="../css/main.css" type="text/css">


<!-- container -(class exercises + w3schools)--------------------->
<!-- homepage content starts--------------------->
<div class= "homepage">

  <div class="content text-highlight"> 
    <?php
    echo '<h1><strong> WeFly</strong></h1><p>Helping you to plan your next destination!</p>';
    ?>
  </div>


  <div class="homecontainer">
      <img src="../img/airplane1.jpg" alt="WeFly" style="width:100% ">
      <a target="_blank" href="findaflight.php"><button class="btn">Search a flight</button>
  </div>

  <!-- student information starts--------------------->
  <?php 
  //variables to set information
  $kelly = "Kelly Crystine Ferreira Jesus";
  $numb = "2019375";
  $ca = "CA1 - PHP project";
  $lec="Web Development - John Snel";

  echo "<div class='homeinfo'><a href=''></a>Student<br><br>$kelly</div>";
  echo "<div class='homeinfo'>Student number<br><br>$numb</div>";
  echo "<div class='homeinfo'>CA<br><br>$ca</div>";
  echo "<div class='homeinfo'>CCT Dublin College<br><br>$lec</div>";
  ?>
  <!--tools information ends--------------------->

  <div class="contentinfo">
    <?php
    echo
    '<div class="infoframe">        
        <img src="../img/XAMPP.png" width="95" height="110" alt="Xampp" title="Web server - Using Xampp">
    </div>

    <div class="infoframe">
        <a href="https://github.com/kellycfj/kelly_php1.git" target="_blank">
        <img src="../img/github.png" width="105" height="110" alt="Github" title="Kelly Github"></a>
    </div>

    <div class="infoframe">
        <a href="https://gitpod.io/workspaces/" target="_blank">
        <img src="../img/gitpod.png" width="105" height="110" alt="Gitpod" title="Kelly Gitpod"></a>
    </div>';
    ?>
  </div>
</div>


<?php include 'footer.php' ?>
