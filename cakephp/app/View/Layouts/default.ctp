<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>Escuela Nuestra Senora del Carmen</title>

	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css(array('style.css'));

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>


<script type="text/javascript">
$(document).ready(function(){



	function scrollImages()
	{
		if(currentSlide==slideQty-displaySlideQty)
		{
			currentSlide=0
			$("#prev").hide();
			$("#next").show();
			$("#slider").animate({'left': '0px'}, 400, easing)
		}
		else
	   		next();

    	timeout = setTimeout(function()
		{
      		scrollImages()
    	}, 8000);
	}
})

function muestra(capa){
	document.getElementById(capa).style.visibility="visible";
}
function oculta(capa){
	document.getElementById(capa).style.visibility="hidden";
}

</script>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-25647372-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>

</head>
<body>
<header>
	<div id='encabezado'>
		<p>.</p>
	</div>
</header>
<!-- INICIO DE HEADER -->	
<div id="wraper">
		<div id="dropmenu1" class="dropmenudiv" style="width:450px; top:150px; margin-left:0px;" onmouseover="muestra('dropmenu1')" onmouseout="oculta('dropmenu1')">
			<table width="450" border="0" cellspacing="0" cellpadding="0">
				<tr>
					<td width="30%" height="4" align="left" valign="top" bgcolor="#efbe00"></td>
					<td width="68%" height="4" align="left" valign="top" bgcolor="#04378b"></td>
				</tr>
			</table>
			<table width="450" border="0" cellspacing="0" cellpadding="0" align="left" style="display:block; z-index:999; position:relative;">
				<tr>
					<td width="224" align="left" valign="top" class="texto_azul_arial" style="padding:10px; line-height:100%;">
						<p><a href="../escuela/admision" class="texto_azul_arial">&nbsp;&nbsp;Bienvenida del Director</a></p>
						 <?php echo $this->Html->image('../img/linea.jpg',array('width'=>'177px'))?>
						<p><a href="mision_vision.asp" class="texto_azul_arial">&nbsp;&nbsp;Misi&oacute;n y Visi&oacute;n</a></p>
						<?php echo $this->Html->image('../img/linea.jpg',array('width'=>'177px'))?>
						<p><a href="historia.asp" class="texto_azul_arial">&nbsp;&nbsp;Historia</a></p>
						
						
					</td>
					<td width="226" align="left" valign="middle">
						
						<p>
							<span class="texto_azul_small">
								Director: Rolando Domínguez <br />
								<br />
								Reciban la m&aacute;s cordial bienvenida<br />
								todos los que visitan esta pagina web.
							</span>
						</p>
						
					</td>
				</tr>
				<tr>
					<td height="10" align="left" valign="top" bgcolor="#04378b" colspan="2"></td>
				</tr>
			</table>
		</div>
		<div id="dropmenu2" class="dropmenudiv" style="width:341px; top:150px; margin-left:264px;" onmouseover="muestra('dropmenu2')" onmouseout="oculta('dropmenu2')">
		<table width="341" border="0" cellspacing="0" cellpadding="0">
				<tr>
					<td width="36%" height="4" align="left" valign="top" bgcolor="#efbe00"></td>
					<td width="54%" height="4" align="left" valign="top" bgcolor="#04378b"></td>
				</tr>
		  </table>
			<table width="341" border="0" cellspacing="0" cellpadding="0">
				<tr>
					<td width="197" align="left" valign="top" class="texto_azul_arial" style="padding:10px; line-height:100%;">
						<p><a href="intro_aa.asp" class="texto_azul_arial">&nbsp;&nbsp;Plan de Estudio</a></p>
						<?php echo $this->Html->image('../img/linea.jpg',array('width'=>'177px'))?>
						
						<p><a href="deportes.asp" class="texto_azul_arial">&nbsp;&nbsp;Deporte</a></p>
						<?php echo $this->Html->image('../img/linea.jpg',array('width'=>'177px'))?>
						<p><a href="profesores.asp" class="texto_azul_arial">&nbsp;&nbsp;Profesores</a></p>
						<?php echo $this->Html->image('../img/linea.jpg',array('width'=>'177px'))?>

					</td>
					<td width="144" align="left" valign="middle">

						<div align="left">
						<?php echo $this->Html->image('../img/alpamayo_areas_academicas_foto.jpg',array('width'=>'125px'))?>
						</div>
					</td>
				</tr>
				<tr>
					<td height="10" align="left" valign="top" bgcolor="#04378b" colspan="2"></td>
				</tr>
			</table>
		</div>
		<div id="dropmenu3" class="dropmenudiv" style="width:355px; top:150px; margin-left:153px;" onmouseover="muestra('dropmenu3')" onmouseout="oculta('dropmenu3')">
				<table width="357" border="0" cellspacing="0" cellpadding="0">
				<tr>
					<td width="23%" height="4" align="left" valign="top" bgcolor="#efbe00"></td>
					<td width="67%" height="4" align="left" valign="top" bgcolor="#04378b"></td>
				</tr>
			</table>
			<table width="357" border="0" cellspacing="0" cellpadding="0">
				<tr>
					<td width="197" align="left" valign="top" class="texto_azul_arial" style="padding:10px; line-height:100%;">
						<p><a href="bienv_admision.asp" class="texto_azul_arial">&nbsp;&nbsp;Admisiones 2016 - 2017</a></p>
						<?php echo $this->Html->image('../img/linea.jpg',array('width'=>'177px'))?><br />
						<p><a href="requisitos.asp" class="texto_azul_arial">&nbsp;&nbsp;Requisitos</a></p>
						<?php echo $this->Html->image('../img/linea.jpg',array('width'=>'177px'))?>
						<p><a href="info_matricula.asp" class="texto_azul_arial">&nbsp;&nbsp;Proceso de Admisión</a></p>
						<?php echo $this->Html->image('../img/linea.jpg',array('width'=>'177px'))?>
						
					</td>
					<td width="185" align="left" valign="middle">

						<p>
							<span class="texto_azul_small">
								A todos los interesados en
								conocer nuestro proyecto
								educativo les damos  las m&aacute;s
								cordial bienvenida.
							</span>
						</p>
					</td>
				</tr>
				<tr>
					<td height="10" align="left" valign="top" bgcolor="#04378b" colspan="2"></td>
				</tr>
			</table>
		</div>
		<div id="dropmenu4" class="dropmenudiv" style="width:270px; top:150px; margin-left:822px;" onmouseover="muestra('dropmenu4')" onmouseout="oculta('dropmenu4')">
			<table width="285" border="0" cellspacing="0" cellpadding="0">
				<tr>
					<td width="21%" height="4" align="left" valign="top" bgcolor="#efbe00"></td>
					<td width="69%" height="4" align="left" valign="top" bgcolor="#04378b"></td>
				</tr>
			</table>
			<table width="285" border="0" cellspacing="0" cellpadding="0">
				<tr>
					<td width="140" align="left" valign="top" class="texto_azul_arial" style="line-height:100%; padding:10px;">
						<p><a href="fam_presentacion.asp" class="texto_azul_arial">&nbsp;&nbsp;Presentaci&oacute;n</a></p>
						<?php echo $this->Html->image('../img/linea.jpg',array('width'=>'119px'))?>
						<p><a href="escueladepadres.asp" class="texto_azul_arial">&nbsp;&nbsp;Escuela de Padres</a></p>
						<?php echo $this->Html->image('../img/linea.jpg',array('width'=>'119px'))?>
						<p><a href="#" class="texto_azul_arial">&nbsp;&nbsp;APAFA</a></p>
						<?php echo $this->Html->image('../img/linea.jpg',array('width'=>'119px'))?>
					</td>
					<td width="145" align="left" valign="middle">
						<div align="left">
						<?php echo $this->Html->image('../img/alpamayo_familia_foto.jpg',array('width'=>'125px'))?>
						</div>
					</td>
				</tr>
				<tr>
					<td height="10" align="left" valign="middle" bgcolor="#04378b" colspan="2"></td>
				</tr>
			</table>
		</div>

		


	<div id="header" align="center">
	<div id="header_1">
	<div id="logo" style=" display:block; width:100%; height:116px; padding:0; margin:0; position:relative; " >
    	<table width="100%" border="0" cellpadding="0" cellspacing="0" align="left">
 			 <tr valign="top"  style="background-image:url(images/alpamayo_bg_top.png)">
   				<td valign="top" width="375" height="116">
	<a href="index.asp">
	<?php echo $this->Html->image('../img/alpamayo_logo2.png',array('width'=>'600px'))?>
	</a >
	</td>
              
  			</tr>
		</table>
    </div>
    <div id="nav" style="width:100%; height:35px">
    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr align="center">
    <td width="14%"><a href="javascript:void(0)" class="menu"  onmouseover="muestra('dropmenu1')" onmouseout="oculta('dropmenu1')">Quiénes Somos</a></td>
	<td width="12%"><a href="javascript:void(0)" class="menu" onmouseover="muestra('dropmenu3')" onmouseout="oculta('dropmenu3')">Admisiones</a></td>
    <td width="15%"><a href="javascript:void(0)"  class="menu" onmouseover="muestra('dropmenu2')" onmouseout="oculta('dropmenu2')">Áreas Académicas</a></td>
    <td width="11%"><a href="noticias.asp"  class="menu"></a></td>
    <td width="8%"><a href="#carru"  class="menu"></a></td>
    <td width="21%"><a href="http://www.ibo.org/es/school/006033/" target="_blank" class="menu" ></a></td>
    <td width="9%"><a href="javascript:void(0)"class="menu" onmouseover="muestra('dropmenu4')" onmouseout="oculta('dropmenu4')">Familia</a></td>
    <td width="9%"><a href="javascript:void(0)"class="menu">Cont&aacute;ctenos</a></td>

    </tr>
