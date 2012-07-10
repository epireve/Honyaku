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
			<li><a href="index.html" title="Home" class="hover">home</a></li>
			<li><a href="tour.php" title="Tour">tour</a></li>
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
	    <h2><span>Lets</span> translate!</h2>
			<p>Honyaku is a <strong>free, user friendly, W3C-compliant</strong> translator powered by Google. This translator has been tested and proven compatible with all major browser environments and operating systems. User are free to translate the sentences and words to suit your tastes in any way you like.            </p>
			<table width="100%" cellspacing="12">
			  <tbody><tr>
		<td width="400">
<form name="frm" onSubmit="return convertPhrase()">
  			<textarea name="romaji" style="width:490px" rows="5" class="romaji" onKeyUp="convertPhrase()" onpaste="convertPhrase()"></textarea>
</form>
		</td>
		<td valign="top">
			<table>
				<tbody><tr>
					<td align="right"><input type="checkbox" value="1" onClick="showhide(&#39;hirtd&#39;,this.checked)" checked=""></td>
					<td>Hiragana</td>
				</tr>
				<tr>
					<td align="right"><input type="checkbox" value="1" onClick="showhide(&#39;kattd&#39;,this.checked)" checked=""></td>
					<td>Katakana</td>
				</tr>
				<tr>
					<td align="right"><input type="checkbox" value="1" onClick="showhide(&#39;romtd&#39;,this.checked)" checked=""></td>
					<td>Romaji</td>
				</tr>
				<tr>
					<td>
						<select name="kanasize" onChange="setKanaSize(this.value)" style="width:46px" class="romaji">
							<option value="10">10</option>
							<option value="12">12</option>
							<option value="18">18</option>
							<option value="24">24</option>
							<option value="32" selected="">32</option>
							<option value="48">48</option>
							<option value="72">72</option>
						</select>
					</td>
					<td>Kana font size</td>
				</tr>
			</tbody></table>
		</td>
	</tr>
</tbody></table>
<table width="100%" cellspacing="12">
	<tbody><tr>
		<td valign="top" id="hirtd">
			<fieldset class="kana">
				<legend class="romaji">Hiragana</legend>
				<span id="hiragana" class="kana">&nbsp;</span>
			</fieldset>
		</td>
		<td valign="top" id="kattd">
			<fieldset class="kana">
				<legend class="romaji">Katakana</legend>
				<span id="katakana" class="kana">&nbsp;</span>
			</fieldset>
		</td>
		<td valign="top" id="romtd">
			<fieldset class="kana">
				<legend class="romaji">Romaji</legend>
				<span id="rom" class="kana">&nbsp;</span>
			</fieldset>
		</td>
	</tr>
	<tr>
		<td valign="top" id="transtd" colspan="3">
			<fieldset class="kana">
				<legend class="romaji" style="color:#000320">
					Translate to 
					<select id="transselect" onChange="if(this.value)translate();">
						<option value="">Select...</option>
						<option value="en|ja">Japanese</option>
						<option value="ja|en">English</option>
						<option value="ja|ms">Malay</option>
					</select>
				</legend>
				<span id="translation" class="kana">&nbsp;</span>
			</fieldset>
		</td>
	</tr>
</tbody></table>
            
            
			<p>&nbsp;</p>
<h3 class="floatLeft">Ultimate Feature :</h3>
			<h4> Developed for studies</h4>
		</div>
		<div class="catagory">
			<div class="pink">
				<h3 class="floatLeft">News</h3><h4 class="floatLeft">20.10.10</h4><br class="spacer" />
				<p>Everybody can speak phonetically Japanese right now with Honyaku. Even you dont know a single word.</p>
				<h5 class="floatLeft">honyaku blog</h5><a href="#" title="more" class="more">more</a>
			</div>
			<div class="green">
			  <h3 >Solutions</h3>
				<p>Specially developed for education purpose and fancy ways to translate content in two clicks!</p>
<h5 class="floatLeft">read more</h5><a href="#" title="more" class="more">more</a>
      </div>
			<div class="blue">
				<h3>Support</h3>
				<p><strong>Best on all Browser.</strong> Even you browsing with iPhone and PDA's. Chrome, Mozilla and Opera platform.</p>
				<h5 class="floatLeft">read more</h5><a href="#" title="more" class="more">more</a>
	      </div>
		<br class="spacer" /></div>
		<div class="goal">
			<h2><span>Our</span> goals</h2>
			<p class="greenText"><strong>Aiming to japanese wannabe. In any skills, include beginner and advance user. Honyaku specially developed for education purpose.</strong></p>
			<ul>
			  <li><strong>Supporting Kana's kaligraphy,</strong> support for rendering particular Unicode fonts .</li>
				<li><strong>Fast and reliable, </strong> With the AJAX Language API, you can translate and detect the language of blocks of text within a web page using JavaScript. </li>
		  </ul>
		</div>
		<form method="post" action="#" name="login" class="login">
			<h2>Subscribe News</h2>
			<label>Name</label><input name="name" type="text" tabindex="1" id="name" /><br class="spacer" />
			<label>E-mail</label>
			<input name="text" type="text" tabindex="2" id="email" />
			<br class="spacer" />
			
			<input name="" type="image" src="images/login_btn.gif" tabindex="3" title="subscribe" class="loginBtn" />
		</form>
	<br class="spacer" /></div>	
    
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
