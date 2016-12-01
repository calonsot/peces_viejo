<style>
.faltantes {display: none;}
</style>
<script>
$(document).ready(function(){
	$("#despliega_estado_conservacion").click(function() {
		$('.faltantes').toggle();
	});
	
	$("#togglea_buscador_en_inicio").click(function(){
		$("#buscador_en_inicio").toggle();
	});
});
</script>
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
    <button id="togglea_buscador_en_inicio" type="button">¡Utiliza nuestro buscador!</button>
    <div id="buscador_en_inicio">
    <?php $this->renderPartial('/peces/_buscador');?>
    </div>
<div class="fila">
  <article class="bloque1">

    <p class="text_important">¿Te has preguntado?</p>
    <ul class="preguntas">
      <li>&iquest;Qu&eacute; especie est&aacute;s comprando?</li>
      <li>&iquest;De qu&eacute; lugar proviene?</li>
      <li>&iquest;Si es mexicana o importada?</li>
      <li>&iquest;C&oacute;mo fue capturada?</li>
      <li>&iquest;Si es de una pesquer&iacute;a legal?</li>
    </ul>
  </article>
  <article class="bloque2">
    <p class="text_frase">Recuerda, cuando compras un producto del mar lo que tú elijas y compres en los mercados<br>y supermercados tiene un efecto directo positivo o negativo en la biodiversidad marina.</p>
    <p class="text_important">“Conociéndolos saben mejor”</p>
    <br><p style="font-size:11px;">
    	* La información técnica de esta página web proviene de la Carta Nacional Pesquera 2012
    </p>
  </article>
</div>