</table>
    </div>
</div>
</div>
<!-- FIN DE HEADER -->

<!-- INICIO DE BODY-->	



			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
<!-- FIN DE BODY-->	


<!-- PONER EL FOOD DE ANCHO 100%	<div class="paneles" style="padding-top:5px;">

            	<table>
                	

                    <tr>
                    	<td style="background:url(images/linea1.jpg) repeat-x; height:3px;" colspan="2"></td>
                    </tr>
                </table>
</div>
</div>-->
<!-- INICIO DE FOODER-->
<div id="footer" align="center" style="margin-top:30px; width:100%;">
 <div id="footer_1" align="center">
  <div align="center" id="redes" style="vertical-align:bottom; width:100%;">

		<a href="http://www.facebook.com/pages/Colegio-Alpamayo/256399962758" target="_blank">
			<?php echo $this->Html->image('../img/alpamayo_icon_facebook.png')?>
		</a>
        <a href="http://www.twitter.com/ColegioAlpamayo" target="_blank">
        	<?php echo $this->Html->image('../img/icon_twitter.png')?>
        </a>
        <a href="http://www.youtube.com/user/Alpamayotv" target="_blank">
       		<?php echo $this->Html->image('../img/icon_youtube.png')?>
        </a>
        <div style="position:absolute; padding-top:10px; left: 13px; top: 20px;">
        	<table width="100%" border="0" cellpadding="0" cellspacing="0">
        	<tr>
        	  <td align="left" valign="top" class="texto_celeste_small" style="padding-left:5px;">&nbsp;</td>
      	  </tr>
        	<tr>
        	  <td align="left" valign="top" class="texto_celeste_small" style="padding-left:5px;">&nbsp;</td>
      	  </tr>
        	<tr>
            	<td width="400" align="left" valign="top" class="texto_celeste_small" style="padding-left:5px;">
					Escuela Nuestra Señora del Carmen <a href="#" target="_blank" style="text-decoration:none;color:#81bce7;"></a> derechos reservados.<br>
					Huancan - Junin - Perú<br>
				  Celular 945455070 | E-mail: ingfralch@gmail.com<br />
					Diseño web <a href="http://www.avra.pe" class="texto_celeste_small" target="_blank"> Universidad Continental</a></td>
	          
	        </tr>
      	</table>
        </div>
  </div>
 </div>
</div>
<!-- FIN DE FOODER-->


	</div>	
</body>
</html>
