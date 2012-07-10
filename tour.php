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
			<li><a href="tour.php" title="Tour" class="hover">tour</a></li>
			<li><a href="aboutus.php" title="About">about</a></li>
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
	    <h2><span>How to use</span> Honyaku?</h2>
			<p><strong>Honyaku</strong> performs real-time translation between English, Japanese,and Malay languages and their combinations. </p>
			<center>
			  <p><img src="/images/tour.png" /><br />
			    <br />
              </p>
			</center>
			<table border="1" cellspacing="0" cellpadding="0" align="center">
			  <tr>
			    <td width="67"><p align="center"><strong>Section</strong></p></td>
			    <td width="358"><p align="center"><strong>Function</strong></p></td>
			    <td width="213"><p align="center"><strong>Direction</strong></p></td>
		      </tr>
			  <tr>
			    <td width="67"><p align="center">A</p></td>
			    <td width="358" valign="top"><p>An inputtext to be process. A plain text (either    words or sentences) will be input here before translated.</p></td>
			    <td width="213" valign="top"><p>User enters the input. This input will be identified    as plain text.</p></td>
		      </tr>
			  <tr>
			    <td width="67"><p align="center">B</p></td>
			    <td width="358" valign="top"><p>This checkbox are powered by AJAX which is related    to the transliterate box (refer section C). When either one box is uncheck,    the transliterate box in Section C will be disappear and vice versa. User    also can selecting font size of transliterate display in Section C. User can    select font 10 to 72 in size.</p></td>
			    <td width="213" valign="top"><p>User checks the box to display the following    transliteration box. <br />
			      Eg. If user unchecks the &lsquo;Hiragana&rsquo; box, the    hiragana transliteration box will be disappearing.</p></td>
		      </tr>
			  <tr>
			    <td width="67"><p align="center">C</p></td>
			    <td width="358" valign="top"><p>Transliterate display box. There are three(3) box    which is Hiragana, Katagana and Romaji. Those three has different usage.    Hiragana and Katagana will be display the transliterate of romaji character    of input text from section A and Romaji will be display transliterate text of    Japanese character (either hiragana, katagana and kanji).</p></td>
			    <td width="213" valign="top"><p>The transliteration will be displayed here. Using    AJAX processor, the transliteration will be display instant after user make    an input in input text box.</p></td>
		      </tr>
			  <tr>
			    <td width="67"><p align="center">D</p></td>
			    <td width="358" valign="top"><p>Translated text box. Translated text which finish    processed by translating processor will be displayed here. However, this    translation only will be displayed when the match of input text are    comparable.</p></td>
			    <td width="213" valign="top"><p>All translated will be appear here. Traslation are    relate with &lsquo;translate to&rsquo; drop down in Section E. Different translation will    be display in different selection of language. </p></td>
		      </tr>
			  <tr>
			    <td width="67" valign="top"><p align="center">E</p></td>
			    <td width="358" valign="top"><p>Languages drop down list to be selected. There    output language to be selected; English, Japanese, and Bahasa Malaysia.</p></td>
			    <td width="213" valign="top"><p>The language will change if different selection    made.</p></td>
		      </tr>
		  </table>
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
