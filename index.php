<html>
<head>

<link rel="stylesheet" href="styles.css">

<link rel="shortcut icon" href="images/favicon.ico">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>dzsnet start | powered by dzsnet solutions</title>

</head>

<body>

<div id='top' align="center">
  <table align="center">
    <tr>
      <td height="0" valign="bottom"><script language="javascript" src="nevnap.js"></script></td></tr>
  </table>

<script language="javascript" src="search.js"></script>

<div align="center">
<?php
$ip = $_SERVER['REMOTE_ADDR'];
$hostaddress = gethostbyaddr($ip);
print("<b>IP addr.:</b> $ip | ");
print("<b>reverse:</b> $hostaddress &nbsp &nbsp");
?>
</br>
</br>
<a href="https://disneyplus.com" cstyle="text-decoration:none;"><img border="0" width="30" height=auto align=absmiddle src="images/disneyplus.png"></a>&nbsp &nbsp &nbsp
<a href="https://hbomax.com" cstyle="text-decoration:none;"><img border="0" width="30" height=auto align=absmiddle src="images/hbomax.png"></a>&nbsp &nbsp &nbsp
<a href="https://netflix.com" cstyle="text-decoration:none;"><img border="0" width="30" height=auto align=absmiddle src="images/netflix.png"></a>&nbsp &nbsp &nbsp
<a href="https://www.skyshowtime.com/" cstyle="text-decoration:none;"><img border="0" width="30" height=auto align=absmiddle src="images/skyshowtime.png"></a>&nbsp &nbsp &nbsp
<a href="https://app.plex.tv" cstyle="text-decoration:none;"><img border="0" width="30" height=auto align=absmiddle src="images/plex.png"></a>&nbsp &nbsp &nbsp
<a href="https://www.xbox.com/en-US/play" cstyle="text-decoration:none;"><img border="0" width="30" height=auto align=absmiddle src="images/xcloud.png"></a>&nbsp &nbsp &nbsp
<a href="https://dzsnet.com/webcam" cstyle="text-decoration:none;"><img border="0" width="30" height=auto align=absmiddle src="images/webcam.png"></a>&nbsp &nbsp &nbsp
<a href="https://fast.com" cstyle="text-decoration:none;"><img border="0" width="30" height=auto align=absmiddle src="images/fast.png"></a>
</div>

<section id="first" class="section">
<div class="row">
<form name="searchform" onSubmit="return dosearch();"  autocomplete="off">
    <div class="container">
      <input type="radio" name="sengines" id="radio-1" value="https://www.google.hu/search?q=" onclick="document.searchform.searchterms.focus()" checked="1">
      <label for="radio-1"><span class="radio"></span></label><a href="https://google.hu"><img src="images/google.png" alt="Google" width="68" height="29" border="0" align="absmiddle" /></a>
    </div>
    <div class="container">
      <input type="radio" name="sengines" id="radio-2" value="https://images.google.hu/images?q=" onclick="document.searchform.searchterms.focus()">
      <label for="radio-2"><span class="radio"></span></label><a href="https://images.google.hu"><img src="images/google_images.png" alt="Google Képek" width="68" height="29" border="0" align="absmiddle" /></a>
    </div>
    <div class="container">
      <input type="radio" name="sengines" id="radio-reddit" value="https://www.reddit.com/search/?q=" onclick="document.searchform.searchterms.focus()">
      <label for="radio-reddit"><span class="radio"></span></label><a href="https://www.reddit.com"><img src="images/reddit.png" alt="Twitch" width="68" height="29" border="0" align="absmiddle" /></a>
    </div>
</br>
    <div class="container">
      <input type="radio" name="sengines" id="radio-3" value="https://www.youtube.com/results?search_query=" onclick="document.searchform.searchterms.focus()">
      <label for="radio-3"><span class="radio"></span></label><a href="https://youtube.com"><img src="images/youtube.png" alt="YouTube" width="68" height="29" border="0" align="absmiddle" /></a>
    </div>
    <div class="container">
      <input type="radio" name="sengines" id="radio-twitch" value="https://www.twitch.tv/search?term=" onclick="document.searchform.searchterms.focus()">
      <label for="radio-twitch"><span class="radio"></span></label><a href="https://twitch.tv"><img src="images/twitch.png" alt="Twitch" width="68" height="29" border="0" align="absmiddle" /></a>
    </div>
    <div class="container">
      <input type="radio" name="sengines" id="radio-trovo" value="https://trovo.live/search?q=" onclick="document.searchform.searchterms.focus()">
      <label for="radio-trovo"><span class="radio"></span></label><a href="https://trovo.live"><img src="images/trovo.png" alt="Twitch" width="68" height="29" border="0" align="absmiddle" /></a>
    </div>

