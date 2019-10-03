<script type="application/javascript">

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