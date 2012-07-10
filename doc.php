<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Honyaku | Say Konichiwa on the fly</title>

<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<script type="text/javascript" src="./scriptreve/jsapi"></script>
<script type="text/javascript"> google.load("language", "1"); </script><script src="./scriptreve/saved_resource" type="text/javascript"></script><script src="./scriptreve/defaultEpi.js" type="text/javascript"></script>

<script src="./scriptreve/script.js"></script>
<script>
var busy = 0;
var delay = 2000;
function convertPhrase(clear) {
	var val = clear?'':document.forms.frm.romaji.value;
	var hirElem = document.getElementById("hiragana");
	var katElem = document.getElementById("katakana");
	var romElem = document.getElementById("rom");
	hirElem.innerHTML = getHiragana(val);
	katElem.innerHTML = getKatakana(val);
	romElem.innerHTML = getRomaji(val);
	return false;
}

function translate() {
	var lang = document.getElementById("transselect").value.split("|");
	var val = document.forms.frm.romaji.value;
//	var val = lang[0]=="en"?hir:rom;
	google.language.translate(val, lang[0], lang[1], function(result) {  
		var res = "Error.";
		if (!result.error) {
			res = result.translation;    
			convertPhrase(true);
		}
		var container = document.getElementById("translation");    
		container.innerHTML = res;
	});
}

function showhide(name,show) {
	var elem = document.getElementById(name);
	if(elem) {
		if(show)
			elem.style.display='';
		else
			elem.style.display='none';
	}
}

function setKanaSize(val) {
	var hirElem = document.getElementById("hiragana");
	var katElem = document.getElementById("katakana");
	var romElem = document.getElementById("rom");
	if(hirElem)
		hirElem.style.fontSize = val+"px";
	if(katElem)
		katElem.style.fontSize = val+"px";
	if(romElem)
		romElem.style.fontSize = val+"px";
}

</script>

<body class="romaji" leftmargin="12" rightmargin="12">

<script type="text/javascript">
var skin = {};
skin['BORDER_COLOR'] = '#cccccc';
skin['ENDCAP_BG_COLOR'] = '#e0ecff';
skin['ENDCAP_TEXT_COLOR'] = '#333333';
skin['ENDCAP_LINK_COLOR'] = '#0000cc';
skin['ALTERNATE_BG_COLOR'] = '#ffffff';
skin['CONTENT_BG_COLOR'] = '#ffffff';
skin['CONTENT_LINK_COLOR'] = '#0000cc';
skin['CONTENT_TEXT_COLOR'] = '#333333';
skin['CONTENT_SECONDARY_LINK_COLOR'] = '#7777cc';
skin['CONTENT_SECONDARY_TEXT_COLOR'] = '#666666';
skin['CONTENT_HEADLINE_COLOR'] = '#333333';
skin['POSITION'] = 'top';
skin['DEFAULT_COMMENT_TEXT'] = '- apa2 komen -';
skin['HEADER_TEXT'] = 'Comments';

</script>
	<!-- top navigation start -->
	<div id="topNav">	
		<ul>
			<li><a href="index.html" title="Home" >home</a></li>
			<li><a href="#" title="Tour">tour</a></li>
			<li><a href="#" title="About">about</a></li>
			<li><a href="doc.php" title="Work" class="hover">work and document</a></li>
            <li><a href="http://honyaku.org/blog" title="Blog">honyaku blog</a></li>
			<li><a href="#" title="Contact">contact</a></li>
		</ul>
	</div>
	<!-- top navigation start -->
	<!-- body start -->
	<div id="body">
		<a href="index.html" title="honyaku"><img src="images/Layer-logo.png" width="244" height="77" alt="Green Web"  border="0" class="logo" /></a><br />
		<h1>Say Konichiwa on the</h1>
		<div class="bodyText">
	    <h2><span>Release</span> and Version</h2>
			<p>Honyaku is a <strong>free, user friendly, W3C-compliant</strong> translator powered by Google. This translator has been tested and proven compatible with all major browser environments and operating systems. User are free to translate the sentences and words to suit your tastes in any way you like.            </p>
		  <p> Version 2 is the latest available version of the Honyaku. Its documentation includes basic concepts and step-by-step instructions on how the common features of the Application Programming Interface. </p>
          <ol>
              <li>	Version 0.1 - Testing using Google API</li>
            <li>Version 1.1 - Translating using Google API's<br />
                <ol>
                  <li>Update Romaji to Hiragana and Katagana</li>
                  <li>Update design.</li>
                </ol>
            </li>
            <li>Version 1.2 - Update Design-CSS and AJAX
              <ol>
                <li>Transliteration from Hiragana and Katagana</li>
              </ol>
            </li>
            </ol>
          <p align="center"><strong>Version 0.1          </strong></p>
          <p align="center"><img src="images/version1.png" /></p>
          <p align="center"><strong>Version 1.1</strong></p>
          <p align="center"><img src="images/version2.PNG" /></p>
          <center>
            <p><img src="images/process.png" align="center" /></p>
            <p>&nbsp;</p>
            <p><img src="images/dataflow.png" /></p>
          </center>
<p>&nbsp;</p>
		</div>
	</div>	
    
    <center>
      <img src="images/poweredby.png" />
      <br />
      <br />
    </center>
<!-- body end -->	
	<!-- footer start -->
	<div id="footer">
		<div class="footer" align="center">
			<ul>
				<li><a href="index.html" title="Home" class="hover">Home</a>|</li>
				<li><a href="#" title="Tour">Tour</a>|</li>
				<li><a href="#" title="About">About</a>|</li>
				<li><a href="doc.php" title="Work">Work and Document</a>|</li>
           	 	<li><a href="http://honyaku.org/blog" title="Blog">Honyaku blog</a>|</li>
				<li><a href="#" title="Contact">Contact</a></li>
			</ul>
			<p>&copy;Honyaku. <?php echo date("Y"); ?> All rights reserved.</p>
			<p class="valid"><a href="http://validator.w3.org/check?uri=referer" target="_blank" title="Valid XHTML" class="xhtml">XHTML</a> <a href="http://jigsaw.w3.org/css-validator/check/referer" target="_blank" title="Valid CSS" class="css">CSS</a></p><br class="spacer" />
			<p class="tworld">Designed by : <a href="http://www.mohamadfirdaus.com" target="_blank">Mohamad Firdaus</a></p>
	    <br class="spacer" /></div>
	</div>
	<!-- footer end -->		
</body>
</html>
