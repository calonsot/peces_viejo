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
  <script src="https://use.typekit.net/shb5zji.js"></script>
  <script>try{Typekit.load({ async: true });}catch(e){}</script>

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
        <a href="http://www.biodiversidad.gob.mx/index.html"><img title="" alt="Biodiversidad Mexicana" class="main-logo" src="http://www.biodiversidad.gob.mx/assets/images/logo.png"/></a>
        <ul class="main-nav text-right hidden-xs">
			<li><a class="name" href="http://www.conabio.gob.mx" target="_blank" >Comisión Nacional para el Conocimiento y Uso de la Biodiversidad</a></li><br>
			<li><a class="scroll" href="http://www.biodiversidad.gob.mx/index.html#eventos">Eventos</a></li>
			<li><a class="scroll" href="http://www.biodiversidad.gob.mx/index.html#temas">Temas</a></li>
			<li><a class="scroll" href="http://www.biodiversidad.gob.mx/index.html#recursos">Productos</a></li>
			<li><a class="scroll" href="http://www.biodiversidad.gob.mx/index.html#actua">¡Conoce y actúa!</a></li>
			<li><a class="scroll" href="http://www.biodiversidad.gob.mx/index.html#contacto">Contacto</a></li>
			<li><a href="http://www.biodiversidad.gob.mx/v_ingles/" class="name" title="English">EN</a></li>
		</ul>
       
        <!--<div id="cse-search-form" style="width: 40%; display:inline-block;">Cargando</div>
					<script src="//www.google.com/jsapi" type="text/javascript"></script>
                    <script type="text/javascript">
                    google.load('search', '1', {language: 'es', style: google.loader.themes.DEFAULT});
                    google.setOnLoadCallback(function() {
                      var customSearchOptions = {};
                      var orderByOptions = {};
                      orderByOptions['keys'] = [{label: 'Relevance', key: ''} , {label: 'Date', key: 'date'}];
                      customSearchOptions['enableOrderBy'] = true;
                      customSearchOptions['orderByOptions'] = orderByOptions;
                      var customSearchControl =   new google.search.CustomSearchControl('008095775353890783041:h-_r2kr0x5u', customSearchOptions);
                      customSearchControl.setResultSetSize(google.search.Search.FILTERED_CSE_RESULTSET);
                      var options = new google.search.DrawOptions();
                      options.enableSearchboxOnly('https://www.google.com/cse?cx=008095775353890783041:h-_r2kr0x5u', null, true);
                      options.setAutoComplete(true);
                      customSearchControl.draw('cse-search-form', options);
                    }, true);
                    </script>-->
      </nav>
    </div>  
    <!--<div id="idiomas">
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
    </div>-->
  </div>
</div>
    

<!--<div class="fila f1">
  <p align="right">
    <span class="Ubarra_navega">
      <a href="http://www.biodiversidad.gob.mx/index.html">Inicio</a>
    - <a href="http://www.biodiversidad.gob.mx/usos/usos.html">Usos</a>
    - <a href="http://www.biodiversidad.gob.mx/usos/alimentos.html">Alimentos</a>
    - Peces</span>
  </p>
</div>-->

<div class="fila_title">
  <div class="fila f1">
 		<a href="<?php echo Yii::app()->request->baseUrl; ?>" class="b_verall"><h1>Peces marinos comerciales</h1></a>
  <div class="liner liner-dark"></div>
  </div>
</div> 

<?php echo $content; ?>


<div class="fila">
  <!--<a href="#" style="color: #330">Subir</a>-->
</div>

<div class="tooltiptext" id="veda_tip">
	<p class="titblue">Vedas</p>
	<p>Con el fin de optimizar el aprovechamiento de la pesca desde un
		punto de vista biol&oacute;gico y socioecon&oacute;mico, la
		Comisi&oacute;n Nacional de Acuacultura y Pesca (CONAPESCA) ha
		establecido regulaciones y actos administrativos para proteger a las
		especies comerciales. Las vedas consisten en prohibiciones de pesca
		durante periodos de tiempo o sitios espec&iacute;ficos mediante
		acuerdos o normas oficiales, estas tienen la finalidad de proteger a
		una o varias especies durante los periodos de reproducci&oacute;n o
		crianza.</p>
	<p class="titblue">Tipos de veda en M&eacute;xico:</p>
	<p>
		<strong><img src="/peces/imagenes/aplicacion/bp.png" width="6"
			height="6"> Veda permanente:</strong> La especie no puede ser
		explotada en ningún momento del a&ntilde;o de forma indefinida.
	</p>
	<p>
		<strong><img src="/peces/imagenes/aplicacion/bp.png" width="6"
			height="6"> Veda temporal fija:</strong> Se establece en un periodo
		definido y se repite anualmente.
	</p>
	<p>
		<strong><img src="/peces/imagenes/aplicacion/bp.png" width="6"
			height="6"> Veda temporal variable:</strong> Se establece por un
		periodo definido pero es actualizada anualmente.
	</p>