</br>

    <div class="container">
      <input type="radio" name="sengines" id="radio-15" value="https://www.alza.hu/search.htm?exps=" onclick="document.searchform.searchterms.focus()">
      <label for="radio-15"><span class="radio"></span></label><a href="https://www.alza.hu"><img src="images/alza.png" alt="emag.hu" width="68" height="29" border="0" align="absmiddle" /></a>
    </div>
    <div class="container">
      <input type="radio" name="sengines" id="radio-emag" value="https://www.emag.hu/search/" onclick="document.searchform.searchterms.focus()">
      <label for="radio-emag"><span class="radio"></span></label><a href="https://www.emag.hu/homepage"><img src="images/emag.png" alt="emag.hu" width="68" height="29" border="0" align="absmiddle" /></a>
    </div>
    <div class="container">
      <input type="radio" name="sengines" id="radio-14" value="https://ipon.hu/kereses/shop?keyword=" onclick="document.searchform.searchterms.focus()">
      <label for="radio-14"><span class="radio"></span></label><a href="https://ipon.hu"><img src="images/ipon3.png" alt="ipon.hu" width="68" height="29" border="0" align="absmiddle" /></a>
    </div>
    <div class="container">
      <input type="radio" name="sengines" id="radio-conrad" value="https://www.conrad.hu/kereses?search=" onclick="document.searchform.searchterms.focus()">
      <label for="radio-conrad"><span class="radio"></span></label><a href="https://www.conrad.hu/"><img src="images/conrad.png" alt="edigital.hu" width="68" height="29" border="0" align="absmiddle" /></a>
    </div>
    <div class="container">
      <input type="radio" name="sengines" id="radio-tesco" value="https://bevasarlas.tesco.hu/groceries/hu-HU/search?query=" onclick="document.searchform.searchterms.focus()">
      <label for="radio-tesco"><span class="radio"></span></label><a href="https://bevasarlas.tesco.hu/groceries/hu-HU"><img src="images/tesco.png" alt="Tesco" width="68" height="29" border="0" align="absmiddle" /></a>
    </div>
</br>
        <table width="650" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="393">	    <div align="right">
              <input type="hidden" name="ie" value="UTF-8" />
              <input type="hidden" name="oe" value="UTF-8" />
              <input type="text" maxlength="255" size="50" name="searchterms" class="textboxstyle2" autofocus/>
            </div></td>
            <td width="69"><div align="center">
              <input name="f" type="submit" value="search" class="buttons" />
            </div></td>
            <td width="69"><div align="center">
              <input name="reset" type="button" id="reset" class="buttons" value="clear" onclick="document.searchform.searchterms.value=''; document.searchform.searchterms.focus()"; />
            </div></td>
          </tr>
        </table>
</br>
    <div class="container">
      <input type="radio" name="sengines" id="radio-5" value="https://www.ebay.com/sch/i.html?_nkw=" onclick="document.searchform.searchterms.focus()">
      <label for="radio-5"><span class="radio"></span></label><a href="https://www.ebay.com"><img src="images/ebaylogo.png" alt="ebay" width="68" height="29" border="0" align="absmiddle" /></a>
    </div>
    <div class="container">
      <input type="radio" name="sengines" id="radio-ali" value="https://www.aliexpress.com/wholesale?catId=0&initiative_id=SB_20220212065257&SearchText=" onclick="document.searchform.searchterms.focus()">
      <label for="radio-ali"><span class="radio"></span></label><a href="https://www.aliexpress.com"><img src="images/aliexpress.png" alt="ebay" width="68" height="29" border="0" align="absmiddle" /></a>
    </div>
    <div class="container">
      <input type="radio" name="sengines" id="radio-5amazon" value="https://www.amazon.de/s?k=" onclick="document.searchform.searchterms.focus()">
      <label for="radio-5amazon"><span class="radio"></span></label><a href="https://www.amazon.de"><img src="images/amazon.png" alt="ebay" width="68" height="29" border="0" align="absmiddle" /></a>
    </div>
    <div class="container">
      <input type="radio" name="sengines" id="radio-5_" value="https://www.jofogas.hu/magyarorszag?q=" onclick="document.searchform.searchterms.focus()">
      <label for="radio-5_"><span class="radio"></span></label><a href="https://jofogas.hu"><img src="images/jofogas_logo.png" alt="ebay" width="68" height="29" border="0" align="absmiddle" /></a>
    </div>
    <div class="container">
      <input type="radio" name="sengines" id="radio-5_hardverapro" value="https://hardverapro.hu/aprok/keres.php?stext=" onclick="document.searchform.searchterms.focus()">
      <label for="radio-5_hardverapro"><span class="radio"></span></label><a href="https://hardverapro.hu"><img src="images/hardverapro.png" alt="ebay" width="68" height="29" border="0" align="absmiddle" /></a>
    </div>
