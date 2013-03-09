<?php if(!isset($_SESSION)) session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Presentación Juan Rueda</title>
  <link href="css/custom-theme/jquery-ui-1.9.2.custom.css" rel="stylesheet">
  <script src="js/jquery-1.8.3.js"></script>
  <script src="js/jquery-ui-1.9.2.custom.js"></script>
  <script type="text/javascript" src="js/jquery.countdown.min.js"></script>

  <link href="css/estilos_pronto.css" rel="stylesheet" type="text/css" />
  <script type="text/javascript" src="js/ew61.js"></script>
  <script type="text/javascript">
$(document).ready(function(){
	$(function() {
		
		
		<?php
			date_default_timezone_set('America/Bogota');
		
			$now = date('Y-m-d H:i:s');
			$future_date = '2013-02-21 15:00:00';
			$diff = abs(strtotime($future_date) - strtotime($now));
			//$interval = date_diff($now, $future_date);
			//echo $interval;
			//echo $interval->format("%d days, %h hours, %i minutes, %s seconds");
		
		?>
		
		var austDay = new Date();
		austDay = new Date(austDay.getFullYear(), 2 - 1, 21, 15, 0, 0);
		
		//$('#glowingLayout').countdown({until: +<?php echo $diff ?>, onExpiry: liftOff, format: 'dHMS', 
   		// layout: '<div class="contDay"><span><img src="images/count/img_a.jpg" width="28" height="34" alt="a" /></span><span class="image">{d1}</span><span><img src="images/count/img_dias.jpg" width="82" height="34" alt="días" /></span></div>' + 
//        '<span class="image{h10}"></span><span class="image{h1}"></span>' + 
//        '<span class="imageSpace"></span>' + 
//        '<span class="image{m10}"></span><span class="image{m1}"></span>' + 
//        '<span class="imageSpace"></span>' + 
//        '<span class="image{s10}"></span><span class="image{s1}"></span>'});
			
			
			function liftOff() { 
				document.location.href = "presentacion.php";
				//document.location.href = "presentacion.php";
			} 
			
					
			var email = $( "#email" ),
			allFields = $( [] ).add( email ),
			tips = $( ".validateTips" );
			function updateTips( t ) {
			tips
			.text( t )
			.addClass( "ui-state-highlight" );
			setTimeout(function() {
			tips.removeClass( "ui-state-highlight", 1500 );
			}, 500 );
			}
			$( "#dialog-form" ).dialog({
			autoOpen: false,
			height: 200,
			width: 350,
			modal: true,
			closeOnEscape: false,
		        //beforeclose: function (event, ui) { return false; },
    		dialogClass: "noclose",
			buttons: {
			"Ingresar": function() {
			var bValid = true;
			allFields.removeClass( "ui-state-error" );
			//bValid = bValid && checkLength( email, "email", 6, 80 );
			if ( bValid ) {
				$.post("inc/core-functions.inc.php?acc=vergen", { email: email.val() }, 
				function( data ) {
					  //alert(data);
					  arr_return = data.split(",");
					  if(arr_return[0] == 0){
						  
						document.location.href = "index.php";
						  
					  }else{
						
						document.location.href = "presentacion.php";
						  
					  }
				});
			//$( this ).dialog( "close" );
			}
			}
			},
			close: function() {
			allFields.val( "" ).removeClass( "ui-state-error" );
			}
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

<div id="dialog-form" title="Confirmación Inscripción">
 
  <form>
  <fieldset>
    <label for="email">Email</label>
    <input type="text" name="email" id="email" value="" class="text ui-widget-content ui-corner-all" />
  </fieldset>
  </form> <p class="validateTips">Ingresa tu correo electrónico para confirmar tu inscripción al evento.</p>
</div>
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
    <div id="glowingLayout"></div>
    </div>
    
<div class="col2">
        <span class="amarillo_que">Estamos a poco de conocernos</span> <br />
        Debes tener presente la hora del evento<br />
		de acuerdo a tu país
        <ul>
        <li><span class="amarillo">GUATEMALA/EL SALVADOR/COSTA RICA<br />
          HONDURAS/NICARAGUA:</span> 14:00</li>
        <li><span class="amarillo">COLOMBIA/ECUADOR/PANAMÁ<br />
          MIAMI/PERÚ:</span> 15:00</li>
        <li><span class="amarillo">VENEZUELA:</span> 15:30</li>
        <li><span class="amarillo">BOLIVIA/PUERTO RICO<br />
          REP. DOMINICANA:</span> 16:00</li>
        <li><span class="amarillo">CHILE:</span> 17:00</li>
        <li><span class="amarillo">URUGUAY:</span> 18:00</li>
      </ul>
      </div>
  </div>
  
  </div>  <div class="footer" style="display:none">
    <div class="subfooter"><a href="http://www.internationalcamiones.com/LatinAmerica/">International®</a> es una marca registrada de Navistar Inc. Todos los derechos reservados 2013.<br />
        Sitio web desarrollado por Aguayo Publicidad.</div>
  </div>
  <script type="text/javascript">
<!--//--><![CDATA[//><!--
var _gaq = _gaq || [];_gaq.push(["_setAccount", "UA-36746505-1"]);_gaq.push(["_trackPageview"]);(function() {var ga = document.createElement("script");ga.type = "text/javascript";ga.async = true;ga.src = ("https:" == document.location.protocol ? "https://ssl" : "http://www") + ".google-analytics.com/ga.js";var s = document.getElementsByTagName("script")[0];s.parentNode.insertBefore(ga, s);})();
//--><!]]>
</script>

</body>
</html>
