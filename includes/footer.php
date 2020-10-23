<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/header-footer.css" type="text/css">
 

    <!-- reference copy Font Awesome start -->
    <script src="https://kit.fontawesome.com/03d3a58230.js" crossorigin="anonymous"></script>
    
  </head>


<!--Footer starts (Slackoverflow with modifications)-->
<?php
//using variables to set part of the footer menu*(class exercises)******
$index = "Home";
$findaflight ="Find a Flight";
$places = "Places WeFly";
$information = "Information";

?>
<footer>
<section class="ft-main">
  <div class="ft-main-item"><h2 class="ft-title">WeFly</h2>
    <ul>
    <?php
      echo "<li><a href='index.php'>$index</a></li>";
      echo "<li><a href='information.php'>$information</a></li>";
    ?>
    </ul>
  </div>
  <div class="ft-main-item"><h2 class="ft-title">Flights</h2>
    <ul>
    <?php
      echo "<li><a href='findaflight.php'>$findaflight</a></li>";
      echo "<li><a href='places.php'>$places</a></li>";
    ?>
    </ul>
  </div>
  <div class="ft-main-item"><h2 class="ft-title">Contact</h2>
    <ul>
      <li><a href="mailto:info@wego.ie" target="_blank" title="info@wego.ie">E-mail</a></li>
      <li><a href="tel:+353011001000" target="_blank" title="+353011001000">Phone</a></li>
      <li><a href="https://wa.me/353011001000" target="_blank" title="+353 01 100 1000">WhatsApp</a></li>
    </ul>
  </div>
  <div class="ft-main-item">
    <p class="ft-title">Subscribe to get our latest news!</p>
    <form class="subscribe" action="index.php">
      <input type="email" name="email" placeholder="Enter email address">
      <input type="submit">
    </form>
  </div>
</section>


<section class="ft-social">
  <ul class="ft-social-list">
  <li><a href="https://github.com/kellycfj" target="_blank"><i
      class="fab fa-github-square fa-2x" title="Github"></i></a></li>
    <li><a href="https://www.facebook.com/visitdublin" target="_blank"><i
      class="fab fa-facebook-square fa-2x" title="Facebook"></i></a></li>
    <li><a href="https://wa.me/353011001000" target="_blank"><i class="fab fa-whatsapp-square fa-2x"
      target="_blank" title="WhatsApp"></i></li>
    <li><a href="mailto:info@wefly.ie" target="_blank"><i
      class="fas fa-envelope-square fa-2x" target="_blank" title="E-mail"></i></li>
    <li><a href="https://www.linkedin.com/in/kelly-crystine-f-jesus-b2b510b6" target="_blank"
      alt="Profile Picture" title="LinkedIn"><i class="fab fa-linkedin fa-2x"></i></a></li>
  </ul>
</section>


<section class="ft-legal">
  <ul class="ft-legal-list">
    <li><?php echo "Terms &amp; Conditions";?></li>
    <li><?php echo "Kelly F. Jesus   " . date('d/m/Y'); ?></li>
    <li>&copy; <?php echo "2020 CCT Web Development";?></li>
  </ul>
</section>
</footer>

<?php
//back top button - (W3School)
echo '<button onclick="topFunction()" id="mytopBtn" title="Back to top">Top</button>';
?>

<!--Get the top button -->
<script> var mybutton = document.getElementById("mytopBtn");
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};
function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}; </script>


</body>
</html>