</br>
    <div class="container">
      <input type="radio" name="sengines" id="radio-10" value="https://szotar.sztaki.hu/search?fromlang=all&tolang=all&fromlang=all&tolang=all&searchWord=" onclick="document.searchform.searchterms.focus()">
      <label for="radio-10"><span class="radio"></span></label><a href="https://szotar.sztaki.hu"><img src="images/sztakiszotarlogo.png" alt="sztaki" width="68" height="29" border="0" align="absmiddle" /></a>
    </div>
    <div class="container">
      <input type="radio" name="sengines" id="radio-11" value="https://translate.google.hu/#en/hu/" onclick="document.searchform.searchterms.focus()">
      <label for="radio-11"><span class="radio"></span></label><a href="https://translate.google.hu"><img src="images/googletranslatelogo.png" alt="googletranslate" width="68" height="29" border="0" align="absmiddle" /></a>
    </div>

    <div class="container">
      <input type="radio" name="sengines" id="radio-choco" value="https://chocolatey.org/packages?q=" onclick="document.searchform.searchterms.focus()">
      <label for="radio-choco"><span class="radio"></span></label><a href="https://chocolatey.org/"><img src="images/choco.png" alt="chocolatey" width="68" height="29" border="0" align="absmiddle" /></a>
    </div>
    <div class="container">
      <input type="radio" name="sengines" id="radio-13" value="https://ncore.pro/torrents.php?&miben=name&tipus=all&mire=" onclick="document.searchform.searchterms.focus()">
      <label for="radio-13"><span class="radio"></span></label><a href="https://ncore.pro/hitnrun.php"><img src="images/ncore.png" alt="ncore.pro" width="68" height="29" border="0" align="absmiddle" /></a>
    </div>
    <div class="container">
      <input type="radio" name="sengines" id="radio-13bh" value="https://bithumen.be/browse.php?genre=0&search=" onclick="document.searchform.searchterms.focus()">
      <label for="radio-13bh"><span class="radio"></span></label><a href="https://bithumen.be/browse.php"><img src="images/bh.png" alt="ncore.pro" width="68" height="29" border="0" align="absmiddle" /></a>
    </div>
</br>
    <div class="container">
      <input type="radio" name="sengines" id="radio-github" value="https://github.com/search?q=" onclick="document.searchform.searchterms.focus()">
      <label for="radio-github"><span class="radio"></span></label><a href="https://github.com"><img src="images/github.png" alt="Twitch" width="68" height="29" border="0" align="absmiddle" /></a>
    </div>
    <div class="container">
      <input type="radio" name="sengines" id="radio-docker" value="https://hub.docker.com/search?q=" onclick="document.searchform.searchterms.focus()">
      <label for="radio-docker"><span class="radio"></span></label><a href="https://hub.docker.com"><img src="images/docker.png" alt="Twitch" width="68" height="29" border="0" align="absmiddle" /></a>
    </div>
    <div class="container">
      <input type="radio" name="sengines" id="radio-pypi" value="https://pypi.org/search/?q=" onclick="document.searchform.searchterms.focus()">
      <label for="radio-pypi"><span class="radio"></span></label><a href="https://pypi.org"><img src="images/pypi.png" alt="Twitch" width="68" height="29" border="0" align="absmiddle" /></a>
    </div>
    <div class="container">
      <input type="radio" name="sengines" id="radio-tastedive" value="https://tastedive.com/movies/like/" onclick="document.searchform.searchterms.focus()">
      <label for="radio-tastedive"><span class="radio"></span></label><a href="https://tastedive.com"><img src="images/tastedive.png" alt="Twitch" width="68" height="29" border="0" align="absmiddle" /></a>
    </div>
 </div>
</form>
</section>

<script language="JavaScript">
document.searchform.searchterms.focus();
</script>

<div style="width: 316px;">
<a class="weatherwidget-io" href="https://forecast7.com/en/47d9521d72/nyiregyhaza/" data-label_1="" data-font="Roboto" data-mode="Forecast" data-days="7" data-theme="gray" data-basecolor="#2c2f33" ></a>
<script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
</script>
</div>

</body>
</html>
