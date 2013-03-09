<?php if(!isset($_SESSION)) session_start(); ?>
<?php 
$_SESSION["username"] = "Juan";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Presentación Juan Rueda</title>
  <link href="css/custom-theme/jquery-ui-1.9.2.custom.css" rel="stylesheet">
  <script src="js/jquery-1.8.3.js"></script>
  <script src="js/jquery-ui-1.9.2.custom.js"></script>
  <link href="css/estilos_chat.css" rel="stylesheet" type="text/css" />
  <script type="text/javascript" src="js/ew61.js"></script>
  <script type="text/javascript">
$(document).ready(function(){
	$(function() {
					
			var name = $( "#name" ),
			email = $( "#email" ),
			allFields = $( [] ).add( name ).add( email ),
			tips = $( ".validateTips" );
			function updateTips( t ) {
			tips
			.text( t )
			.addClass( "ui-state-highlight" );
			setTimeout(function() {
			tips.removeClass( "ui-state-highlight", 1500 );
			}, 500 );
			}
			function checkLength( o, n, min, max ) {
			if ( o.val().length > max || o.val().length < min ) {
			o.addClass( "ui-state-error" );
			updateTips( "Length of " + n + " must be between " +
			min + " and " + max + "." );
			return false;
			} else {
			return true;
			}
			}
			function checkRegexp( o, regexp, n ) {
			if ( !( regexp.test( o.val() ) ) ) {
			o.addClass( "ui-state-error" );
			updateTips( n );
			return false;
			} else {
			return true;
			}
			}
			$( "#dialog-form" ).dialog({
			autoOpen: false,
			height: 300,
			width: 350,
			modal: true,
			buttons: {
			"Create an account": function() {
			var bValid = true;
			allFields.removeClass( "ui-state-error" );
			bValid = bValid && checkLength( email, "email", 6, 80 );
			if ( bValid ) {
			$( "#users tbody" ).append( "<tr>" +
			"<td>" + email.val() + "</td>" +
			"</tr>" );
			$( this ).dialog( "close" );
			}
			},
			Cancel: function() {
			$( this ).dialog( "close" );
			}
			},
			close: function() {
			allFields.val( "" ).removeClass( "ui-state-error" );
			}
			});
			$( "#create-user" )
			.button()
			.click(function() {
				$( "#dialog-form" ).dialog( "open" );
			});
			
			$( "#dialog-form" ).dialog( "open" );
			
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
    <div class="content">
    <h1>Presentación a la red de distribuidores INTERNATIONAL<tt>&reg;</tt></h1>
    <div class="col1">
    
<iframe src="http://static.mediastre.am/embed/aguayo_co" width="720" height="437" border="0" frameBorder="0" scrolling="no" ALLOWTRANSPARENCY="true"></iframe>
    </div>
    <div class="col2">
    <?php include('chat.php'); ?>
    </div>

  </div>
    <div class="footer">
    <div class="subfooter"><a href="http://www.internationalcamiones.com/LatinAmerica/">International®</a> es una marca registrada de Navistar Inc. Todos los derechos reservados 2013.<br />
        Sitio web desarrollado por Aguayo Publicidad.</div>
  </div>
  </div>
</body>
</html>
