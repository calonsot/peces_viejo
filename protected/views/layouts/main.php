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
	
<script type="text/javascript">
var YII_PATH = "<?php echo Yii::app()->request->baseUrl; ?>";
</script>

<script type="text/javascript"
	src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript"
	src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/buscador.js"></script>
<script type="text/javascript"
	src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/jquery.qtip.min.js"></script>
<link href="/css/estilosgral.css" rel="stylesheet" type="text/css">

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

<style type="text/css">
<!--
ul {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	line-height: 130%;
	list-style-image: url(http://www.biodiversidad.gob.mx/prueba/peces/imagenes/aplicacion/b_pez.png);
	list-style-position: outside;
}

.titblue {
	font-size: 14px;
	font-weight: 900;
	color: #1E413E;
}

.preguntas {
	color: #993300;
	font-size: 14px;
	line-height: 150%;
	font-style: italic;
	font-weight: bold;
}

.deg {
	/* navegadores sin soporte */
    /*background: #868159 url(../images/cabecera_degradado.jpg) repeat-y;*/
    /* Safari 5.1+, Chrome 10+ */
    background: -webkit-linear-gradient(#5E9B97, #D9D6C4);
    /* Firefox 3.6+ */
    background: -moz-linear-gradient(#5E9B97, #D9D6C4);
    /* Opera 11.10+ */
    background: -o-linear-background(#5E9B97, #D9D6C4);
    /* IE 10 */
    background: -ms-linear-background(#5E9B97, #D9D6C4);
    /* estándar */
    background: linear-background(#5E9B97, #D9D6C4);
}

.bborder {
	border-bottom: 2px solid #1E413E;
}

.tp {
	font-size: 11px !important;
}

.resul {
	color: #993300;
	font-size: 12px;
	text-align: right;
	font-weight: bold;
}

.dresul_all {
	width: 250px;
	height: 150px;
	text-align: left;
	float: left;
	display: inline-block;
	background: #B3C4B7;
	margin-left: 10px;
	margin-bottom: 10px;
	padding: 10px;
	overflow: hidden;
	border-radius: 8px;
}

.ver {
	height: auto;
}
.dresul_head {
	/*border-bottom: 2px solid #1E413E;*/
	height: 61px;
	/* navegadores sin soporte */
    /*background: #868159 url(../images/cabecera_degradado.jpg) repeat-y;*/
    /* Safari 5.1+, Chrome 10+ */
    background: -webkit-linear-gradient(#D9D6C4, #B3C4B7);
    /* Firefox 3.6+ */
    background: -moz-linear-gradient(#D9D6C4, #B3C4B7);
    /* Opera 11.10+ */
    background: -o-linear-background(#D9D6C4, #B3C4B7);
    /* IE 10 */
    background: -ms-linear-background(#D9D6C4, #B3C4B7);
    /* estándar */
    background: linear-background(#D9D6C4, #B3C4B7);
	border-radius: 8px;
	padding: 5px;
}

.ima {
	height: 60px;
	text-align: center;
	margin: 5px 0px 5px 0px;
}

.dresul_semaforo {
	background: #D56B12;
	height: 18px;
	text-align: center;
	font-weight: bold;
	font-size: 11px;
	color: #D9D6C4;
}

.bor {
	border-radius: 8px;
}

-->
</style>
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
												- <a
												href="http://www.biodiversidad.gob.mx/usos/mAlimentacion.html">Alimentos</a>
												- Peces</span>
										</p>
										<table width="910" border="0" align="center" cellpadding="30" cellspacing="0" bgcolor="#D9D6C4"  class="txt_reforesta">
											<tr>
											<td width="500" class="deg">
                                              <?php echo CHtml::link(CHtml::image(Yii::app()->request->baseUrl."/imagenes/aplicacion/header_peces.png", "Peces", array("width" => "500px;")), Yii::app()->request->baseUrl); ?>
												<p class="titblue bborder">¿Te has preguntado?</p>
													<ul class="preguntas">
														<li>&iquest;Qu&eacute; especie est&aacute;s comprando?</li>
														<li>&iquest;De qu&eacute; lugar proviene?</li>
														<li>&iquest;Si es mexicana o importada?</li>
														<li>&iquest;C&oacute;mo fue capturada?</li>
														<li>&iquest;Si es de una pequer&iacute;a legal?</li>
													</ul>
          
												<p class="preguntas">¡Conviertete en un consumidor informado y consciente!</p>
												* Recuerda que cuando compras un producto del mar lo que  t&uacute; elijas y compres en los mercados y supermercados tiene un efecto directo  positivo o negativo en la biodiversidad marina. <strong>&ldquo;Conoci&eacute;ndolos  saben mejor&rdquo;</strong></td>
											  <td class="deg"><?php $this->renderPartial('/peces/_buscador');?></td>
											</tr>
											<tr>
											<td colspan="2" style="padding-top: 0px;"><?php echo $content; ?></td>
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
