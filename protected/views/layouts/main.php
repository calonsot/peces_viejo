<?php /* @var $this Controller */ ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<HTML>
<!-- InstanceBegin template="/Templates/usos_alimentacion.dwt" codeOutsideHTMLIsLocked="false" -->
<HEAD>
<!-- InstanceBeginEditable name="doctitle" -->
<TITLE>Peces comestibles</TITLE>
<meta name="keywords" content="peces, alimentacion;, uso">
<!-- InstanceEndEditable -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="language" content="es.MX" />
<!-- InstanceBeginEditable name="head" -->

<!-- blueprint CSS framework -->

<link rel="stylesheet" type="text/css"
	href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css"
	media="print" />
<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php //echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

<link rel="stylesheet" type="text/css"
	href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
<link rel="stylesheet" type="text/css"
	href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
<link rel="stylesheet" type="text/css"
	href="<?php echo Yii::app()->request->baseUrl; ?>/css/jquery.qtip.min.css" />
<link rel="stylesheet" type="text/css"
	href="<?php echo Yii::app()->request->baseUrl; ?>/css/new_style.css" />
	
<script type="text/javascript">
var YII_PATH = "<?php echo Yii::app()->request->baseUrl; ?>";
</script>

<script type="text/javascript"
	src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript"
	src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/buscador.js"></script>
<script type="text/javascript"
	src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/jquery.qtip.min.js"></script>


<script type="text/javascript">
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
</script>

<script type="text/javascript">
function vm() {
   $( "#dresul" ).addClass( "ver" );
}
</script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/jquery-ui.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/jquery-ui.css" />
  <script>
  $(function() {
    $( "#s1, #s2, #s3, #s4, #s5" ).dialog({
      width: 600,
	  autoOpen: false,
      show: {
        effect: "blind",
        duration: 1000
      },
      hide: {
        effect: "clip",
        duration: 350
      }
    });
 
    $( "#opens1" ).click(function() {
      $( "#s1" ).dialog( "open" );
    });
	
	$( "#opens2" ).click(function() {
      $( "#s2" ).dialog( "open" );
    });
	
	$( "#opens3" ).click(function() {
      $( "#s3" ).dialog( "open" );
    });
	
	$( "#opens4" ).click(function() {
      $( "#s4" ).dialog( "open" );
    });
	
	$( "#opens5" ).click(function() {
      $( "#s5" ).dialog( "open" );
    });
  });
  </script>


<!-- InstanceEndEditable -->
<link href="http://www.biodiversidad.gob.mx/css/estilosgral.css"
	rel="stylesheet" type="text/css">
<style type="text/css">
<!--
a:link {
	color: #CECAAE;
}

