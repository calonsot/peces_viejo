<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<meta name="keywords" content="peces, alimentacion;, uso">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="language" content="es.MX" />

<head>
  <title>Peces comestibles</title>

  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/jquery.qtip.min.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/jquery-ui.css" />
  <link href="http://www.biodiversidad.gob.mx/css/estilosgral.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/new_style.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/responsiveslides.css" />

  <script type="text/javascript">var YII_PATH = "<?php echo Yii::app()->request->baseUrl; ?>";</script>
  <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/jquery-1.9.1.min.js"></script>
  <script type="text/javascript"	src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/buscador.js"></script>
  <script type="text/javascript"	src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/jquery.qtip.min.js"></script>
  <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/jquery-ui.js"></script>
  <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/new.js"></script>
  <script src="http://bdi.conabio.gob.mx/fotoweb/googleAnalytics.js"></script>
  <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/responsiveslides.min.js"></script>
  <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/jquery.scrollTop.js"></script>
</head>

<body>

<div class="fila_head">
  <div class="fila">
    <div id="ide_menu">
      <nav>
        <a href="http://www.biodiversidad.gob.mx/index.html" style="border-style: none;"><img src="http://www.biodiversidad.gob.mx/images/index_nw_03.png"></a><br>
        <span class="diagramas" style="padding-bottom:5px;">Comisi&oacute;n Nacional para el Conocimiento y Uso de la Biodiversidad<br><br></span>
        <a href="http://www.biodiversidad.gob.mx/menusup/recursos.html">Recursos y servicios</a>
        <a href="http://www.biodiversidad.gob.mx/menusup/difusion.html">Difusi&oacute;n</a>
        <a href="http://www.biodiversidad.gob.mx/ninos/ninos.html">Ni&ntilde;os</a>
        <a href="http://www.biodiversidad.gob.mx/menusup/mapa.html">Mapa del sitio</a>
        <div id="cse-search-form" style="width: 275px; display:inline-block;">Loading</div>
        <script src="http://www.google.com/jsapi" type="text/javascript"></script>
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
        <link rel="stylesheet" href="http://www.google.com/cse/style/look/default.css" type="text/css" />
        <style type="text/css">
          input.gsc-input {
          border-color: #666666;
          }
          input.gsc-search-button {
          border-color: #666666;
          background-color: #c0c0c0;
          }
        </style>
      </nav>
    </div>  
    <div id="idiomas">
      <span class="idioma">English</span><span class="linea_roja">| </span><span class="idioma">Espa&ntilde;ol</span><br>
      <div id="google_translate_element"></div>
      <script>
        function googleTranslateElementInit() {
          new google.translate.TranslateElement({
            pageLanguage: 'es',
            includedLanguages: 'de,ar,ca,zh-CN,es,fr,nl,en,it,ja,pl,pt,ro,ru,sv',
            layout: google.translate.TranslateElement.InlineLayout.SIMPLE
          }, 'google_translate_element');
        }
        </script>
        <script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    </div>
  </div>
</div>
    

<div class="fila f1">
  <h1>Peces comerciales</h1>
  <!-- Slideshow -->
    <ul class="rslides" id="slider">
      <li>
         <?php echo CHtml::link(CHtml::image(Yii::app()->request->baseUrl."/imagenes/aplicacion/header_01.jpg", "Peces"), Yii::app()->request->baseUrl); ?>
      </li>
      <li>
          <?php echo CHtml::link(CHtml::image(Yii::app()->request->baseUrl."/imagenes/aplicacion/header_02.jpg", "Peces"), Yii::app()->request->baseUrl); ?>
      </li>
      <li>
         <?php echo CHtml::link(CHtml::image(Yii::app()->request->baseUrl."/imagenes/aplicacion/header_03.jpg", "Peces"), Yii::app()->request->baseUrl); ?>
      </li>
      <li>
          <?php echo CHtml::link(CHtml::image(Yii::app()->request->baseUrl."/imagenes/aplicacion/header_04.jpg", "Peces"), Yii::app()->request->baseUrl); ?>
      </li>
      <li>
          <?php echo CHtml::link(CHtml::image(Yii::app()->request->baseUrl."/imagenes/aplicacion/header_05.jpg", "Peces"), Yii::app()->request->baseUrl); ?>
      </li>
    </ul>
    <!-- End Slideshow -->

    <div class="otro_header">
      <?php echo CHtml::image(Yii::app()->request->baseUrl."/imagenes/aplicacion/header_06.jpg", "Ficha", array("width" => "1032px;", "usemap" => "#ficha", "id" => "ficham")); ?>
      <map name="ficha">  
        <area shape="rect" coords="407,143,505,158" href="#" title="Recomendable" class="recomendable">
        <area shape="rect" coords="510,143,646,158" href="#" title="Poco recomendable" class="precomendable">
        <area shape="rect" coords="337,160,456,176" href="#" title="No recomendable" class="nrecomendable">
        <area shape="rect" coords="6,5,1027,63" href="#" title="Peces comerciales" id="limpiar">
        <area shape="rect" coords="57,192,243,217" href="#" title="Estado de las poblaciones" id="opens1">
        <area shape="rect" coords="57,216,243,241" href="#" title="Selectividad en la captura" id="opens2">
        <area shape="rect" coords="57,240,243,261" href="#" title="Vedas" id="opens3">
        <area shape="rect" coords="57,260,243,285" href="#" title="Especies en riesgo" id="opens4">
        <area shape="rect" coords="57,284,243,309" href="#" title="Especies importadas" id="opens5">
        
      </map>
    </div>
</div>



<div class="fila_buscador">
<?php $this->renderPartial('/peces/_buscador');?>
</div>

<div class="fila100">
  <?php echo $content; ?>
</div>

<div class="fila">
  <a href="#" style="color: #330">Subir</a>
</div>

    
<!-- Código para estadísticas en Google Analytics -->
<script type="text/javascript">
	var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
	document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
	try {
	var pageTracker = _gat._getTracker("UA-8226401-1");
	pageTracker._trackPageview();
	} catch(err) {}
</script>

<!-- Fin del código para estadísticas en Google Analytics -->
</body>
</html>