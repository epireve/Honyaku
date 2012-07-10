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
			<li><a href="index.html" title="Home">home</a></li>
			<li><a href="tour.php" title="Tour">tour</a></li>
			<li><a href="aboutus.php" title="About" class="hover">about</a></li>
			<li><a href="doc.php" title="Work">work and document</a></li>
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
	    <h2><span>Behind</span> the scene</h2>
		  <p><strong>Tan Eng San</strong></p>
	    <p>&nbsp;</p>
		  <p><strong>Mohamad Firdaus Bin Mohamad Adib</strong></p>
		  <p><tab><a href="http://mohamadfirdaus.com">	Firdaus's Blog</a></p>
		  <p>Both of us can are classmate in Japan Malaysia Technical Institute.</p>
		  <p><strong>Million of thanks to ;</strong></p>
		  <p align="center"><em>&quot;Our friends and teacher, family and everyone which is contibuting in this project. Also to our University, Japan Malaysia Technical Institute.&quot;</em></p>
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
				<li><a href="tour.php" title="Tour">Tour</a>|</li>
				<li><a href="aboutus.php" title="About">About</a>|</li>
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
