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
   
    <!--<button id="togglea_buscador_en_inicio" type="button">¡Utiliza nuestro buscador!</button>
    <div id="buscador_en_inicio">-->
    <?php $this->renderPartial('/peces/_buscador');?>
    <!--</div>-->
      
<div class="fila2">
	<article class="bloque1">
	<table width="100%" border="0">
		<tbody>
		<tr>
		  <td width="30%" rowspan="2" valign="top">
		  <p class="text_important">¿Te has preguntado?</p>
			<ul class="preguntas">
			  <li>&iquest;Qu&eacute; especie est&aacute;s comprando?</li>
			  <li>&iquest;De qu&eacute; lugar proviene?</li>
			  <li>&iquest;Si es mexicana o importada?</li>
			  <li>&iquest;C&oacute;mo fue capturada?</li>
			  <li>&iquest;Si es de una pesquer&iacute;a legal?</li>
			</ul>
		  </td>
		  <td width="70%" colspan="2">
		  	<p class="text_frase">Recuerda, cuando compras un producto del mar lo que tú elijas y compres en los mercados y supermercados tiene un efecto directo positivo o negativo en la biodiversidad marina.</p></td>
		</tr>
		<tr>
		  <td>
		  	<span class="text_important">“Conociéndolos saben mejor”</span>
			<br><br>
			<span style="font-size:12px;">
				* La información técnica de esta página web proviene de la <a href="http://www.inapesca.gob.mx/portal/documentos/publicaciones/CARTA%20NACIONAL%20PESQUERA/24082012%20SAGARPA.pdf" target="_blank">Carta Nacional Pesquera 2012</a>
			</span>
		  </td>
		  <td align="center">
		  	Con la colaboración de<br><br>
          <a href="http://cobi.org.mx" target="_blank"><?php echo CHtml::image(Yii::app()->request->baseUrl."/imagenes/aplicacion/logo-cobi-hd.png");?></a>
          
          </td>
		  </tr>
		</tbody>
	</table>
	</article>

</div>

