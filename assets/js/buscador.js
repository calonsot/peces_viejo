/**
 * Javascript del buscador
 */

function MM_swapImgRestore() 
{ //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_preloadImages() 
{ //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) 
{ //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() 
{ //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
  if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}

function getParams(url){
    var regex = /[?&]([^=#]+)=([^&#]*)/g,
        params = {},
        match;
    while(match = regex.exec(url)) {
        params[decodeURIComponent(match[1])] = decodeURIComponent(match[2]).replace(/\+/g," ");
    }
    return params;
}

function pone_opciones()
{
	var params = getParams(window.location.href);
	
	$.each( params, function( key, value ) {
		if (value === "") return;
	
		switch(key) {
    		case 'nombre_comun':
    		case 'nombre_cientifico':	
    		case 'grupo':	
    			$('#buscador_' + key).val(value);
    			break;
    		case 'nacional_importado[]':
    		case 'cat_riesgo[]':
    		case 'veda[]':
    		case 'selectiva[]':
    		case 'recomendacion[]':	
    			var div_id = '#' + key.replace('[]', '');
    			var checkbox = $(div_id + " :input[value='"+ value +"']");
    			checkbox.prop('checked', true);
    			break;	
    		case 'zonas[]':
    			var div_id = '#' + key.replace('[]', '');
    			var checkbox = $(div_id + " :input[value='"+ value +"']");
    			checkbox.prop('checked', true);
    			MM_swapImage('mapaz','',YII_PATH + '/imagenes/aplicacion/zonas_pesqueras_mapa_' + value + '.jpg',1);
    			break;
	}
	});	
}

function set_url() 
{
	window.history.pushState('page3', 'Peces comestibles', '/page3.php');
}

/*
function filtros(filtro, accion)
{
	var values = {};
	values['accion'] = accion;
		
	switch(filtro.attr('id'))
	{
	    // Para todos los textos o valores unicos
		case 'buscador_nombre_cientifico':
		case 'buscador_nombre_comun':
		case 'buscador_grupo':
		case 'buscador_estado_conservacion':
			values[filtro.attr('id')] = filtro.val();
			break;
			
		//Para todos los checkbox
		case 'buscador_selectiva':
		case 'buscador_no_selectiva':
		case 'buscador_pacifico':
		case 'buscador_golfo':
		case 'buscador_caribe':
		case 'buscador_importado':
		case 'buscador_objetiva':
		case 'buscador_incidental':
		case 'buscador_deportiva':
		case 'buscador_fomento':
		case 'buscador_cultivada':
			if (filtro.is(':checked'))
				values[filtro.attr('id')] = '1';
			else
				values[filtro.attr('id')] = '0';
			break;
			
		//Para los casos de radios, recomendacion
		case 'buscador_recomendable':
		case 'buscador_poco_recomendable':
		case 'buscador_no_recomendable':
		case 'buscador_libre':
			if (filtro.is(':checked'))
				values['buscador_recomendacion'] = filtro.val();			
			else
				values['buscador_recomendacion'] = null;
			break;
			
			//Para los casos de radios, zona
		case 'buscador_zona1':
		case 'buscador_zona2':
		case 'buscador_zona3':
		case 'buscador_zona4':
		case 'buscador_zona5':
		case 'buscador_zona6':
		case 'buscador_zona7':
			if (filtro.is(':checked'))
				values['buscador_zona'] = filtro.val();			
			else
				values['buscador_zona'] = null;
			break;
	}
	
	//Asigna valor a los filtros
	jQuery.ajax({
        success: function(html)
        {
        	//console.log(html);
        	if(html != "")
        	{
        		var html_json = JSON.parse(JSON.stringify(eval("(" + html + ")")));
        		$('#buscador_nombre_comun').val(html_json.buscador_nombre_comun);
        		$('#buscador_nombre_cientifico').val(html_json.buscador_nombre_cientifico);
        		$('#buscador_grupo').val(html_json.buscador_grupo);
        		$('#buscador_estado_conservacion').val(html_json.buscador_estado_conservacion);
        		if (html_json.buscador_selectiva == "1")
        			$('#buscador_selectiva').prop('checked', true);
        		if (html_json.buscador_no_selectiva == "1")
        			$('#buscador_no_selectiva').prop('checked', true);
        		if (html_json.buscador_pacifico == "1")
        			$('#buscador_pacifico').prop('checked', true);
        		if (html_json.buscador_golfo == "1")
        			$('#buscador_golfo').prop('checked', true);
        		if (html_json.buscador_caribe == "1")
        			$('#buscador_caribe').prop('checked', true);
        		if (html_json.buscador_importado == "1")
        			$('#buscador_importado').prop('checked', true);
        		if (html_json.buscador_objetiva == "1")
        			$('#buscador_objetiva').prop('checked', true);
        		if (html_json.buscador_incidental == "1")
        			$('#buscador_incidental').prop('checked', true);
        		if (html_json.buscador_deportiva == "1")
        			$('#buscador_deportiva').prop('checked', true);
        		if (html_json.buscador_fomento == "1")
        			$('#buscador_fomento').prop('checked', true);
        		if (html_json.buscador_cultivada == "1")
        			$('#buscador_cultivada').prop('checked', true);
        		if (html_json.buscador_recomendacion != "")
        		{
        			if (html_json.buscador_recomendacion == '0')
        			{
        				$('#buscador_recomendable').prop('checked', true);
        				$('#buscador_recomendable + label span').css({"background": "url("+YII_PATH+"/imagenes/aplicacion/check_radio_sheet.png) -19px top no-repeat"});	
        			}
        			if (html_json.buscador_recomendacion == '1')
        			{
        				$('#buscador_poco_recomendable').prop('checked', true); 
        				$('#buscador_poco_recomendable + label span').css({"background": "url("+YII_PATH+"/imagenes/aplicacion/check_radio_sheet.png) -19px top no-repeat"});
        			}
        			if (html_json.buscador_recomendacion == '2')
        			{	
        				$('#buscador_no_recomendable').prop('checked', true);
        				$('#buscador_no_recomendable + label span').css({"background": "url("+YII_PATH+"/imagenes/aplicacion/check_radio_sheet.png) -19px top no-repeat"});
        			}	
        		}
        		if (html_json.buscador_zona != "")
        		{
        			if (html_json.buscador_zona == '1')
        			{
        				$('#buscador_zona1').prop('checked', true);
        				MM_swapImage('mapaz','', YII_PATH + '/imagenes/aplicacion/zonas_pesqueras_mapap_i.jpg',1);
        			}
        			if (html_json.buscador_zona == '2')
        			{
        				$('#buscador_zona2').prop('checked', true);
        				MM_swapImage('mapaz','',YII_PATH + '/imagenes/aplicacion/zonas_pesqueras_mapap_ii.jpg',1);
        			}
        			if (html_json.buscador_zona == '3')
        			{
        				$('#buscador_zona3').prop('checked', true);
        				MM_swapImage('mapaz','',YII_PATH + '/imagenes/aplicacion/zonas_pesqueras_mapap_iii.jpg',1);
        			}
        			if (html_json.buscador_zona == '4')
        			{
        				$('#buscador_zona4').prop('checked', true);
        				MM_swapImage('mapaz','',YII_PATH + '/imagenes/aplicacion/zonas_pesqueras_mapag_i.jpg',1);
        			}
        			if (html_json.buscador_zona == '5')
        			{
        				$('#buscador_zona5').prop('checked', true);
        				MM_swapImage('mapaz','',YII_PATH + '/imagenes/aplicacion/zonas_pesqueras_mapag_ii.jpg',1);
        			}
        			if (html_json.buscador_zona == '6')
        			{
        				$('#buscador_zona6').prop('checked', true);
        				MM_swapImage('mapaz','',YII_PATH + '/imagenes/aplicacion/zonas_pesqueras_mapag_iii.jpg',1);
        			}
        		}
        	}
        },
        fail: function(){
            $('#notice').html('Hubo un error al cargar los filtros, por favor intentalo de nuevo.');
        },
        type:'POST',
        url:YII_PATH + '/index.php/peces/filtros',
        data: values
    });
}
*/

$(document).ready(function(){
	//filtros($(this), 'leer');
	
	// Cuando cambia algun filtro en la busqueda
	$("[id^='buscador_']").on('change', function() {
		
		if (window.location.pathname.indexOf('resultado') == -1){
			var params = $('#buscador').serialize();
			window.location.replace(YII_PATH + '/index.php/peces/resultado?' + params);
		
		} else {	
			jQuery.ajax({
				type:'GET',
		        url:YII_PATH + '/index.php/peces/resultado',
		        data: $('#buscador').serialize() + '&ajax=1',
				success: function(peces){
		        	$('#contenido_peces').html(peces);
		        },
		        fail: function(){
		            $('#notice').html('Hubo un error al cargar los filtros, por favor intentalo de nuevo.');
		        }
		    });
		}
		
		return false;
	});
	
	$("#limpiar").on('click', function(){
		window.location = YII_PATH + "/index.php/peces/resultado";
		/*
		jQuery.ajax({
	        success: function(){
	        	window.location = YII_PATH + "/index.php/peces/resultado";
	        },
	        fail: function(){
	            $('#notice').html('Hubo un error al cargar los filtros, por favor intentalo de nuevo.');
	        },
	        type:'POST',
	        url:YII_PATH + '/index.php/peces/borrafiltros',
	        cache:true
	    });*/
	});
	
	$("[id^='zona']").on('click', function() {
		$('#buscador_'+$(this).attr('id')).prop('checked', true);
		
		if (window.location.pathname.indexOf('resultado') == -1){
			var params = $('#buscador').serialize();
			window.location.replace(YII_PATH + '/index.php/peces/resultado?' + params);
		
		} else {	
			jQuery.ajax({
				type:'GET',
		        url:YII_PATH + '/index.php/peces/resultado',
		        data: $('#buscador').serialize() + '&ajax=1',
				success: function(peces){
		        	$('#contenido_peces').html(peces);
		        },
		        fail: function(){
		            $('#notice').html('Hubo un error al cargar los filtros, por favor intentalo de nuevo.');
		        }
		    });
		}
		
		return false;
	});    
	
	$(document).on('click', "[id^='dat_']", function(event) {
		var id = $(this).attr('id').substring(4);
        $('.ver .dresul_body').slideToggle();
		$(".ver").removeClass('ver');
        
		if ($("#dresul_body_"+id).is(':visible'))
        {

        } else {
            $("#dresul_body_"+id).slideToggle();
            $("#dresul_"+id).addClass( "ver" );
        }
	});
	
	pone_opciones();
});