body {
	background-color: #000000;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}

a:visited {
	color: #CECAAE;
}

a:hover {
	color: #A07700;
}

a:active {
	color: #A07700;
}

.style5 {
	font-family: Verdana, Arial, Helvetica, sans-serif
}
-->
</style>
<script src="http://bdi.conabio.gob.mx/fotoweb/googleAnalytics.js"></script>
<script type="text/javascript">
<!--
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
//-->
</script>

</head>


<BODY>
	<table width="1030" border="0" align="center" cellpadding="0"
		cellspacing="0">
		<tr>
			<td><table width="100%" border="0" align="center" cellpadding="2"
					cellspacing="0">
					<tr>
						<td valign="bottom"><span class="idioma">English</span> <span
							class="linea_roja">| </span><span class="idioma">Espa&ntilde;ol</span>
						</td>
						<td colspan="2"><div align="right">
								<a href="http://www.biodiversidad.gob.mx/index.html"><img
									src="http://www.biodiversidad.gob.mx/images/index_nw_03.png"
									width="386" height="45" border="0"><br> </a><span
									class="diagramas">Comisi&oacute;n Nacional para el Conocimiento
									y Uso de la Biodiversidad</span>
							</div></td>
					</tr>
					<tr>
						<td width="276" valign="top"><div id="google_translate_element"></div>
							<script>
function googleTranslateElementInit() {
  new google.translate.TranslateElement({
    pageLanguage: 'es',
    includedLanguages: 'de,ar,ca,zh-CN,es,fr,nl,en,it,ja,pl,pt,ro,ru,sv',
    layout: google.translate.TranslateElement.InlineLayout.SIMPLE
  }, 'google_translate_element');
}
</script> <script
								src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
						</td>
						<td width="446" valign="top"><div align="right">
								<span class="txt_menusup"><a
									href="http://www.biodiversidad.gob.mx/menusup/recursos.html">Recursos
										y servicios</a> </span><span class="linea_roja">|</span><span
									class="txt_menusup"> <a
									href="http://www.biodiversidad.gob.mx/menusup/difusion.html">Difusi&oacute;n</a>
								</span> <span class="linea_roja">|</span> <span
									class="txt_menusup"><a
									href="http://www.biodiversidad.gob.mx/ninos/ninos.html">Ni&ntilde;os</a>
								</span> <span class="linea_roja">| </span><span
									class="txt_menusup"><a
									href="http://www.biodiversidad.gob.mx/menusup/mapa.html">Mapa
										del sitio</a> </span> <span class="linea_roja">|</span>
							</div> <label></label></td>
						<td width="319" valign="top" align="right"><div
								id="cse-search-form" style="width: 275;">Loading</div> <script
								src="http://www.google.com/jsapi" type="text/javascript"></script>
							<script type="text/javascript">
  google.load('search', '1', {language : 'es'});
  google.setOnLoadCallback(function() {
    var customSearchControl = new google.search.CustomSearchControl('008095775353890783041:z5grsg1hkxe');
    customSearchControl.setResultSetSize(google.search.Search.FILTERED_CSE_RESULTSET);
    var options = new google.search.DrawOptions();
    options.enableSearchboxOnly("http://www.google.com/cse?cx=008095775353890783041:z5grsg1hkxe");   
    customSearchControl.draw('cse-search-form', options);
  }, true);
</script>
							<link rel="stylesheet"
								href="http://www.google.com/cse/style/look/default.css"
								type="text/css" />
							<style type="text/css">
input.gsc-input {
	border-color: #666666;
}

input.gsc-search-button {
	border-color: #666666;
	background-color: #c0c0c0;
}
</style>
						</td>
					</tr>
					<tr>
						<td height="8" colspan="3"><img
							src="http://www.biodiversidad.gob.mx/images/spacer.gif" width="1"
							height="1"></td>
					</tr>
				</table></td>
		</tr>
		<tr>
			<td><table width="100%" border="0" cellpadding="0" cellspacing="0">
					<tr>
						<td valign="top">
							<table id="Table_4" width="1020" border="0" cellpadding="0"
								cellspacing="0">
								<tr>
									<td width="53" align="left" valign="top"><img
										src="http://www.biodiversidad.gob.mx/usos/images/usos_c2_13.png"
										width="53" height="44"></td>
									<td align="right" valign="top"
										background="http://www.biodiversidad.gob.mx/usos/images/usos_c2_14.png"><img
										src="http://www.biodiversidad.gob.mx/usos/images/usos_c2_14.png"
										width="594" height="44"></td>
									<td width="45" align="left" valign="top"><img
										src="http://www.biodiversidad.gob.mx/usos/images/usos_c2_15.png"
										width="45" height="44"></td>
								</tr>
								<tr>
									<td align="left" valign="top"
										background="http://www.biodiversidad.gob.mx/usos/images/usos_c2_18a.png"><img
										src="http://www.biodiversidad.gob.mx/usos/images/usos_c2_18.png"
										width="53" height="492"></td>
									<td align="left" valign="top" bgcolor="#6A4E1C">
										<!-- InstanceBeginEditable name="Contenido" -->
										<p align="right">
											<span class="Ubarra_navega"><a
												href="http://www.biodiversidad.gob.mx/index.html">Inicio</a>
												- <a href="http://www.biodiversidad.gob.mx/usos/usos.html">Usos</a>
												- <a href="http://www.biodiversidad.gob.mx/usos/mAlimentacion.html">Alimentos</a>
												- Peces</span>
										</p>
										<table width="910" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#D9D6C4"  class="txt_peces">
											<tr>
											  <td colspan="2" class="deg_head"><?php echo CHtml::link(CHtml::image(Yii::app()->request->baseUrl."/imagenes/aplicacion/header_peces.png", "Peces", array("width" => "910px;")), Yii::app()->request->baseUrl); ?></td>
										  </tr>
											<tr>
											<td width="300" rowspan="2" class="c_texto"><p class="titblue bborder">¿Te has preguntado?</p>
													<ul class="preguntas">
														<li>&iquest;Qu&eacute; especie est&aacute;s comprando?</li>
														<li>&iquest;De qu&eacute; lugar proviene?</li>
														<li>&iquest;Si es mexicana o importada?</li>
														<li>&iquest;C&oacute;mo fue capturada?</li>
														<li>&iquest;Si es de una pequer&iacute;a legal?</li>
													</ul>
                                              <p class="titblue bborder">Semáforo</p>
                                              <p>Para que puedas tomar una buena decisión en el consumo de pescado, se creó un un semáforo en el cual tú podrás tomar una buena decisión.<br>
                                              Los <b>criterios para la creación del semáforo</b> son los siguientes:</p>
                                                    <ul>
                                                    	<li id="opens1">Estado de las poblaciones</li>
                                                        <li id="opens2">Selectividad en la captura</li>
                                                        <li id="opens3">Veda</li>
                                                        <li id="opens4">Especies en riesgo</li>
                                                        <li id="opens5" class="bimp">Importado</li>
                                                     </ul>
                                               
                                               
                                               <p class="titblue bborder">Ficha muestra</p>
                                               <?php echo CHtml::image(Yii::app()->request->baseUrl."/imagenes/aplicacion/semaforo_zonas.png");?>
                                                
                                               
                                                     <div id="s1" title="Estado de las poblaciones">
                                                     <p>La Carta Nacional Pesquera es el único documento oficial e instrumento regulatorio pesquero ambiental que indica el estado de salud de organismos marinos comerciales en México, además plantea restricciones y limites en algunas pesquerías. Se publica periódicamente. En base a estudios científicos la carta agrupa en tres categorías a los grupos de peces explotados.<br><br>
                                                     <b>En deterioro:</b> El esfuerzo pesquero es excesivo sobre las poblaciones de peces. Existe una disminución notable en la abundancia (biomasa) y una capacidad reducida de incorporación a la población (reclutamiento).<br><br>
                                                     <b> Máximo aprovechamiento permisible:</b> El nivel de utilización de las poblaciones de peces se considera óptimo y no es posible aumentar la captura sin sobreexplotación. <br><br>
                                                     <b>Con potencial de desarrollo:</b> Existe la posibilidad de aumentar las capturas de las poblaciones de peces, incrementando el esfuerzo pesquero, siempre y cuando se realice de manera precautoria y controlada.<br><br><br>
                                                     <b>Fuente de información:</b><br>
                                                     - <a href="http://www.inapesca.gob.mx/portal/documentos/publicaciones/CARTA%20NACIONAL%20PESQUERA/24082012%20SAGARPA.pdf" target="_blank" style="color: #1B3138;">Carta Nacional Pesquera 2012</a>
                                                     </div>
                                                     
                                                     <div id="s2" title="Selectividad en la captura">
                                                     <p>Las artes de pesca son los diferentes métodos de captura o técnicas con las que los peces son atrapados.  Algunas de las artes de pesca tienen un fuerte impacto sobre la biodiversidad marina y su ambiente y otras no lo tienen. Es determinante que el consumidor conozca la información sobre el tipo de arte que es utilizado por especie.<br><br>
                                                     <b>Pesca selectiva:</b> Se captura la especie objetivo de tamaño deseado y tiene un bajo impacto negativo sobre el ecosistema.<br>
                                                     Algunos tipos de artes de pesca de bajo impacto: Red de arrastre para camarones RS-INP-MEX-110´para embarcaciones mayores en el Golfo de California, red agallera para lisa y liseta o lebrancha, línea de mano para peces pelágicos y demersales, curricán para pesca de especies pelágicas, palangre para peces pelágicos costeros, palangre para mero, palangre para la pesca de tiburones pelágicos del Pacífico central mexicano, a bordo de embarcaciones de mediana altura, palangre para atún: Golfo de México y Caribe.<br><br>
                                                     <b>Pesca no selectiva:</b> Se capturan diferentes especies y tamaños que no son el objetivo. Puede afectar delfines, tortugas y aves, dañar el ambiente y destruir los ecosistemas marinos.<br>
                                                     Algunos tipos de artes de pesca de alto impacto para el ambiente son el chinchorro playero, red de enmalle para tiburones y rayas en embarcaciones menores, red agallera para escama pelágica, red agallera para escama de fondo, red agallera para esteros y línea de costa, palangre para embalses, palangre escama de esteros, palangre para especies de fondo, palangre para tiburón oceánico y pez espada.<br><br><br>
                                                     <b>Fuentes de información:</b><br>
                                                     - (Fuente: Cochrane, K. L. 2005. Guía del administrador pesquero. Medidas de ordenación y su aplicación. FAO. Documento Técnico de Pesca. No. 424. Roma: FAO.<br>
                                                     - <a href="http://www.inapesca.gob.mx/portal/documentos/publicaciones/CARTA%20NACIONAL%20PESQUERA/24082012%20SAGARPA.pdf" target="_blank" style="color: #1B3138;">Carta Nacional Pesquera 2012</a>
                                                     </p>
                                                     </div>
                                                     
                                                     <div id="s3" title="Veda">
                                                     <p>Con el fin de optimizar el aprovechamiento de la pesca desde un punto de vista biológico y socioeconómico, la Comisión Nacional de Acuacultura y Pesca (CONAPESCA) ha establecido regulaciones y actos administrativos para proteger a las especies comerciales.<br><br>
                                                     Las vedas consisten en prohibiciones de pesca durante periodos de tiempo o sitios específicos mediante acuerdos o normas oficiales. Tienen la finalidad de proteger a una o varias especies durante los periodos de reproducción o crianza.<br><br>
                                                    <b> Tipos de vida en México:</b><br><br>
                                                    <b>Veda permanente:</b> La especie no puede ser explotada en ningún momento del año de forma indefinida.<br><br>
                                                    <b>Veda temporal fija:</b> Se establece en un periodo definido y se repite anualmente.<br><br>
                                                    <b>Veda temporal variable:</b> Se establece por un periodo definido pero es actualizado anualmente.<br><br><br>
                                                    <b>Fuente de información:</b><br>
                                                    - <a href="http://www.conapesca.gob.mx/work/sites/cona/resources/PDFContent/14619/presentaioc.pdf" target="_blank" style="color: #1B3138;">Periodos de veda para especies marinas y dulceacuícolas</a>.
                                                    </p>
                                                     </div>
                                                     
                                                     <div id="s4" title="Especies en riesgo">
                                                     <p> Además de la Carta Nacional Pesquera y sus regulaciones, existen otros convenios y normas de carácter nacional e internacional que regulan y protegen a especies en riesgo. Entre ellas están:<br><br>
                                                     <b>La Norma Mexicana de Especies en Riesgo</b> (<a href="http://www.biodiversidad.gob.mx/especies/catRiesMexico.html" target="_blank" style="color: #1B3138;">NOM-059-SEMARNAT-2010</a>), que contiene dentro de sus categorías a <b>4</b> peces de importancia comercial.<br><br>
                                                     <b>La Convención Internacional sobre el Comercio de Especies Amenazadas de Fauna y Flora</b> (<a href="http://www.biodiversidad.gob.mx/planeta/cites/index.html" target="_blank" style="color: #1B3138;">CITES</a>) que incluye 9 especies de peces de importancia comercial.<br><br>
                                                     <b>La Lista Roja de la Unión Internacional para la Conservación de la Naturaleza</b> (<a href="http://www.biodiversidad.gob.mx/especies/catRiesMundo.html" target="_blank" style="color: #1B3138;">UICN</a>), tiene a 72 especies de peces comerciales de México en las categorías de mayor riesgo.<br><br><br>
                                                     <b>Fuentes de información:</b></p>
                                                     </div>
                                                     
                                                     <div id="s5" title="Especies importadas">
                                                     <p>Todo lo que nosotros consumimos en nuestra vida diaria tiene un impacto en la naturaleza y más aún cuando decidimos comprar productos de otros países.<br><br>
                                                     Para que llegue el pescado importado a nuestra mesa tuvo que viajar miles de kilómetros lo cual representa grandes cantidades de gases de efecto invernadero así como otros productos tóxicos haciendo que tengas una gran huella ecológica en tu manera de alimentarte.</p>
                                                     </div>
                                                     
                                                     

                                                     </td>
											  <td valign="top" class="c_buscador perspective"><?php $this->renderPartial('/peces/_buscador');?></td>
											</tr>
											<tr>
											  <td valign="top">
                                              <br>
                                              <p>En la ficha de cada especie podrás encontrar una barra que representa cada zona pesquera<br>
                                              y si es <span class="t_re recomendable">recomendable</span>, <span class="t_pre precomendable">poco recomendable</span> o <span class="t_nre nrecomendable">no recomendable</span> su consumo en dicha zona.<br></p>
                                              
                                              <p class="datospagprin" style="width:500px"><b>Nota | Ilustraciones y siluetas</b><br>
                                              Las 90 especies que se muestran con ilustración son las más consumidas en México, las 383 restantes solo se observa la silueta de cada especie.</p>
                                              </td>
										  </tr>
											<tr>
											<td colspan="2"><?php echo $content; ?></td>
											</tr>
										</table>
										</form> <!-- InstanceEndEditable -->

									</td>
									<td align="left" valign="top"
										background="http://www.biodiversidad.gob.mx/usos/images/usos_c2_22.png"><img
										src="http://www.biodiversidad.gob.mx/usos/images/usos_c2_22.png"
										width="45" height="492"></td>
								</tr>
								<tr>
									<td align="left" valign="top"><img
										src="http://www.biodiversidad.gob.mx/usos/images/usos_c2_40.png"
										width="53" height="40"></td>
									<td align="right" valign="top"
										background="http://www.biodiversidad.gob.mx/usos/images/usos_c2_41.png"><img
										src="http://www.biodiversidad.gob.mx/usos/images/usos_c2_41.png"
										width="594" height="40"></td>
									<td align="left" valign="top"><img
										src="http://www.biodiversidad.gob.mx/usos/images/usos_c2_42.png"
										width="45" height="40"></td>
								</tr>
							</table>
						</td>
					</tr>
				</table></td>
		</tr>
	</table>
	<!-- Código para estadísticas en Google Analytics -->
	<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
	<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-8226401-1");
pageTracker._trackPageview();
} catch(err) {}</script>
	<!-- Fin del código para estadísticas en Google Analytics -->
</BODY>
<!-- InstanceEnd -->
</HTML>
