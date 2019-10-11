<div id="footer" class="w3-theme-l1 w3-padding w3-center">
	<div class="w3-padding-small w3-text-theme" id="scrollTop">TOP!</div>
<?php include("menu.php"); ?>	
</div>
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