</div>

<div class="tooltiptext" id="arte_de_pesca_tip">
	<p class="titblue">Artes de pesca</p>
	<p>Las artes de pesca son los diferentes métodos de captura o técnicas
		con las que los peces son atrapados. Existen 4 tipos principales de
		arte y de cada uno de ellos tienen variables y combinaciones
		diferentes:</p>
	<p>
		<strong><img src="/peces/imagenes/aplicacion/bp.png" width="6"
			height="6"> L&iacute;neas:</strong> Este arte consiste en un hilo con
		un anzuelo con carnada en su punta final. Existen variantes de la
		l&iacute;nea como: l&iacute;nea de anzuelo, l&iacute;nea cabrillera de
		fondo, l&iacute;nea de mano, troleado y carpiota o pollito.
	</p>
	<p>
		<strong><img src="/peces/imagenes/aplicacion/bp.png" width="6"
			height="6"> Palangres:</strong> Es una cuerda larga con varios
		anzuelos con carnada sujetados a ciertos intervalos. Existen
		diferentes tipos de palangres como palangres escameros, palangre
		tiburonero, palangre viajero de fondo, rosario o ristra, dependiendo
		de las especies &ldquo;objetivo&rdquo;.
	</p>
	<p>
		<strong><img src="/peces/imagenes/aplicacion/bp.png" width="6"
			height="6"> Redes:</strong> Las redes son mallas construida de hilos
		finos. Los peces quedan atrapados por las agallas o entre la cabeza y
		el cuerpo. Existen diferentes tipos de redes entre ellas est&aacute;n
		la red agallera, atarraya, red caritera, red corvinera y red
		sardinera.
	</p>
	<p>
		<strong><img src="/peces/imagenes/aplicacion/bp.png" width="6"
			height="6"> Trampas y nasas:</strong> Son cajas o compartimientos a
		los que son atra&iacute;dos los peces. Las formas t&iacute;picas de
		las trampas y nasas, son cajas, conos, cilindros, esferas o botellas.
		Su tama&ntilde;o var&iacute;a seg&uacute;n la especie a capturar.
		Tienen aperturas en forma de embudos o cu&ntilde;as para que el pez
		ingrese f&aacute;cilmente pero tenga una baja probabilidad de escape.
		Existen diferentes tipos de trampas y nasas, como la nasa o trampa
		langostera, casitas cubanas, trampa para bacalao, trampa para pulpo.
	</p>
</div>

<div class="tooltiptext" id="tipo_pesca_tip">
	<p class="titblue">Tipos de artes de pesca</p>
	<p>Algunas de las artes de pesca tienen un fuerte impacto sobre la
		biodiversidad marina y su ambiente y otras no lo tienen, por lo que es
		determinante que el consumidor conozca la informaci&oacute;n sobre el
		tipo de arte que es utilizado por especie, para esto se han separado
		las artes de pesca en dos grupos:</p>
	<p>
		<img
			src="http://www.biodiversidad.gob.mx/usos/alimentacion/images/imgPecesAmigable.png"
			width="17" height="17"><strong> Selectiva</strong> &nbsp;<br> Algunos
		tipos de artes de pesca de bajo impacto: Red de arrastre para
		camarones RS-INP-MEX-110&acute;para embarcaciones mayores en el Golfo
		de California, red agallera para lisa y liseta o lebrancha,
		l&iacute;nea de mano para peces pel&aacute;gicos y demersales,
		curric&aacute;n para pesca de especies pel&aacute;gicas, palangre para
		peces pel&aacute;gicos costeros, palangre para mero, palangre para la
		pesca de tiburones pel&aacute;gicos del Pac&iacute;fico central
		mexicano, a bordo de embarcaciones de mediana altura, palangre para
		at&uacute;n: Golfo de M&eacute;xico y Caribe.
	</p>
	<p>
		<img
			src="http://www.biodiversidad.gob.mx/usos/alimentacion/images/imgPecesNoAmigable.png"
			width="17" height="17"> <strong>No selectiva</strong><br> Se capturan
		diferentes especies y tama&ntilde;os que no son el objetivo. Puede
		afectar delfines, tortugas y aves, da&ntilde;ar el ambiente y destruir
		los ecosistemas marinos.<br> Algunos tipos de artes de pesca de alto
		impacto para el ambiente son el chinchorro playero, red de enmalle
		para tiburones y rayas en embarcaciones menores, red agallera para
		escama pel&aacute;gica, red agallera para escama de fondo, red
		agallera para esteros y l&iacute;nea de costa, palangre para embalses,
		palangre escama de esteros, palangre para especies de fondo, palangre
		para tibur&oacute;n oce&aacute;nico y pez espada.
	</p>