<div class="fila">
	<article class="bloque3">
  		<p>
  			<br><br><span class="titblue2">Los peces </span>constituyen un poco m&aacute;s de la mitad de todos los vertebrados del mundo. Se han registrado alrededor de 30,000 especies, que incluyen tiburones, rayas, quimeras, peces &oacute;seos y lampreas. M&eacute;xico tiene cerca de 2,250 peces marinos y 500 dulceacu&iacute;colas.
  		</p>
  		<p>
  			El Pac&iacute;fico mexicano se conocen cerca de <strong>1,120 </strong>especies,
				el 20% son aprovechadas comercialmente, y el Golfo de California tiene la mayor
				diversidad de especies.
			</p>
			<p>
				En el Golfo de México y Caribe mexicano se conocen cerca de <strong>2,057 </strong> 
				especies de estas el 11% son aprovechadas  y el Golfo de México tiene el mayor número.
			</p>
			<p>
				De las 32 entidades federativas que hay en el país, 17 de ellas tienen apertura al mar, 
				11 en el Pacífico y 6 en el Golfo de México y mar Caribe. De estos estados costeros 
				se extraen cerca de  1.2 millones de toneladas de peces anualmente. El 80% de la captura 
				proviene del Pacífico, principalmente el Golfo de California.
			</p>

			<table width="600" border="0" align="center" cellpadding="3" cellspacing="1" class="txt_peces tp">
				<tr>
					<td align="center" nowrap bgcolor="#E3E1CE">
						<span><strong>Pac&iacute;fico mexicano</strong></span>
					</td>
					<td align="center" nowrap bgcolor="#E3E1CE">
						<span>&nbsp;<strong>Toneladas<br> de peso desembarcado</strong></span>
					</td>
					<td align="center" nowrap bgcolor="#E3E1CE">
						<span><strong>Golfo de M&eacute;xico y<br> Mar Caribe</strong></span>
					</td>
					<td align="center" nowrap bgcolor="#E3E1CE">
						<span>&nbsp;<strong>Toneladas <br> de peso desembarcado</strong></span>
					</td>
				</tr>
				<tr>
					<td align="center" nowrap bgcolor="#EBE9DB">
						<span>Sonora</span>
					</td>
					<td align="center" nowrap bgcolor="#EBE9DB">
						<span>487,047</span>
					</td>
					<td align="center" nowrap bgcolor="#EBE9DB">
						<span>Veracruz</span>
					</td>
					<td align="center" nowrap bgcolor="#EBE9DB">
						<span>42,650 </span>
					</td>
				</tr>
				<tr>
					<td align="center" nowrap bgcolor="#EBE9DB">
						<span>Sinaloa</span>
					</td>
					<td align="center" nowrap bgcolor="#EBE9DB">
						<span>236,687 </span>
					</td>
					<td align="center" nowrap bgcolor="#EBE9DB">
						<span>Tamaulipas</span>
					</td>
					<td align="center" nowrap bgcolor="#EBE9DB">
						<span>26,078 </span>
					</td>
				</tr>
				<tr>
					<td align="center" nowrap bgcolor="#EBE9DB">
						<span>Baja California Sur </span>
					</td>
					<td align="center" nowrap bgcolor="#EBE9DB">
						<span>114,561 </span>
					</td>
					<td align="center" nowrap bgcolor="#EBE9DB">
						<span>Campeche</span>
					</td>
					<td align="center" nowrap bgcolor="#EBE9DB">
						<span>24,791</span>
					</td>
				</tr>
				<tr>
					<td align="center" nowrap bgcolor="#EBE9DB">
						<span>Baja California &nbsp;</span>
					</td>
					<td align="center" nowrap bgcolor="#EBE9DB">
						<span>87,050 </span>
					</td>
					<td align="center" nowrap bgcolor="#EBE9DB">
						<span>Tabasco</span>
					</td>
					<td align="center" nowrap bgcolor="#EBE9DB">
						<span>21,821 </span>
					</td>
				</tr>
				<tr>
					<td align="center" nowrap bgcolor="#EBE9DB">
						<span>Chiapas</span>
					</td>
					<td align="center" nowrap bgcolor="#EBE9DB">
						<span>31,106 </span>
					</td>
					<td align="center" nowrap bgcolor="#EBE9DB">
						<span>Yucat&aacute;n</span>
					</td>
					<td align="center" nowrap bgcolor="#EBE9DB">
						<span>17,599 </span>
					</td>
				</tr>
				<tr>
					<td align="center" nowrap bgcolor="#EBE9DB">
						<span>Colima</span>
					</td>
					<td align="center" nowrap bgcolor="#EBE9DB">
						<span>29,524</span>
					</td>
					<td align="center" nowrap bgcolor="#EBE9DB">
						<span>Quintana Roo</span>
					</td>
					<td align="center" nowrap bgcolor="#EBE9DB">
						<span>2,511 </span>
					</td>
				</tr>
				<tr>
					<td align="center" nowrap bgcolor="#EBE9DB">
						<span>Nayarit</span>
					</td>
					<td align="center" nowrap bgcolor="#EBE9DB">
						<span>23,093 </span>
					</td>
					<td align="center" valign="bottom" nowrap bgcolor="#EBE9DB">&nbsp;</td>
					<td align="center" valign="bottom" nowrap bgcolor="#EBE9DB">&nbsp;</td>
				</tr>
				<tr>
					<td align="center" nowrap bgcolor="#EBE9DB">
						<span>Michoac&aacute;n</span>
					</td>
					<td align="center" nowrap bgcolor="#EBE9DB">
						<span>15,434 </span>
					</td>
					<td align="center" valign="bottom" nowrap bgcolor="#EBE9DB">&nbsp;</td>
					<td align="center" valign="bottom" nowrap bgcolor="#EBE9DB">&nbsp;</td>
				</tr>
				<tr>
					<td align="center" nowrap bgcolor="#EBE9DB">
						<span>Jalisco</span>
					</td>
					<td align="center" nowrap bgcolor="#EBE9DB">
						<span>9,351</span>
					</td>
					<td align="center" valign="bottom" nowrap bgcolor="#EBE9DB">&nbsp;</td>
					<td align="center" valign="bottom" nowrap bgcolor="#EBE9DB">&nbsp;</td>
				</tr>
				<tr>
					<td align="center" nowrap bgcolor="#EBE9DB">
						<span>Guerrero</span>
					</td>
					<td align="center" nowrap bgcolor="#EBE9DB">
						<span>7,635</span>
					</td>
					<td align="center" valign="bottom" nowrap bgcolor="#EBE9DB">&nbsp;</td>
					<td align="center" valign="bottom" nowrap bgcolor="#EBE9DB">&nbsp;</td>
				</tr>
				<tr>
					<td align="center" nowrap bgcolor="#EBE9DB">
						<span>Oaxaca</span>
					</td>
					<td align="center" nowrap bgcolor="#EBE9DB">
						<span>5,902</span>
					</td>
					<td align="center" valign="bottom" nowrap bgcolor="#EBE9DB">&nbsp;</td>
					<td align="center" valign="bottom" nowrap bgcolor="#EBE9DB">&nbsp;</td>
				</tr>
				<tr>
					<td align="center" nowrap bgcolor="#E3E1CE">
						<span>&nbsp;<strong>Total </strong></span>
					</td>
					<td align="center" nowrap bgcolor="#E3E1CE">
						<span>1,047,398 </span>
					</td>
					<td align="center" nowrap bgcolor="#E3E1CE">
						<span>&nbsp;&nbsp;<strong>Total</strong></span>
					</td>
					<td align="center" nowrap bgcolor="#E3E1CE">
						<span>135,454 </span>
					</td>
				</tr>
			</table>

			<p>
				<img src="http://www.biodiversidad.gob.mx/usos/images/balazo_circulo.png" width="12" height="12">
				Estados pesqueros en M&eacute;xico junto con sus vol&uacute;menes de
				pesca (peso vivo en toneladas) del 2011. <span class="datospagprin">(Conapesca, Sagarpa. Anuario Estad&iacute;stico de Acuacultura y Pesca 2011).</span>
			</p>

			<div id="accordion">

				<h3 class="titblue">
					Estado de conservaci&oacute;n
				</h3>
				<div>
					<p>
						La actividad pesquera en el pa&iacute;s comenz&oacute; su auge en los a&ntilde;os 40, y en un principio la explotaci&oacute;n pesquera ten&iacute;a como objetivo el extraer los mayores vol&uacute;menes posibles de peces sin considerar la capacidad de renovaci&oacute;n de las especies, lo que result&oacute; en que muchas de las poblaciones de estos peces empezaran a tener una sobreexplotaci&oacute;n. Bajo este escenario se crea La Carta Nacional Pesquera (CNP) y publicada en el Diario de la Federaci&oacute;n el 18 de agosto del a&ntilde;o 2000.
					</p>
				</div>

				<h3 class="titblue">
					Carta Nacional Pesquera (CNP)
				</h3>
				<div>
					<p>
						Es el &uacute;nico documento oficial e instrumento regulatorio pesquero ambiental que indica el estado de salud de organismos marinos comerciales en M&eacute;xico, adem&aacute;s plantea restricciones y limites en algunas pesquer&iacute;as.<br><br>
						En base a estudios cient&iacute;ficos la carta agrupa en tres categor&iacute;as a los grupos de peces explotados:
					<p>
					<p>
						<strong><img src="/peces/imagenes/aplicacion/bp.png" width="6" height="6"> En deterioro:</strong> El esfuerzo pesquero es excesivo sobre las poblaciones de peces. Existe una disminuci&oacute;n notable en la biomasa y una capacidad reducida de reclutamiento.<br>
						<strong><img src="/peces/imagenes/aplicacion/bp.png" width="6" height="6"> M&aacute;ximo aprovechamiento permisible:</strong> El nivel de utilizaci&oacute;n de las poblaciones de peces se considera &oacute;ptimo y no es posible aumentar la captura sin sobreexplotaci&oacute;n.<br>
						<strong><img src="/peces/imagenes/aplicacion/bp.png" width="6" height="6"> Con potencial de desarrollo:</strong> Existe la posibilidad de aumentar las capturas de las poblaciones de peces, incrementando el esfuerzo pesquero, siempre y cuando se realice de manera precautoria y controlada.
					</p>
					<p>
						De acuerdo a los sitios de pesca de cada especie, la carta nacional ha regionalizado los sitios de acuerdo a zonas y n&uacute;meros:
					</p>
					<p>
						<strong>Pac&iacute;fico</strong>
					</p>
					<p>
						<strong><img src="/peces/imagenes/aplicacion/bp.png" width="6" height="6"> Zona 1:</strong> Pen&iacute;nsula de Baja California (Costa del Pac&iacute;fico de Baja California y Baja California Norte<br>
						<strong><img src="/peces/imagenes/aplicacion/bp.png" width="6" height="6"> Zona 2:</strong> Golfo de California (Baja California, Baja California Sur, Sonora, Sinaloa, Nayarit)<br>
						<strong><img src="/peces/imagenes/aplicacion/bp.png" width="6" height="6"> Zona 3:</strong> Pac&iacute;fico centro-sur (Jalisco, Colima, Michoac&aacute;n, Guerrero, Oaxaca, Chiapas)<br>
					</p>
					<p>
						<strong>Golfo de M&eacute;xico y Caribe</strong>
					</p>
					<p>
					<strong><img src="/peces/imagenes/aplicacion/bp.png" width="6" height="6"> Zona 1:</strong> Tamaulipas y Veracruz<br>
					<strong><img src="/peces/imagenes/aplicacion/bp.png" width="6" height="6"> Zona 2:</strong> Tabasco, Campeche y Yucat&aacute;n<br>
					<strong><img src="/peces/imagenes/aplicacion/bp.png" width="6" height="6"> Zona 3:</strong> Quintana Roo				
					</p>
				</div>
				
				<h3 class="titblue">
					Sustentabilidad pesquera
				</h3>
				<div>
					<p>
						Diversos estudios e investigadores indican que las poblaciones de cerca de 500 especies de peces comerciales actualmente se encuentran en las siguientes condiciones:
					</p>
					<table border="0" cellpadding="1" cellspacing="1" class="txt_peces">
				<tr>
					<td bgcolor="#E3E1CE"><span>
					</span>					<span>sobreexplotadas:
							20% </span>
					</td>
					<td width="18" bgcolor="#E3E1CE"><span>
					</span>
					</td>
					<td bgcolor="#E3E1CE"><span> en
							aprovechamiento m&aacute;ximo: 70% </span>
					</td>
					<td width="18" bgcolor="#E3E1CE"><span>
					</span>
					</td>
					<td bgcolor="#E3E1CE"><span>en
							desarrollo: 10% </span>
					</td>
				</tr>
				<tr>
					<td colspan="5" bgcolor="#D9D6C4"><span><span
							class="datospagprin">(Arregu&iacute;n &amp; Arcos 2011)</span>
					</span>
					</td>
				</tr>
					</table>
				</div>

				<h3 class="titblue">
					Peces comerciales en riesgo
				</h3>
				<div>
					<p>
						Adem&aacute;s de La Carta Nacional Pesquera y sus regulaciones, existen otros convenios y normas de car&aacute;cter nacional e internacional, estas regulan y protegen a especies en riesgo. Entre ellas est&aacute;n:
					</p>
					<p>
						<strong><img src="/peces/imagenes/aplicacion/bp.png" width="6" height="6"> La Norma Mexicana de Especies en Riesgo</strong> (<a href="http://www.biodiversidad.gob.mx/especies/catRiesMexico.html" target="_blank" style="color: #323D2C">NOM-059-SEMARNAT-2010</a>), y contiene dentro de sus categorias a <strong>4</strong> peces de importancia comercial.<br>
						<strong><img src="/peces/imagenes/aplicacion/bp.png" width="6" height="6"> La Convenci&oacute;n Internacional sobre el Comercio de Especies Amenazadas de Fauna y Flora</strong> (<a href="http://www.biodiversidad.gob.mx/planeta/cites/index.html" target="_blank" style="color: #323D2C">CITES</a>) incluye <strong>5</strong> especies de peces de importancia comercial.<br>
						<strong><img src="/peces/imagenes/aplicacion/bp.png" width="6" height="6"> La lista roja de la Uni&oacute;n Internacional para la Conservaci&oacute;n de la Naturaleza</strong> (<a href="http://www.biodiversidad.gob.mx/especies/catRiesMundo.html" target="_blank" style="color: #323D2C">IUCN</a>), tiene a <strong>64</strong> especies de peces en las categor&iacute;as de mayor riesgo.
					</p>

					<table width="600" border="0" align="center" cellpadding="3" cellspacing="1" class="txt_peces tp">
					<tr>
						<td max-width="150" bgcolor="#E3E1CE">
							<span><strong>Especie</strong></span>
						</td>
						<td max-width="100" bgcolor="#E3E1CE">
							<span><strong>NOM-059 <br>
							SEMARNAT 2010</strong></span>
						</td>
						<td max-width="100" bgcolor="#E3E1CE">
	        		<span><strong>CITES</strong></span>
						</td>
						<td max-width="100" bgcolor="#E3E1CE">
							<span><strong>IUCN</strong></span>
						</td>
					</tr>
					<?php $contador = 0; ?>
					<?php foreach (PezEstadoConservacion::nom_cites_iucn() as $res) { ?>
					<tr class="<?php echo $contador > 10 ? "faltantes" : "sobrantes"; ?>">
						<td width="150" valign="bottom" nowrap bgcolor="#EBE9DB">
							<span><?php echo $res["nombre"]; ?> </span>
						</td>
						<td width="100" valign="bottom" nowrap bgcolor="#EBE9DB">
							<span><em>
							<?php
							if (array_key_exists("3", $res["cat_riesgo"]))
								echo $res["cat_riesgo"]["3"]; 
							?></em></span>
						</td>
						<td width="100" valign="bottom" nowrap bgcolor="#EBE9DB">
							<span><?php
							if (array_key_exists("2", $res["cat_riesgo"]))
								echo $res["cat_riesgo"]["2"]; 
							?></span>
						</td>
						<td width="100" valign="bottom" nowrap bgcolor="#EBE9DB">
							<span><?php
							if (array_key_exists("1", $res["cat_riesgo"]))
								echo $res["cat_riesgo"]["1"]; 
							?></span>
						</td>
					</tr>
					<?php
						$contador++; 
						} 
						?>
					</table>
			
					<p style="text-align:right; padding-right:36px;">
						<strong><?php echo CHtml::link('Ver todos', NULL, array("id"=>"despliega_estado_conservacion", "style" => "color:#584B05; text-decoration:underline; cursor:pointer;")); ?></strong>
					</p>
				</div>

				<h3 class="titblue">
					Vedas
				</h3>
				<div>
					<p>
						Con el fin de optimizar el aprovechamiento de la pesca desde un punto de vista biol&oacute;gico y socioecon&oacute;mico, la Comisi&oacute;n Nacional de Acuacultura y Pesca (CONAPESCA) ha establecido regulaciones y actos administrativos para proteger a las especies comerciales.
					</p>
					<p>Pesca de altura o industrial
						Las vedas consisten en prohibiciones de pesca durante periodos de tiempo o sitios espec&iacute;ficos mediante acuerdos o normas oficiales, estas tienen la finalidad de proteger a una o varias especies durante los periodos de reproducci&oacute;n o crianza.
					</p>
					<p>
						<strong>Tipos de veda en M&eacute;xico:</strong><br>
						<strong><img src="/peces/imagenes/aplicacion/bp.png" width="6" height="6"> Veda permanente:</strong> La especie no puede ser explotada en ningún momento del a&ntilde;o de forma indefinida.<br>
						<strong><img src="/peces/imagenes/aplicacion/bp.png" width="6" height="6"> Veda temporal fija:</strong> Se establece en un periodo definido y se repite anualmente.<br>
						<strong><img src="/peces/imagenes/aplicacion/bp.png" width="6" height="6"> Veda temporal variable:</strong> Se establece por un periodo definido pero es actualizada anualmente.
					</p>
				</div>

				

				<h3 class="titblue">
					Artes de pesca
				</h3>
				<div>
					<p>
						Las artes de pesca son los diferentes métodos de captura o técnicas con las que los peces son atrapados. Existen 4 tipos principales de arte y de cada uno de ellos tienen variables y combinaciones diferentes:
					</p>
					<p>
						<strong><img src="/peces/imagenes/aplicacion/bp.png" width="6" height="6"> L&iacute;neas:</strong> Este arte consiste en un hilo con un anzuelo con carnada en su punta final. Existen variantes de la l&iacute;nea como: l&iacute;nea de anzuelo, l&iacute;nea
						cabrillera de fondo, l&iacute;nea de mano, troleado y carpiota o
						pollito.<br><br>
						<strong><img src="/peces/imagenes/aplicacion/bp.png" width="6" height="6"> Palangres: </strong>Es una cuerda larga con
						varios anzuelos con carnada sujetados a ciertos intervalos. Existen
						diferentes tipos de palangres como palangres escameros, palangre
						tiburonero, palangre viajero de fondo, rosario o ristra, dependiendo
						de las especies &ldquo;objetivo&rdquo;.<br><br>
						<strong><img src="/peces/imagenes/aplicacion/bp.png" width="6" height="6"> Redes: </strong>Las redes son mallas construida de hilos finos. Los peces quedan
						atrapados por las agallas o entre la cabeza y el cuerpo. Existen
						diferentes tipos de redes entre ellas est&aacute;n la red agallera,
						atarraya, red caritera, red corvinera y red sardinera.<br><br>
						<strong><img src="/peces/imagenes/aplicacion/bp.png" width="6" height="6"> Trampas y nasas: </strong>Son cajas o compartimientos a los que son
						atra&iacute;dos los peces. Las formas t&iacute;picas de las trampas
						y nasas, son cajas, conos, cilindros, esferas o botellas. Su
						tama&ntilde;o var&iacute;a seg&uacute;n la especie a capturar.
						Tienen aperturas en forma de embudos o cu&ntilde;as para que el pez
						ingrese f&aacute;cilmente pero tenga una baja probabilidad de
						escape. Existen diferentes tipos de trampas y nasas, como la nasa o
						trampa langostera, casitas cubanas, trampa para bacalao, trampa para
						pulpo.
					</p>
				</div>

				<h3 class="titblue">
					Tipos de artes de pesca
				</h3>
				<div>
					<p>
						Algunas de las artes de pesca tienen un fuerte impacto sobre la biodiversidad marina y su ambiente y otras no lo tienen, por lo que es determinante que el consumidor conozca la informaci&oacute;n sobre el tipo de arte que es utilizado por especie, para esto se han separado las artes de pesca en dos grupos:
					</p>

					<p>
						<img src="http://www.biodiversidad.gob.mx/usos/alimentacion/images/imgPecesAmigable.png" width="17" height="17"> <strong>Selectiva</strong><br>
						Algunos tipos de artes de pesca de bajo impacto: Red de arrastre para camarones
						RS-INP-MEX-110" para embarcaciones mayores en el Golfo de
						California, red agallera para lisa y liseta o lebrancha,
						l&iacute;nea de mano para peces pel&aacute;gicos y demersales,
						curric&aacute;n para pesca de especies pel&aacute;gicas, palangre
						para peces pel&aacute;gicos costeros, palangre para mero, palangre
						para la pesca de tiburones pel&aacute;gicos del Pac&iacute;fico
						central mexicano, a bordo de embarcaciones de mediana altura,
						palangre para at&uacute;n: Golfo de M&eacute;xico y Caribe.
					</p>
			
					<p>
						<img src="http://www.biodiversidad.gob.mx/usos/alimentacion/images/imgPecesNoAmigable.png" width="17" height="17"> <strong>No selectiva</strong><br> 
						Se capturan diferentes especies y tama&ntilde;os que no son el objetivo. Puede afectar delfines, tortugas y 
						aves, da&ntilde;ar el ambiente y destruir los ecosistemas marinos.<br><br>
						Algunos tipos de artes de pesca de alto impacto para el ambiente son el chinchorro playero,
						red de enmalle para tiburones y rayas en embarcaciones menores, red
						agallera para escama pel&aacute;gica, red agallera para escama de
						fondo, red agallera para esteros y l&iacute;nea de costa, palangre
						para embalses, palangre escama de esteros, palangre para especies de
						fondo, palangre para tibur&oacute;n oce&aacute;nico y pez espada.
					</p>
				</div>

				<h3 class="titblue">
					Pesca Ribere&ntilde;a y de altura
				</h3>
				<div>
					<p>
						En el país la pesca en sus litorales se divide en dos grandes grupos:
					</p>
					<p>
						<strong>Pesca ribereña</strong><br />
						Se lleva a cabo en ecosistemas costeros, no se realiza m&aacute;s all&aacute; de los 100 metros de profundidad y 
						generalmente est&aacute; ligada a comunidades de pescadores que usan embarcaciones peque&ntilde;as y medianas como 
						pangas, lanchas, etc. Representa el 30 % del volumen de pesca a nivel nacional y el 98% de las especies 
						comerciales capturadas.<br><br>
						<strong>Pesca de altura o industrial</strong><br />
						Se realiza principalmente en alta mar por lo que usan barcos grandes. Su principal objetivo es la captura del at&uacute;n, anchoveta y sardina, es decir el 2% de las especies comerciales; sin embargo es la m&aacute;s importante de las pesquer&iacute;as con el 70% del volumen de pesca.
					</p>
				</div>

			</div>

      <br />
      <hr>
      <br />

			<div id="accordion2">

				<h3 class="titblue">
						Referencias
				</h3>
				<div>
					<ul>
						<li>Arregu&iacute;n-S&aacute;nchez, F. y E. Arcos Huitr&oacute;n.
							2011. <em>La pesca en M&eacute;xico: estado de la
								explotaci&oacute;n y usos de los ecosistemas</em>.
							Hidrobiol&oacute;gica. 21(3):431-462.<br> <br>
						</li>
						<li>Cochrane, K. L. 2005. Gu&iacute;a del administrador pesquero.
							Medidas de ordenaci&oacute;n y su aplicaci&oacute;n. FAO. Documento
							T&eacute;cnico de Pesca. No. 424. Roma: FAO.<br> <br>
						</li>
						<li>Conapesca, Sagarpa. 2012 Anuario Estad&iacute;stico de
							Acuacultura y Pesca 2011. M&eacute;xico, D.F.<br> <br>
						</li>
						<li>DOF.2012. Carta Nacional Pesquera. Diario Oficial de la
							Federaci&oacute;n. M&eacute;xico, D.F: 24 de agosto de 2012.<br> <br>
						</li>
						<li>Espinosa P&eacute;rez H&eacute;ctor. 2014. <em>Biodiversidad de
								peces en M&eacute;xico</em>. Revista Mexicana de Biodiversidad.
							Supl. 85:S450-S459. <br> <br>
						</li>
						<li>IUCN 2013. <em><a href="http://www.iucnredlist.org/"
								target="_blank" style="color: #584B05">La Lista Roja de Especies
									Amenazadas</a>
						</em>. Versi&oacute;n 2013.1 <a href="http://www.iucnredlist.org/"></a>
							<br> <br>
						</li>
						<li>WWF. 2006. Mejores pr&aacute;cticas de pesca en arrecifes
							coralinos. Gu&iacute;a para la colecta de informaci&oacute;n que
							apoye el Manejo de Pesquer&iacute;as Basado en Ecosistemas. WWF
							M&eacute;xico/Centroam&eacute;rica. 81 pp.</li>
					</ul>
				</div>
				
	      <h3 class="titblue">
						Lecturas recomendadas
				</h3>
				<div>
					<ul>
						<li>L&oacute;pez Jim&eacute;nez, L.N., Gonz&aacute;lez Solis, A.,
							Torruco, D. 2014. <a
							href="http://www.biodiversidad.gob.mx/Biodiversitas/Articulos/biodiv113art3.pdf"
							target="_blank" style="color: #584B05">Peces bent&oacute;nicos y
								demersales de la Sonda de Campeche: sur del Golfo de M&eacute;xico</a>.
							CONABIO. Biodiversitas, 113:12-16.<br> <br>
						</li>
						<li>Del Moral Flores, L. F., G. P&eacute;rez Ponce de Le&oacute;n.
							2013. <a
							href="http://www.biodiversidad.gob.mx/Biodiversitas/Articulos/biodiv111art1.pdf"
							target="_blank" style="color: #584B05">Tiburones, rayas y quimeras
								de M&eacute;xico</a>. CONABIO. Biodiversitas, 111:1-6.<br> <br> <a
							href="http://www.biodiversidad.gob.mx/Biodiversitas/Articulos/biodiv111art1.pdf"></a>
						</li>
						<li>Paredes, G.A., B. Erisman, I. Mascare&ntilde;as Osorio, J. Cota
							Nieto, K. Gherard y O. Aburto Oropeza. 2010. <a
							href="http://www.biodiversidad.gob.mx/Biodiversitas/Articulos/biodiv91art1.pdf"
							target="_blank" style="color: #584B05">La curvina golfina:
								Biolog&iacute;a, pesquer&iacute;a y su gente</a>. CONABIO.
							Biodiversitas, 91:1-5.<br> <br>
						</li>
						<li>Castillo G&eacute;niz, M. 2009. <a
							href="http://www.biodiversidad.gob.mx/Biodiversitas/Articulos/biodiv84art1.pdf"
							target="_blank" style="color: #584B05">Conservar los tiburones</a>.
							CONABIO. Biodiversitas, 84:1-5.<br> <br>
						</li>
						<li>Aburto, O. 2007. <a
							href="http://www.biodiversidad.gob.mx/Biodiversitas/Articulos/biodiv73art2.pdf"
							target="_blank" style="color: #584B05">El pargo amarillo:
								depredador de los arrecifes rocosos</a>. CONABIO. Biodiversitas,
							73:8-11.<br> <br>
						</li>
						<li>Monteforte, M., y M. Cari&ntilde;o. 2005.<a
							href="http://www.biodiversidad.gob.mx/Biodiversitas/Articulos/biodiv61art1.pdf"
							target="_blank" style="color: #584B05"> Perspectivas de la
								piscicultura marina en el Golfo de California</a>. CONABIO.
							Biodiversitas, 61:1-7.<br> <br>
						</li>
						<li>Romeu, E. 1995. <a
							href="http://www.biodiversidad.gob.mx/Biodiversitas/Articulos/biodiv2art1.pdf"
							target="_blank" style="color: #584B05">Tiburones</a>.
							Biodiversitas, 2:1-6.<br>
						</li>
					</ul>
				</div>

				<h3 class="titblue">
						Sitios web
				</h3>
				<div>
					<ul>
						<li><a href="http://www.inapesca.gob.mx/portal/" target="_blank"
							style="color: #330">Instituto Nacional de la Pesca</a>. (INAPESCA)<br>
							<br> <a href="http://www.inapesca.gob.mx/portal/"></a>
						</li>
						<li><a href="http://www.conapesca.gob.mx/wb/" target="_blank"
							style="color: #330">Comisi&oacute;n Nacional de Acuacultura y Pesca</a>.
							(CONAPESCA)<br></li>
					</ul>
				</div>

			</div>
			<br><br>
  </article>

  <article class="bloque4">
  	<p class="titblue">
		Carteles
		</p>
		<p align="center" class="titblue2">Peces comerciales de M&eacute;xico: Oc&eacute;ano Pac&iacute;fico</p>
		<img src="http://www.biodiversidad.gob.mx/usos/alimentacion/images/peces/cartel_peces_pacifico.png" width="250" height="167" />
		<p align="center" class="titblue2"><strong>Peces comerciales de M&eacute;xico:<br>Golfo y Caribe</strong></p>
		<img src="http://www.biodiversidad.gob.mx/usos/alimentacion/images/peces/cartel_peces_golfo_web.png" width="250" height="167" /><br />
		<div align="center" class="datospagprin">Disponibles en nuestro <a href="http://www.biodiversidad.gob.mx/publicaciones/publicaciones.php" target="_blank" style="color: #323D2C">cat&aacute;logo de publicaciones</a></div>
		  	
    <br />
    <hr>
    <br />

    <p class="titblue">Videos&nbsp;&nbsp;&nbsp;</p>
    <iframe width="250" height="141" src="//www.youtube.com/embed/AZcTLXVL4_A?rel=0" frameborder="0" allowfullscreen></iframe><br>
		<p class="datospagprin"><strong>N&uacute;meros Naturales - Sardinas</strong><br />
			Descubre la 	historia que se esconde tras la pesquer&iacute;a de sardinas del Golfo de California.</p>
            
		<br /><hr><br />
            
		<p class="titblue">Gu&iacute;as&nbsp;&nbsp;&nbsp;</p>
    <span class="datospagprin">(pr&oacute;ximamente)</span>
  </article>
</div>