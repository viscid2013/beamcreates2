<script type="application/javascript">


	/* BEGIN jQuery for scrollTop */
	  
	<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $(".scrollTop").on('click', function(event) {

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
	
	/* END jQuery for scrollTop */
	
	// Open and close sidebars and modals
function w3_open(menuid) {
  var menu = document.getElementById(menuid);
	menu.classList.remove("w3-hide-small","w3-hide-medium");
}

function w3_close(menuid) {
  var menu = document.getElementById(menuid);
	menu.classList.add("w3-hide-small","w3-hide-medium");
}

function checkContent() {
	var cUrl = window.location.href;
	var content = cUrl.split("?");
	var c = content[1].split("=");
	var pc = c[1];
	//alert(pc);
	if(pc === 'graphics'){
	   loadPage('graphic.html','graphics');
	   }
	else if( pc === 'home' || pc === '' ){
		loadPage('homeContent.html','home');	
		}
}
	
function loadPage(url, mContent) {
	//alert(mContent);
  var xhttp;
	var mc;
  xhttp = new XMLHttpRequest();
	mc = mContent;
	
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      updateContent(this,mc);
    }
  };
  xhttp.open("GET", url, true);
  xhttp.send();
	
}

function updateContent(xhttp,mc){
		var sContent = xhttp.responseText;
		var whichPage = mc;
		var hostName = window.location.hostname;
	document.getElementById("mainContent").innerHTML = sContent;
	window.location.assign("?page=" + whichPage);
	
}
	
</script>