</div>

<div class="tooltiptext" id="carta_nacional_tip">
	<p class="titblue">Carta Nacional Pesquera (CNP)</p>
	<p>Es el &uacute;nico documento oficial e instrumento regulatorio
		pesquero ambiental que indica el estado de salud de organismos marinos
		comerciales en M&eacute;xico, adem&aacute;s plantea restricciones y
		limites en algunas pesquer&iacute;as.</p>
	<p>En base a estudios cient&iacute;ficos la carta agrupa en tres
		categor&iacute;as a los grupos de peces explotados:</p>
	<p>
		<strong><img src="/peces/imagenes/aplicacion/bp.png" width="6"
			height="6"> En deterioro:</strong> El esfuerzo pesquero es excesivo
		sobre las poblaciones de peces. Existe una disminuci&oacute;n notable
		en la biomasa y una capacidad reducida de reclutamiento.
	</p>
	<p>
		<strong><img src="/peces/imagenes/aplicacion/bp.png" width="6"
			height="6"> M&aacute;ximo aprovechamiento permisible:</strong> El
		nivel de utilizaci&oacute;n de las poblaciones de peces se considera
		&oacute;ptimo y no es posible aumentar la captura sin
		sobreexplotaci&oacute;n.
	</p>
	<p>
		<strong><img src="/peces/imagenes/aplicacion/bp.png" width="6"
			height="6"> Con potencial de desarrollo:</strong> Existe la
		posibilidad de aumentar las capturas de las poblaciones de peces,
		incrementando el esfuerzo pesquero, siempre y cuando se realice de
		manera precautoria y controlada.
	</p>

	<p>De acuerdo a los sitios de pesca de cada especie, la carta nacional
		ha regionalizado los sitios de acuerdo a zonas y n&uacute;meros:</p>
	<p class="titblue">Pac&iacute;fico</p>
	<p>
		<strong><img src="/peces/imagenes/aplicacion/bp.png" width="6"
			height="6"> Zona 1:</strong> Pen&iacute;nsula de Baja California
		(Costa del Pac&iacute;fico de Baja California y Baja California Norte.
	</p>
	<p>
		<strong><img src="/peces/imagenes/aplicacion/bp.png" width="6"
			height="6"> Zona 2:</strong> Golfo de California (Baja California,
		Baja California Sur, Sonora, Sinaloa, Nayarit).
	</p>
	<p>
		<strong><img src="/peces/imagenes/aplicacion/bp.png" width="6"
			height="6"> Zona 3:</strong> Pac&iacute;fico centro-sur (Jalisco,
		Colima, Michoac&aacute;n, Guerrero, Oaxaca, Chiapas).
	</p>
	<p>
		<strong><img src="/peces/imagenes/aplicacion/bp.png" width="6"
			height="6"> Zona 4:</strong> Archipi&eacute;lago de las Islas
		Revillagigedo.
	</p>

	<p class="titblue">Golfo de M&eacute;xico y Caribe</p>
	<p>
		<strong><img src="/peces/imagenes/aplicacion/bp.png" width="6"
			height="6"> Zona 1:</strong> Tamaulipas y Veracruz.
	</p>
	<p>
		<strong><img src="/peces/imagenes/aplicacion/bp.png" width="6"
			height="6"> Zona 2:</strong> Tabasco, Campeche y Yucat&aacute;n.
	</p>
	<p>
		<strong><img src="/peces/imagenes/aplicacion/bp.png" width="6"
			height="6"> Zona 3:</strong> Quintana Roo.
	</p>
</div>

<div class="tooltiptext" id="estado_conservacion_tip">
	<p class="titblue">Peces comerciales en riesgo</p>
	<p>Adem&aacute;s de La Carta Nacional Pesquera y sus regulaciones,
		existen otros convenios y normas de car&aacute;cter nacional e
		internacional, estas regulan y protegen a especies en riesgo. Entre
		ellas est&aacute;n:</p>
	<p>
		<strong><img src="/peces/imagenes/aplicacion/bp.png" width="6"
			height="6"> La Norma Mexicana de Especies en Riesgo</strong> (<a
			href="http://www.biodiversidad.gob.mx/especies/catRiesMexico.html"
			target="_blank" style="color: #323D2C">NOM-059-SEMARNAT-2010</a> ), y
		contiene dentro de sus categorias a <strong>4</strong> peces de
		importancia comercial.
	</p>
	<p>
		<strong><img src="/peces/imagenes/aplicacion/bp.png" width="6"
			height="6"> La Convenci&oacute;n Internacional sobre el Comercio de
			Especies Amenazadas de Fauna y Flora</strong> (<a
			href="http://www.biodiversidad.gob.mx/planeta/cites/index.html"
			target="_blank" style="color: #323D2C">CITES</a>) incluye <strong>5</strong>
		especies de peces de importancia comercial.
	</p>
	<p>
		<strong><img src="/peces/imagenes/aplicacion/bp.png" width="6"
			height="6"> La lista roja de la Uni&oacute;n Internacional para la
			Conservaci&oacute;n de la Naturaleza</strong> (<a
			href="http://www.biodiversidad.gob.mx/especies/catRiesMundo.html"
			target="_blank" style="color: #323D2C">IUCN</a>), tiene a <strong>64</strong>
		especies de peces en las categor&iacute;as de mayor riesgo.
	</p>
</div>

<div class="tooltiptext" id="recomendable_tip">
	<p class="titblue">Recomendable</p>
	<p>Especies que puedes consumir sin ninguna preocupación en base a que
		sus poblaciones están estables y son capturadas sin dañar al ambiente
		ni a otras especies.</p>
</div>

<div class="tooltiptext" id="precomendable_tip">
	<p class="titblue">Poco recomendable</p>
	<p>Especies que de preferencia no debes consumir ya que sus poblaciones
		están en un máximo aprovechamiento y de seguir consumiéndolos en
		exceso sus poblaciones pueden colapsarse. Además el tipo de captura
		puede dañar al ambiente y a otras especies.</p>
</div>

<div class="tooltiptext" id="nrecomendable_tip">
	<p class="titblue">No recomendable</p>
	<p>Especies que debes evitar consumir en su totalidad ya que sus
		poblaciones están considerablemente disminuidas y su captura daña al
		ambiente y a otras especies.</p>
</div>

<div id="s1" title="Estado de las poblaciones">
	<p>
		La Carta Nacional Pesquera es el único documento oficial e instrumento
		regulatorio pesquero ambiental que indica el estado de salud de
		organismos marinos comerciales en México, además plantea restricciones
		y limites en algunas pesquerías. Se publica periódicamente. En base a
		estudios científicos la carta agrupa en tres categorías a los grupos
		de peces explotados.<br>
		<br> <b>En deterioro:</b> El esfuerzo pesquero es excesivo sobre las
		poblaciones de peces. Existe una disminución notable en la abundancia
		(biomasa) y una capacidad reducida de incorporación a la población
		(reclutamiento).<br>
		<br> <b> Máximo aprovechamiento permisible:</b> El nivel de
		utilización de las poblaciones de peces se considera óptimo y no es
		posible aumentar la captura sin sobreexplotación. <br>
		<br> <b>Con potencial de desarrollo:</b> Existe la posibilidad de
		aumentar las capturas de las poblaciones de peces, incrementando el
		esfuerzo pesquero, siempre y cuando se realice de manera precautoria y
		controlada.<br>
		<br>
		<br> <b>Fuente de información:</b><br> - <a
			href="http://www.inapesca.gob.mx/portal/documentos/publicaciones/CARTA%20NACIONAL%20PESQUERA/24082012%20SAGARPA.pdf"
			target="_blank" style="color: #1B3138;">Carta Nacional Pesquera 2012</a>

</div>

<div id="s2" title="Selectividad en la captura">
	<p>
		Las artes de pesca son los diferentes métodos de captura o técnicas
		con las que los peces son atrapados. Algunas de las artes de pesca
		tienen un fuerte impacto sobre la biodiversidad marina y su ambiente y
		otras no lo tienen. Es determinante que el consumidor conozca la
		información sobre el tipo de arte que es utilizado por especie.<br>
		<br> <b>Pesca selectiva:</b> Se captura la especie objetivo de tamaño
		deseado y tiene un bajo impacto negativo sobre el ecosistema.<br>
		Algunos tipos de artes de pesca de bajo impacto: Red de arrastre para
		camarones RS-INP-MEX-110´para embarcaciones mayores en el Golfo de
		California, red agallera para lisa y liseta o lebrancha, línea de mano
		para peces pelágicos y demersales, curricán para pesca de especies
		pelágicas, palangre para peces pelágicos costeros, palangre para mero,
		palangre para la pesca de tiburones pelágicos del Pacífico central
		mexicano, a bordo de embarcaciones de mediana altura, palangre para
		atún: Golfo de México y Caribe.<br>
		<br> <b>Pesca no selectiva:</b> Se capturan diferentes especies y
		tamaños que no son el objetivo. Puede afectar delfines, tortugas y
		aves, dañar el ambiente y destruir los ecosistemas marinos.<br>
		Algunos tipos de artes de pesca de alto impacto para el ambiente son
		el chinchorro playero, red de enmalle para tiburones y rayas en
		embarcaciones menores, red agallera para escama pelágica, red agallera
		para escama de fondo, red agallera para esteros y línea de costa,
		palangre para embalses, palangre escama de esteros, palangre para
		especies de fondo, palangre para tiburón oceánico y pez espada.<br>
		<br>
		<br> <b>Fuentes de información:</b><br> - (Fuente: Cochrane, K. L.
		2005. Guía del administrador pesquero. Medidas de ordenación y su
		aplicación. FAO. Documento Técnico de Pesca. No. 424. Roma: FAO.<br> -
		<a
			href="http://www.inapesca.gob.mx/portal/documentos/publicaciones/CARTA%20NACIONAL%20PESQUERA/24082012%20SAGARPA.pdf"
			target="_blank" style="color: #1B3138;">Carta Nacional Pesquera 2012</a>
	</p>
</div>

<div id="s3" title="Vedas">
	<p>
		Con el fin de optimizar el aprovechamiento de la pesca desde un punto
		de vista biológico y socioeconómico, la Comisión Nacional de
		Acuacultura y Pesca (CONAPESCA) ha establecido regulaciones y actos
		administrativos para proteger a las especies comerciales.<br>
		<br> Las vedas consisten en prohibiciones de pesca durante periodos de
		tiempo o sitios específicos mediante acuerdos o normas oficiales.
		Tienen la finalidad de proteger a una o varias especies durante los
		periodos de reproducción o crianza.<br>
		<br> <b> Tipos de vida en México:</b><br>
		<br> <b>Veda permanente:</b> La especie no puede ser explotada en
		ningún momento del año de forma indefinida.<br>
		<br> <b>Veda temporal fija:</b> Se establece en un periodo definido y
		se repite anualmente.<br>
		<br> <b>Veda temporal variable:</b> Se establece por un periodo
		definido pero es actualizado anualmente.<br>
		<br>
		<br> <b>Fuente de información:</b><br> - <a
			href="http://www.conapesca.gob.mx/work/sites/cona/resources/PDFContent/14619/presentaioc.pdf"
			target="_blank" style="color: #1B3138;">Periodos de veda para
			especies marinas y dulceacuícolas</a>.
	</p>
</div>

<div id="s4" title="Especies en riesgo">
	<p>
		Además de la Carta Nacional Pesquera y sus regulaciones, existen otros
		convenios y normas de carácter nacional e internacional que regulan y
		protegen a especies en riesgo. Entre ellas están:<br>
		<br> <b>La Norma Mexicana de Especies en Riesgo</b> (<a
			href="http://www.biodiversidad.gob.mx/especies/catRiesMexico.html"
			target="_blank" style="color: #1B3138;">NOM-059-SEMARNAT-2010</a>),
		que contiene dentro de sus categorías a <b>4</b> peces de importancia
		comercial.<br>
		<br> <b>La Convención Internacional sobre el Comercio de Especies
			Amenazadas de Fauna y Flora</b> (<a
			href="http://www.biodiversidad.gob.mx/planeta/cites/index.html"
			target="_blank" style="color: #1B3138;">CITES</a>) que incluye 9
		especies de peces de importancia comercial.<br>
		<br> <b>La Lista Roja de la Unión Internacional para la Conservación
			de la Naturaleza</b> (<a
			href="http://www.biodiversidad.gob.mx/especies/catRiesMundo.html"
			target="_blank" style="color: #1B3138;">UICN</a>), tiene a 72
		especies de peces comerciales de México en las categorías de mayor
		riesgo.
	</p>
</div>

<div id="s5" title="Especies importadas">
	<p>Todo lo que nosotros consumimos en nuestra vida diaria tiene un
		impacto en la naturaleza y más aún cuando decidimos comprar productos
		de otros países.</p>
	<p>Para que llegue el pescado importado a nuestra mesa, tuvo que viajar
		miles de kilómetros lo cual representa grandes cantidades de gases de
		efecto invernadero, así como otros productos tóxicos haciendo que
		tengas una gran huella ecológica en tu manera de alimentarte. Además
		con este tipo de prácticas no ayudas al crecimiento económico de
		productores nacionales.</p>
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