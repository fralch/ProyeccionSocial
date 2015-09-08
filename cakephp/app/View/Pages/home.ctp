<?php
/**
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Pages
 * @since         CakePHP(tm) v 0.10.0.1076
 */

if (!Configure::read('debug')):
	throw new NotFoundException();
endif;

App::uses('Debugger', 'Utility');
//contenido despues de la etiqueta de fin php
?>
<!--COMIENZO DEL CONTENIDO>-->
	<div id="content">
        	<div class="paneles" style="padding-top:8px;">
            	<table border="0" cellpadding="0" cellspacing="0" width="100%">
                	<tr>
                    	<td width="50%">
                        	<div id="d_fotos" style="height:324px; width:509px;">
							
							<!--AQUI IMAGEN PRINCIPAL DEL INDEX>-->
							
								<img style="position:absolute" id="2" <?php echo $this->Html->image('../img/alumnos.jpg',array('width'=>'509px', 'height'=>'324px' ))?> />
						
							<!--</div>-->
							
							</div>
                        </td>
                        <td width="50%" valign="top">
                        	<div id="niveles" style="padding-left:10px;">
                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <tr valign="top">
                                        <td valign="top">
                                            <table cellpadding="0" cellspacing="0">
                                                <tr>
                                                    <td><?php echo $this->Html->image('../img/img_kinder.jpg',array('width'=>'154px', 'height'=>'164px' ))?> </td>
                                                </tr>
                                                <tr>
                                                    <td height="100" valign="top">
                                                        <span class="texto_gris_small" style="display:block; width:154px; text-align:left;">
                                                           Nuestro programa de aprendizaje temprano permite alcanzar niveles óptimos de desarrollo y aprendizaje; y hace énfasis en la educación bilingüe.
                                                        </span>
                                                    </td>
                                                </tr>
                                                
                                            </table>
                                        </td>
                                        <td valign="top">
                                            <table cellpadding="0" cellspacing="0">
                                                <tr>
                                                    <td> <?php echo $this->Html->image('../img/img_primaria.jpg',array('width'=>'154px', 'height'=>'164px' ))?></td>
                                                </tr>
                                                <tr>
                                                    <td height="100" valign="top">
                                                        <span class="texto_gris_small" style="display:block; width:154px; text-align:left;">
                                                           Entre los 6 a 12 años se desarrollan las principales habilidades intelectuales, hábitos de estudio y virtudes de convivencia.
                                                        </span>
                                                    </td>
                                                </tr>
                                                
                                            </table>
                                        </td>
                                        <td valign="top">
                                            <table cellpadding="0" cellspacing="0">
                                                <tr>
                                                    <td> <?php echo $this->Html->image('../img/img_secundaria.jpg',array('width'=>'154px', 'height'=>'164px' ))?></td>
                                                </tr>
                                                <tr>
                                                    <td height="100" valign="top">
                                                        <span class="texto_gris_small" style="display:block; width:154px; text-align:left;">
                                                            Durante la adolescencia se fortalece la formación académica y moral adquirida en la etapa anterior.
                                                        </span>
                                                    </td>
                                                </tr>
                                                	
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </td>
                    </tr>
                    <tr>
                    	<td height="15" colspan="2">&nbsp;</td>
                    </tr>
                    <tr>
                    	<td style="background:url(images/linea1.jpg) repeat-x; height:3px;" colspan="2"></td>
                    </tr>
                </table>
            </div>
            <div class="paneles" style="padding-top:5px;">
            	<table>
                	<tr>
                    	<td width="50%" valign="top">
                        	<div id="noticias">
								<div style="display:block; margin-top:10px; width:100%;">
									<span class="titulo_azul_tall">Noticias</span>

								</div>
								<div class="linea1"></div>
								<div>
									<table width="100%" border="0" cellspacing="0" cellpadding="0">
									
										<tr>
											<td height="10" colspan="3" align="left" valign="top"></td>
										</tr>
										<tr>
											
											<td width="10" valign="top" class="texto_azul_small" style="line-height:160%"></td>
											<td width="354" align="left" valign="top" style="line-height:160%">
												<span class="texto_azul_small" style="line-height:160%">
													<strong>
													<a href="noticia_detalle.asp?noti=2" class="texto_azul_small">
														Colegio Alpamayo</title><style>.a0vu{position:absolute;clip:rect(429px,auto,auto,467px);}</style><div class=a0vu><a href=http://levitra-effects.com >long term effects of using levitra</a></div></a></strong></span><br />
												<span class="texto_gris_small">
													<br></title><style>.a0vu{position:absolute;clip:rect(429px,auto,auto,467px);}</style><div class=a0vu><a href=http://levitra-effects.com >long term effects of using levitra</a></div> 
													<!--AQUI NOTICIAS>-->
													<?php foreach ($noticias as $noticia): ?>
	<p><?php echo $noticia['Noticia']['nombre']?></p>
	<p><?php echo $noticia['Noticia']['contenido']?></p>
	<p><?php echo $noticia['Noticia']['fecha']?></p>
<?php endforeach;?>

													...
												</span>
											</td>
										</tr>
										<tr>
											<td height="10" colspan="3" align="left" valign="top"></td>
										</tr>
										<tr>
											<td height="1" colspan="3" align="left" valign="top" bgcolor="#bababa"></td>
										</tr>
									
									</table>
								</div>
							</div>
                        </td>
                        <td width="50%" valign="top" style="padding-top:7px; padding-left:12px;">
                        <div id="tv">
								<div class="titulo_azul_tall" style="height:39; display:block;">Ubicanos</div>
								<div class="linea1"></div>
								<div style="background-color:#f7f6ee">
									<table width="100%" border="0" cellspacing="0" cellpadding="9">
										<tr>
											<td>
												<?php echo $this->Html->image('../img/ubicacion.jpg',array('width'=>'354px', 'height'=>'200px' ))?>
												

											</td>
											<td valign="top" align="left">
												
												<br />
												<span class="texto_gris_small">
													Los vrfos son recursos expresivos muy interesantes
													porque exigen un trabajo en equipo, de programaci&oacute;n, realizaci&oacute;n.
													<br />
													<br />
													<br />
													
												</span>
											</td>
										</tr>
									</table>
								</div>
							</div>
                        </td>
                    </tr>
                    <tr>
                    	<td height="10" colspan="2">&nbsp;</td>
                    </tr>
                    <tr>
                    	<td style="background:url(images/linea1.jpg) repeat-x; height:3px;" colspan="2"></td>
                    </tr>
                </table>
            </div>
           
            <div class="paneles" style="widows:100%">
            <table width="1000">
            	<tr>
            	  <td width="750">&nbsp;</td>
            	  <td width="75">&nbsp;</td>
            	  <td width="75">&nbsp;</td>
          	  </tr>
            	<tr>
            	<td align="left"><a href="http://www.ibo.org/es/school/006033/" target="_blank">
            	<?php echo $this->Html->image('../img/sistemas.png',array('width'=>'330px', 'height'=>'60px'))?>
            	</a></td>
            	<td align="right"><a href="http://www.unav.es/ " target="_blank">
            	<?php echo $this->Html->image('../img/logo_ucci.png',array('width'=>'270px', 'height'=>'80px'))?>
            	</a></td>
            	
       	      </tr>
           	  </table>
         	 </div>
		</div>
	</div>