<div class="fila2">
	<article class="bloque3">

			<div id="accordion">

				<h3 class="titblue">
					Acerca de esta página
				</h3>
				<div>
					<p>Esta página tiene el propósito de orientar a los usuarios sobre el consumo responsable de los peces marinos de México, intentando reducir la presión pesquera sobre las especies con mayor demanda en los mercados y ayudando a diversificar los hábitos de consumo.</p>
					
					<p>Sin embargo, no existe información detallada sobre el estado de las pesquerías en México. Por lo que hemos reunido la información disponible que nos puede ayudar a tomar decisiones.  A medida que la información mejore, la página se irá actualizando.</p>

					<p>La página contiene la información de <strong>475</strong> especies de peces marinos comerciales. Para la mitad de las especies (<strong>244</strong>) existe información que nos permite tener una orientación e incluirlas en un semáforo de consumo responsable (Carta Nacional Pesquera, Norma Mexicana Oficial 059, IUCN 2016).</p>

					<p>Cada especie tiene una ficha que incluye el nombre común y científico, una ilustración (si es de gran importancia comercial) o silueta de la especie, su distribución, el tipo de pesca, el arte de captura, talla de captura, descripción general de la especie, alimentación, nivel trófico, resiliencia, vulnerabilidad, color dentro del semáforo de consumo responsable (en su caso), si la especie está dentro de una veda, temporada de la veda, si la especie se encuentra dentro de alguna lista de especies en peligro.</p>


					</p>
				</div>
				
				<h3 class="titblue">
					Sustentabilidad pesquera
				</h3>
				<div>
					<p>Entre las organizaciones interesadas en promover las pesquerías sustentables han acordado la necesidad de evaluar cuatro criterios (<a href="http://cobi.org.mx/" target="_blank">Comunidad y Biodiversidad 2017</a>).</p>

					<p>
					<b>1. La salud de la población de peces</b><br>
					La salud de la población se conoce por la abundancia y tendencia de la población que depende del balance entre cuantos nacen y cuantos mueren, entre cuantos llegan y cuantos se van (migraciones).  Cuando una población disminuye quiere decir que la estamos afectando, mientras que si su población se mantiene o aumenta, quiere decir que se encuentra en buenas condiciones o en recuperación.
					</p> 

					<p>
					<b>Dentro de este criterio es importante</b><br>
					
					<blockquote>
					<b>a. </b>Evaluar la población. Para conocer la salud de la población es necesario evaluarla (evaluación del stock) con índices dependientes e independientes de la pesquería.<br>
					<b>b. </b>Seleccionar e implementar los instrumentos de manejo pesquero como cuotas, reservas marinas, vedas, tallas mínimas, esfuerzo pesquero.<br>
					<b>c. </b>Evaluar la acción de los instrumentos de manejo pesquero.<br>
					<b>d. </b>Adaptar las medidas de acuerdo con los resultados obtenidos.
					</blockquote>
					</p>

					<p>
					<b>2.	La salud del ecosistema</b><br>
					La salud del ecosistema se conoce por su composición, estructura y funcionamiento.  La pesca puede tener impacto sobre terceros.
					</p>

					<p>
					<b>Dentro de este criterio es importante</b><br>
					<blockquote>
					<b>a. </b>Conocer el impacto de la pesca en la red trófica, particularmente en las especies protegidas  y en el hábitat. Además es importante conocer los efectos indirectos de remover la biomasa del ecosistema.<br>
					<b>b. </b>Definir e implementar estrategias para reducir los impactos.<br>
					<b>c. </b>Evaluar los resultados de las estrategias.<br>
					<b>d. </b>Adaptar las estrategias de acuerdo con los resultados obtenidos.
					</blockquote>
					</p>

					<p>
					<p><b>3.	El manejo de la pesquería</b><br>
					El manejo de la pesquería debe ser confiable y basado en</p> 

					<blockquote>
					<b>a. </b>Planes o reglas formales e informales de manejo con objetivos de corto, mediano y largo plazo y puntos de referencia.<br>
					<b>b. </b>Establecimiento de un grupo que opera el plan o las reglas de manejo.<br>
					<b>c. </b>Transparencia en la toma de decisiones.<br>
					<b>d. </b>Difusión de la información y decisiones.</blockquote>
					</p>

					<p>
					<b>4.	La gobernanza en los involucrados </b><br>
					La gobernanza varios aspectos sociales entre ellos:<br>
					<blockquote>
					<b>a. </b>Los derechos de acceso, como permisos, demarcación del área (polígono) de aprovechamiento, concesiones.<br>
					<b>b. </b>Salud ocupacional que incluye el cumplimiento de los requisitos de Capitanía de Puerto, y prestaciones de salud<br>
					<b>c. </b>Precios justos<br>
					<b>d. </b>Acceso a compradores y mercados que incentivan la pesca responsable<br>
					<b>e. </b>Certificación de la pesquería.
					</blockquote>
					</p>

					<p>En México, muy pocas pesquerías tienen información sobre estos criterios.<br>
					Diversos estudios e investigadores indican que las poblaciones de cerca de <b>500</b> especies de peces comerciales actualmente se encuentran en las siguientes condiciones:</p>

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
							class="piefoto">(Arregu&iacute;n &amp; Arcos 2011)</span>
					</span>
					</td>
				</tr>
					</table>
					
					<p><b>Criterios de los Certificados Internacionales</b></p>
					
					<ul>
						<li>
							<a href="https://www.msc.org/acerca-del-msc/estandares/estandares/estandar-msc-para-la-pesca-sostenible" target="_blank">Marine Stewardship Council (MSC)</a>
						</li>
						<li>
						<a href="https://www.seafoodwatch.org/-/m/sfw/pdf/criteria/mba_seafood%20watch_fisheries%20standard_version%20f3.2.pdf?la=en" target="_blank">Monterey Bay Aquarium – Seafood Watch Program(MBA)</a>
						</li>
						<li>
						<a href="http://fairtradeusa.org/sites/all/files/wysiwyg/filemanager/standards/spanish/FTUSA_standards_principles_SP_022713.pdf " target="_blank">Fair Trade USA</a>
						</li>
					</ul>
					
					  
					
					
				</div>

				
				<h3 class="titblue">
					Acerca del semáforo
				</h3>
				<div>
					<p>
						Las especies de peces con información (244 especies) se encuentran contenidas en el semáforo con cinco categorías:
					</p>
						<table width="400" border="0" align="center" cellpadding="3" cellspacing="1" class="txt_peces tp tabla_semaforo">
							<tr>
								<th>Categorías</td>
								<th>Suma de criterios</td>
							</tr>
							<tr class="color_V+">
								<td>Muy recomendable</td>
								<td>0 a 3</td>
							</tr>
							<tr class="color_V-">
								<td>Recomendable</td>
								<td>4 a 10</td>
							</tr>
							<tr class="color_A-">
								<td>Poco recomendable</td>
								<td>11 a 15</td>
							</tr>
							<tr class="color_A+">
								<td>No recomendable</td>
								<td>16 a 19</td>
							</tr>
							<tr class="color_R">
								<td>Evita</td>
								<td>20 a 34</td>
							</tr>
						</table>
							
						<p>
						<div class="recomendacion_pez color_V+ d30"><span>&nbsp;&nbsp;&nbsp;Muy recomendable</span></div>
						<div class="d70">Especies que no tienen mucha presión pesquera, no tienen veda, no se encuentran dentro de ninguna lista de especies en riesgo. Sus características biológicas les ayudan a tolerar la presión pesquera.</div>
						</p>

						<p>
						<div class="recomendacion_pez color_V- d30"><span>&nbsp;&nbsp;&nbsp;Recomendable</span></div> 
						<div class="d70">Especies que tienen cierta presión pesquera, pero no tienen veda, no se encuentran dentro de ninguna lista de especies en riesgo. Sus características biológicas les ayudan a tolerar la presión pesquera.</div>
						</p>

						<p>
						<div class="recomendacion_pez color_A- d30"><span>&nbsp;&nbsp;&nbsp;Poco recomendable</span></div> 
						<div class="d70">Especies con presión pesquera alta, con veda, y/o que están dentro de alguna lista de especies en riesgo. Sus características biológicas las hacen un poco vulnerables a la presión pesquera.</div>
						</p>

						<p>
						<div class="recomendacion_pez color_A+ d30"><span>&nbsp;&nbsp;&nbsp;No recomendable</span></div> 
						<div class="d70">Especies con gran presión pesquera, con alguna veda, y/o que están dentro de alguna lista de especies en riesgo. Sus características biológicas las hacen vulnerables a la presión pesquera.</div>
						</p>

						<p>
						<div class="recomendacion_pez color_R d30"><span>&nbsp;&nbsp;&nbsp;Evita</span></div> 
						<div class="d70">Especies con poblaciones en deterioro a nivel pesquero, que están en una lista de especies en riesgo, tienen veda y muchas de ellas se encuentran en veda permanente. Sus características biológicas las hacen muy vulnerables a la presión pesquera.</div>
						</p>

						
						<p><b>Criterios del semáforo</b><br>
						Entre más alto es el valor, menos recomendable es la especie</p>

						<p><b>1. Procedencia</b>
						<blockquote>
						<b>Nacional:</b> (Valor=0) Especie capturada dentro del litoral mexicano.<br><br>
						<b>Importada:</b> (Valor=20) Especie capturada o cultivada en otros países o fuera del litoral mexicano.<br><br>
						Al comprar especies importadas tu huella ecológica (impacto negativo en el ambiente), aumenta, ya que para que llegue a tu mesa, tuvo que pasar por refrigeración, empaque y transporte, lo cual se traduce contaminación.
						</blockquote>
						</p> 

						<p><b>2. Estado de las poblaciones</b>
						<blockquote>
						En base a estudios científicos la <a href="http://www.inapesca.gob.mx/portal/documentos/publicaciones/CARTA%20NACIONAL%20PESQUERA/24082012%20SAGARPA.pdf" target="_blank">Carta Nacional Pesquera</a> agrupa en tres categorías a los peces que son aprovechados.<br><br>
						<b>Con potencial de desarrollo:</b> (Valor = 0) Existe la posibilidad de aumentar las capturas de las poblaciones de peces, incrementando el esfuerzo pesquero, siempre y cuando se realice de manera precautoria y controlada.<br><br>
						<b>Máximo aprovechamiento permisible:</b> (Valor = 5) El nivel de utilización de las poblaciones de peces se considera óptimo y ya no es posible aumentar la captura sin llevarla a la sobreexplotación.<br><br>
						<b>En deterioro:</b> (Valor=10) El esfuerzo pesquero es excesivo sobre las poblaciones de peces. Existe una disminución notable en la abundancia (biomasa) y una capacidad reducida de incorporación a la población (reclutamiento).
						</blockquote>
						</p>

						<p><b>3. Especies en riesgo</b>
						<blockquote>
						Existen convenios y normas de carácter nacional e internacional que regulan y protegen a las especies en riesgo. Para este semáforo se tomaron en cuenta las categorías incluidas en la <a href="http://dof.gob.mx/nota_detalle.php?codigo=5173091&fecha=30/12/2010" target="_blank">Norma Oficial Mexicana de Especies en Riesgo</a> (NOM-059-SEMARNAT-2010) y en la <a href="http://www.iucnredlist.org/" target="_blank">Lista Roja de la Unión Internacional para la Conservación de la Naturaleza</a> (UICN 2016).<br><br>
						<b>Especies fuera de las listas:</b> (Valor = 0)<br><br>
						<b>Especies en alguna categoría:</b> (Valor = 5)
						</blockquote>
						</p>

						<p><b>4. Vedas</b>
						<blockquote>
						Las vedas consisten en prohibiciones de pesca durante periodos de tiempo o sitios específicos mediante acuerdos o normas oficiales. Tienen la finalidad de proteger a una o varias especies durante los periodos de reproducción o crianza (<a href="http://www.conapesca.gob.mx/work/sites/cona/dgop/VEDASVIGENTES170518.pdf" target="_blank">CONAPESCA</a>).<br>
						Las vedas pueden ser:<br><br>
						<b>Sin veda:</b> (Valor = 0)<br><br>
						<b>Temporal fija:</b> (Valor = 1) Se establece en un periodo definido y se repite anualmente.<br><br>
						<b>Temporal variable:</b> (Valor = 1) Se establece por un periodo definido pero es actualizado anualmente.<br><br>
						<b>Permanente:</b> (Valor = 3) La especie no puede ser aprovechada en ningún momento del año de forma indefinida.
						</blockquote></p>

						<p><b>5. Selectividad en la captura</b> 
						<blockquote>
						<a href="http://www.inapesca.gob.mx/portal/documentos/publicaciones/CARTA%20NACIONAL%20PESQUERA/24082012%20SAGARPA.pdf" target="_blank">Las artes de pesca</a> son los diferentes métodos de captura o técnicas con las que los peces son atrapados. El impacto de las artes de pesca en la biodiversidad marina es distinto.<br><br>
						<b>Selectiva:</b> (Valor = 0) Se captura la especie objetivo de tamaño deseado y no es destructiva con el ecosistema.<br><br>
						<b>No selectiva:</b> (Valor = 1) Se capturan diferentes especies y tamaños que no son el objetivo. Puede afectar a delfines, tortugas y aves, dañar el ambiente y destruir los ecosistemas marinos.
						</blockquote>
						</p>
						 
				</div>
				
				<h3 class="titblue">
					La pesca en México
				</h3>
				<div>
					<p><span class="titblue2">Los peces </span>constituyen un poco m&aacute;s de la mitad de todos los vertebrados del mundo. Se han registrado alrededor de 30,000 especies, que incluyen tiburones, rayas, quimeras, peces &oacute;seos y lampreas. M&eacute;xico tiene cerca de 2,250 peces marinos y 500 dulceacu&iacute;colas.
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
				se extraen cerca de 1 millón de toneladas de peces anualmente. El 90% de la captura 
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
						pesca (peso vivo en toneladas) del 2011. <span class="piefoto">(Conapesca, Sagarpa. Anuario Estad&iacute;stico de Acuacultura y Pesca 2011).</span>
					</p>
				</div>
				
				<h3 class="titblue">
					Estado de aprovechamiento
				</h3>
				<div>
					<strong>Estado de conservación</strong>
					<p>
						La actividad pesquera en el pa&iacute;s comenz&oacute; su auge en los a&ntilde;os 40, y en un principio la explotaci&oacute;n pesquera ten&iacute;a como objetivo el extraer los mayores vol&uacute;menes posibles de peces sin considerar la capacidad de renovaci&oacute;n de las especies, lo que result&oacute; en que muchas de las poblaciones de estos peces empezaran a tener una sobreexplotaci&oacute;n. Bajo este escenario se crea La Carta Nacional Pesquera (CNP) y publicada en el Diario de la Federaci&oacute;n el 18 de agosto del a&ntilde;o 2000.
					</p>
					
					
					<strong>Carta Nacional Pesquera (CNP)</strong>
					<p>
						Es el &uacute;nico documento oficial e instrumento regulatorio pesquero ambiental que indica el estado de salud de organismos marinos comerciales en M&eacute;xico, adem&aacute;s plantea restricciones y limites en algunas pesquer&iacute;as.<br><br>
						En base a estudios cient&iacute;ficos la carta agrupa en tres categor&iacute;as a los grupos de peces explotados:
					<p>
					<p>
						<strong><?php echo CHtml::image(Yii::app()->request->baseUrl."/imagenes/aplicacion/bp.png");?> En deterioro:</strong> El esfuerzo pesquero es excesivo sobre las poblaciones de peces. Existe una disminuci&oacute;n notable en la biomasa y una capacidad reducida de reclutamiento.<br>
						<strong><?php echo CHtml::image(Yii::app()->request->baseUrl."/imagenes/aplicacion/bp.png");?> M&aacute;ximo aprovechamiento permisible:</strong> El nivel de utilizaci&oacute;n de las poblaciones de peces se considera &oacute;ptimo y no es posible aumentar la captura sin sobreexplotaci&oacute;n.<br>
						<strong><?php echo CHtml::image(Yii::app()->request->baseUrl."/imagenes/aplicacion/bp.png");?> Con potencial de desarrollo:</strong> Existe la posibilidad de aumentar las capturas de las poblaciones de peces, incrementando el esfuerzo pesquero, siempre y cuando se realice de manera precautoria y controlada.
					</p>
					<p>
						De acuerdo a los sitios de pesca de cada especie, la carta nacional ha regionalizado los sitios de acuerdo a zonas y n&uacute;meros:
					</p>
					<p>
						<strong>Pac&iacute;fico</strong>
					</p>
					<p>
						<strong><?php echo CHtml::image(Yii::app()->request->baseUrl."/imagenes/aplicacion/bp.png");?> Zona 1:</strong> Pen&iacute;nsula de Baja California (Costa del Pac&iacute;fico de Baja California y Baja California Norte<br>
						<strong><?php echo CHtml::image(Yii::app()->request->baseUrl."/imagenes/aplicacion/bp.png");?> Zona 2:</strong> Golfo de California (Baja California, Baja California Sur, Sonora, Sinaloa, Nayarit)<br>
						<strong><?php echo CHtml::image(Yii::app()->request->baseUrl."/imagenes/aplicacion/bp.png");?> Zona 3:</strong> Pac&iacute;fico centro-sur (Jalisco, Colima, Michoac&aacute;n, Guerrero, Oaxaca, Chiapas)<br>
					</p>
					<p>
						<strong>Golfo de M&eacute;xico y Caribe</strong>
					</p>
					<p>
					<strong><?php echo CHtml::image(Yii::app()->request->baseUrl."/imagenes/aplicacion/bp.png");?> Zona 1:</strong> Tamaulipas y Veracruz<br>
					<strong><?php echo CHtml::image(Yii::app()->request->baseUrl."/imagenes/aplicacion/bp.png");?> Zona 2:</strong> Tabasco, Campeche y Yucat&aacute;n<br>
					<strong><?php echo CHtml::image(Yii::app()->request->baseUrl."/imagenes/aplicacion/bp.png");?> Zona 3:</strong> Quintana Roo				
					</p>
				</div>
				
				
				<h3 class="titblue">
					Peces comerciales en riesgo
				</h3>
				<div>
					<p>
						Adem&aacute;s de La Carta Nacional Pesquera y sus regulaciones, existen otros convenios y normas de car&aacute;cter nacional e internacional, estas regulan y protegen a especies en riesgo. Entre ellas est&aacute;n:
					</p>
					<p>
						<strong><?php echo CHtml::image(Yii::app()->request->baseUrl."/imagenes/aplicacion/bp.png");?> La Norma Mexicana de Especies en Riesgo</strong> (<a href="http://www.biodiversidad.gob.mx/especies/catRiesMexico.html" target="_blank" style="color: #323D2C">NOM-059-SEMARNAT-2010</a>), y contiene dentro de sus categorias a <strong>4</strong> peces de importancia comercial.<br>
						<strong><?php echo CHtml::image(Yii::app()->request->baseUrl."/imagenes/aplicacion/bp.png");?> La Convenci&oacute;n Internacional sobre el Comercio de Especies Amenazadas de Fauna y Flora</strong> (<a href="http://www.biodiversidad.gob.mx/planeta/cites/index.html" target="_blank" style="color: #323D2C">CITES</a>) incluye <strong>5</strong> especies de peces de importancia comercial.<br>
						<strong><?php echo CHtml::image(Yii::app()->request->baseUrl."/imagenes/aplicacion/bp.png");?> La lista roja de la Uni&oacute;n Internacional para la Conservaci&oacute;n de la Naturaleza</strong> (<a href="http://www.biodiversidad.gob.mx/especies/catRiesMundo.html" target="_blank" style="color: #323D2C">IUCN</a>), tiene a <strong>64</strong> especies de peces en las categor&iacute;as de mayor riesgo.
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
	        		<span><strong>IUCN</strong></span>
						</td>
						<td max-width="100" bgcolor="#E3E1CE">
							<span><strong>CITES</strong></span>
						</td>
					</tr>
					<?php $contador = 0; ?>
					<?php foreach (Peces::nom_cites_iucn() as $res) { ?>
					<tr class="<?php echo $contador > 10 ? "faltantes" : "sobrantes"; ?>">
						<td width="150" valign="bottom" nowrap bgcolor="#EBE9DB">
							<span><?php echo $res["nombre_comun"]." (".$res["nombre_cientifico"].")"; ?> </span>
						</td>
						<td width="100" valign="bottom" nowrap bgcolor="#EBE9DB">
							<span><?php echo $res["nom"]; ?></span>
						</td>
						<td width="100" valign="bottom" nowrap bgcolor="#EBE9DB">
							<span><?php echo $res["iucn"]; ?></span>
						</td>
						<td width="100" valign="bottom" nowrap bgcolor="#EBE9DB">
							<span><?php echo $res["cites"]; ?></span>
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
						<strong><?php echo CHtml::image(Yii::app()->request->baseUrl."/imagenes/aplicacion/bp.png");?> Veda permanente:</strong> La especie no puede ser explotada en ningún momento del a&ntilde;o de forma indefinida.<br>
						<strong><?php echo CHtml::image(Yii::app()->request->baseUrl."/imagenes/aplicacion/bp.png");?> Veda temporal fija:</strong> Se establece en un periodo definido y se repite anualmente.<br>
						<strong><?php echo CHtml::image(Yii::app()->request->baseUrl."/imagenes/aplicacion/bp.png");?> Veda temporal variable:</strong> Se establece por un periodo definido pero es actualizada anualmente.
					</p>
				</div>

				

				<h3 class="titblue">
					Artes de pesca y selectividad
				</h3>
				<div>
					<p>
						Las artes de pesca son los diferentes métodos de captura o técnicas con las que los peces son atrapados. Existen 4 tipos principales de arte y de cada uno de ellos tienen variables y combinaciones diferentes:
					</p>
					<p>
						<strong><?php echo CHtml::image(Yii::app()->request->baseUrl."/imagenes/aplicacion/bp.png");?> L&iacute;neas:</strong> Este arte consiste en un hilo con un anzuelo con carnada en su punta final. Existen variantes de la l&iacute;nea como: l&iacute;nea de anzuelo, l&iacute;nea
						cabrillera de fondo, l&iacute;nea de mano, troleado y carpiota o
						pollito.<br><br>
						<strong><?php echo CHtml::image(Yii::app()->request->baseUrl."/imagenes/aplicacion/bp.png");?> Palangres: </strong>Es una cuerda larga con
						varios anzuelos con carnada sujetados a ciertos intervalos. Existen
						diferentes tipos de palangres como palangres escameros, palangre
						tiburonero, palangre viajero de fondo, rosario o ristra, dependiendo
						de las especies &ldquo;objetivo&rdquo;.<br><br>
						<strong><?php echo CHtml::image(Yii::app()->request->baseUrl."/imagenes/aplicacion/bp.png");?> Redes: </strong>Las redes son mallas construida de hilos finos. Los peces quedan
						atrapados por las agallas o entre la cabeza y el cuerpo. Existen
						diferentes tipos de redes entre ellas est&aacute;n la red agallera,
						atarraya, red caritera, red corvinera y red sardinera.<br><br>
						<strong><?php echo CHtml::image(Yii::app()->request->baseUrl."/imagenes/aplicacion/bp.png");?> Trampas y nasas: </strong>Son cajas o compartimientos a los que son
						atra&iacute;dos los peces. Las formas t&iacute;picas de las trampas
						y nasas, son cajas, conos, cilindros, esferas o botellas. Su
						tama&ntilde;o var&iacute;a seg&uacute;n la especie a capturar.
						Tienen aperturas en forma de embudos o cu&ntilde;as para que el pez
						ingrese f&aacute;cilmente pero tenga una baja probabilidad de
						escape. Existen diferentes tipos de trampas y nasas, como la nasa o
						trampa langostera, casitas cubanas, trampa para bacalao, trampa para
						pulpo.
					</p><br>
					
					<p>
						<b>Selectividad</b><br><br>
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
						Para conocer más
				</h3>
				<div>
					<p><b>Referencias</b><br>
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
						<li>IUCN 2016. <em><a href="http://www.iucnredlist.org/" target="_blank" style="color: #584B05">La Lista Roja de Especies Amenazadas</a></em>. Versi&oacute;n 2016.2<br><br>
						</li>
						<li>WWF. 2006. Mejores pr&aacute;cticas de pesca en arrecifes
							coralinos. Gu&iacute;a para la colecta de informaci&oacute;n que
							apoye el Manejo de Pesquer&iacute;as Basado en Ecosistemas. WWF
							M&eacute;xico/Centroam&eacute;rica. 81 pp.</li>
					</ul></p><br>
					
					
					<p><b>Lecturas recomendadas</b><br>
					<ul>
						<li>Aburto, O. 2007. <a
							href="http://www.biodiversidad.gob.mx/Biodiversitas/Articulos/biodiv73art2.pdf"
							target="_blank" style="color: #584B05">El pargo amarillo:
								depredador de los arrecifes rocosos</a>. CONABIO. Biodiversitas,
							73:8-11.<br> <br>
						</li>
						<li>Castillo G&eacute;niz, M. 2009. <a
							href="http://www.biodiversidad.gob.mx/Biodiversitas/Articulos/biodiv84art1.pdf"
							target="_blank" style="color: #584B05">Conservar los tiburones</a>.
							CONABIO. Biodiversitas, 84:1-5.<br> <br>
						</li>
						<li>Del Moral Flores, L. F., G. P&eacute;rez Ponce de Le&oacute;n.
							2013. <a
							href="http://www.biodiversidad.gob.mx/Biodiversitas/Articulos/biodiv111art1.pdf"
							target="_blank" style="color: #584B05">Tiburones, rayas y quimeras
								de M&eacute;xico</a>. CONABIO. Biodiversitas, 111:1-6.<br> <br> <a
							href="http://www.biodiversidad.gob.mx/Biodiversitas/Articulos/biodiv111art1.pdf"></a>
						</li>
						<li>L&oacute;pez Jim&eacute;nez, L.N., Gonz&aacute;lez Solis, A.,
							Torruco, D. 2014. <a
							href="http://www.biodiversidad.gob.mx/Biodiversitas/Articulos/biodiv113art3.pdf"
							target="_blank" style="color: #584B05">Peces bent&oacute;nicos y
								demersales de la Sonda de Campeche: sur del Golfo de M&eacute;xico</a>.
							CONABIO. Biodiversitas, 113:12-16.<br> <br>
						</li>
						<li>Monteforte, M., y M. Cari&ntilde;o. 2005.<a
							href="http://www.biodiversidad.gob.mx/Biodiversitas/Articulos/biodiv61art1.pdf"
							target="_blank" style="color: #584B05"> Perspectivas de la
								piscicultura marina en el Golfo de California</a>. CONABIO.
							Biodiversitas, 61:1-7.<br> <br>
						</li>
						<li>Paredes, G.A., B. Erisman, I. Mascare&ntilde;as Osorio, J. Cota
							Nieto, K. Gherard y O. Aburto Oropeza. 2010. <a
							href="http://www.biodiversidad.gob.mx/Biodiversitas/Articulos/biodiv91art1.pdf"
							target="_blank" style="color: #584B05">La curvina golfina:
								Biolog&iacute;a, pesquer&iacute;a y su gente</a>. CONABIO.
							Biodiversitas, 91:1-5.<br> <br>
						</li>
						<li>Romeu, E. 1995. <a
							href="http://www.biodiversidad.gob.mx/Biodiversitas/Articulos/biodiv2art1.pdf"
							target="_blank" style="color: #584B05">Tiburones</a>.
							Biodiversitas, 2:1-6.<br>
						</li>
					</ul></p><br>
					
					
					<p><b>Sitios web</b><br>
					<ul>
						<li><a href="http://www.inapesca.gob.mx/portal/" target="_blank" style="color: #330">Instituto Nacional de la Pesca</a> (INAPESCA)</li>
						<br>
						
						<li><a href="http://www.conapesca.gob.mx/wb/" target="_blank" style="color: #330">Comisi&oacute;n Nacional de Acuacultura y Pesca</a> (CONAPESCA)</li>
						<br>
						
						<li><a href="http://fairtradeusa.org/sites/all/files/wysiwyg/filemanager/standards/spanish/FTUSA_standards_principles_SP_022713.pdf" target="_blank" style="color: #330">Fair Trade USA</a></li>
						<br>
						
						<li><a href="https://www.msc.org/acerca-del-msc/estandares/estandares/estandar-msc-para-la-pesca-sostenible" target="_blank" style="color: #330">Marine Stewardship Council (MSC)</a></li>
						<br>
						
						<li><a href="https://www.seafoodwatch.org/-/m/sfw/pdf/criteria/mba_seafood%20watch_fisheries%20standard_version%20f3.2.pdf?la=en" target="_blank" style="color: #330">Monterey Bay Aquarium – Seafood Watch Program(MBA)</a></li>
						<br>
						
						<li><a href="http://cobi.org.mx/" target="_blank" style="color: #330">Comunidad y Biodiversidad</a></li>
						<br>
						
						<li><a href="http://www.oceanoutcomes.org/" target="_blank" style="color: #330">Ocean Outcomes</a></li>
						<br>

					</ul></p>
					
					
					
				</div>


			</div>
			<br />
			<br />
  </article>

  <article class="bloque4">
	<p class="text_important">
		Carteles
		</p>
		<table width="100%" border="0">
		  <tbody>
			<tr>
			  <td width="50%" align="center" class="titblue2">Peces comerciales de M&eacute;xico: Oc&eacute;ano Pac&iacute;fico</td>
			  <td width="50%" align="center" class="titblue2">Peces comerciales de M&eacute;xico: Golfo y Caribe</td>
			</tr>
			<tr>
			  <td width="50%" align="center"><a href="http://200.12.166.51/janium-bin/janium_zui.pl?jzd=/janium/Documentos/ETAPA06/AP/7390/7390.jzd&fn=7390" target="_blank"><img src="http://www.biodiversidad.gob.mx/usos/alimentacion/images/peces/cartel_peces_pacifico.png" width="250" height="167" /></a></td>
			  <td width="50%" align="center"><a href="http://200.12.166.51/janium-bin/janium_zui.pl?jzd=/janium/Documentos/ETAPA06/AP/7389/7389.jzd&fn=7389" target="_blank"><img src="http://www.biodiversidad.gob.mx/usos/alimentacion/images/peces/cartel_peces_golfo_web.png" width="250" height="167" /></a></td>
			</tr>
			<tr>
			  <td width="50%" align="center">&nbsp;</td>
			  <td width="50%" align="center">&nbsp;</td>
			</tr>
		  </tbody>
		</table>
		
		<div align="center" class="piefoto">Disponibles en nuestro <a href="http://www.biodiversidad.gob.mx/publicaciones/publicaciones.php" target="_blank">cat&aacute;logo de publicaciones</a></div>
		  	

    <p class="text_important">Videos</p>
    	<table width="100%" border="0">
		  <tbody>
			<tr>
			  <td width="50%" align="center" class="titblue2">N&uacute;meros Naturales - Agregaciones de Desove</td>
			  <td width="50%" align="center" class="titblue2">N&uacute;meros Naturales - Sardinas<br/>
			Descubre la historia que se esconde tras la pesquer&iacute;a de sardinas del Golfo de California.</td>
			</tr>
			<tr>
			  <td width="50%" align="center"><iframe src="https://player.vimeo.com/video/177267769?title=0&byline=0&portrait=0" width="80%" height="auto" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></td>
			  <td width="50%" align="center"><iframe src="https://player.vimeo.com/video/177265355?title=0&byline=0&portrait=0" width="80%" height="auto" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></td>
			</tr>
			<tr>
			  <td width="50%" align="center">&nbsp;</td>
			  <td width="50%" align="center">&nbsp;</td>
			</tr>
		  </tbody>
		</table>
       
       
            
		<p class="text_important">Gu&iacute;as</p>
    <span class="piefoto">(pr&oacute;ximamente)</span><br><br><br><br><br>
  </article>
</div>
