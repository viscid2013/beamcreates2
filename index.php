<!doctype html>
<html>
<?php include("includes/header.php");	?>
<body>

<?php include("includes/topside.php");	?>

<div id="mainContent" class="w3-padding w3-center" style="background-color: transparent">
<?php include("includes/main.php");	?>	
	</div>
	
<?php include("includes/footer.php");	?>
	
<?php include("includes/beamscript.php");	?>
	
</body>
	
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("#scrollTop").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>
	
</html>

