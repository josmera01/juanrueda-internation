<?php if(!isset($_SESSION)) session_start(); ?>
<?php 

//$_SESSION["username"] = "Prueba";
if($_SESSION["username"] == ""){
	header("location:index.php");	
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="robots" content="noindex,nofollow">
  <link rel="shortcut icon" href="http://juanruedaconinternational.com/sites/default/files/INTERNATIONAL_ICO.ico" />
  <title>Presentación Juan Rueda</title>
  <link href="css/custom-theme/jquery-ui-1.9.2.custom.css" rel="stylesheet">
  <script src="js/jquery-1.8.3.js"></script>
  <script src="js/jquery-ui-1.9.2.custom.js"></script>
  <link href="css/estilos_play.css" rel="stylesheet" type="text/css" />
  <script type="text/javascript" src="js/ew61.js"></script>
  <script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
  <script type="text/javascript">
$(document).ready(function(){
	$(function() {
					
			
	});
	
});

  </script>
  <script type="text/javascript">
  WebFontConfig = {
    google: { families: [ 'Istok+Web:400,700,400italic,700italic:latin' ] }
  };
  (function() {
    var wf = document.createElement('script');
    wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
      '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
    wf.type = 'text/javascript';
    wf.async = 'true';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(wf, s);
  })(); </script>
  </head>

  <body>
<div id="dialog-message"> </div>
<img alt="full screen background image" src="images/background.jpg" id="full-screen-background-image" />
<div class="container">
    <div class="header">
    <div class="content_header">
        <div class="logo_page"><img src="images/logo.png" width="135" height="111" alt="International" /></div>
        <div class="title_page"><img src="images/titSite.png" width="666" height="47" alt="Presentación Juan Rueda" /></div>
      </div>
  </div>
    <div class="content" style="width:720px">
    <h1>Presentación a la red de distribuidores INTERNATIONAL<tt>&reg;</tt></h1>
    <div class="col1">
      <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="720" height="405" id="FLVPlayer">
        <param name="movie" value="FLVPlayer_Progressive.swf" />
        <param name="quality" value="high" />
        <param name="wmode" value="opaque" />
        <param name="scale" value="noscale" />
        <param name="salign" value="lt" />
        <param name="FlashVars" value="&amp;MM_ComponentVersion=1&amp;skinName=Corona_Skin_2&amp;streamName=video/JuanRuedaFeb20&amp;autoPlay=false&amp;autoRewind=false" />
        <param name="swfversion" value="8,0,0,0" />
        <!-- This param tag prompts users with Flash Player 6.0 r65 and higher to download the latest version of Flash Player. Delete it if you don’t want users to see the prompt. -->
        <param name="expressinstall" value="Scripts/expressInstall.swf" />
        <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
        <!--[if !IE]>-->
        <object type="application/x-shockwave-flash" data="FLVPlayer_Progressive.swf" width="720" height="405">
          <!--<![endif]-->
          <param name="quality" value="high" />
          <param name="wmode" value="opaque" />
          <param name="scale" value="noscale" />
          <param name="salign" value="lt" />
          <param name="FlashVars" value="&amp;MM_ComponentVersion=1&amp;skinName=Corona_Skin_2&amp;streamName=video/JuanRuedaFeb20&amp;autoPlay=false&amp;autoRewind=false" />
          <param name="swfversion" value="8,0,0,0" />
          <param name="expressinstall" value="Scripts/expressInstall.swf" />
          <!-- The browser displays the following alternative content for users with Flash Player 6.0 and older. -->
          <div>
            <h4>Content on this page requires a newer version of Adobe Flash Player.</h4>
            <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" /></a></p>
          </div>
          <!--[if !IE]>-->
        </object>
        <!--<![endif]-->
      </object>
    </div>

  </div>
    
  </div><div class="footer" style="display:none">
    <div class="subfooter"><a href="http://www.internationalcamiones.com/LatinAmerica/">International®</a> es una marca registrada de Navistar Inc. Todos los derechos reservados 2013.<br />
        Sitio web desarrollado por Aguayo Publicidad.</div>
  </div>
<script type="text/javascript">
<!--//--><![CDATA[//><!--
var _gaq = _gaq || [];_gaq.push(["_setAccount", "UA-36746505-1"]);_gaq.push(["_trackPageview"]);(function() {var ga = document.createElement("script");ga.type = "text/javascript";ga.async = true;ga.src = ("https:" == document.location.protocol ? "https://ssl" : "http://www") + ".google-analytics.com/ga.js";var s = document.getElementsByTagName("script")[0];s.parentNode.insertBefore(ga, s);})();
//--><!]]>
swfobject.registerObject("FLVPlayer");
</script>
</body>
</html>
